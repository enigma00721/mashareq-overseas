<template>
    <div class="container">
        <div class="row pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category List</h3>

                <div class="card-tools">
                  <button type="submit" class="btn btn-success" @click="newModal">
                    Add New &nbsp;
                    <i class="fas fa-user-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Created At</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="category in categories" :key="category.id">
                      <td> {{ category.id }} </td>
                      <td> {{ category.title | capitalText }} </td>
                      <td> {{ category.slug }} </td>
                      
                      <td> 
                        {{ category.created_at | myDateOther }}
                      </td>
                      <td>
                          <a href="#" @click="editModal(category)">
                              <i class="fa fa-edit"></i>
                          </a>

                          <span>&nbsp;/&nbsp;</span>

                          <a href="#" @click="deleteCategory(category.id)">
                              <i class="fa fa-trash text-red"></i>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- row end -->

        <!-- Modal -->
        <div class="modal fade" id="addNewCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addNewCategoryModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 v-if="!editmode" class="modal-title" id="addNewCategoryModalLabel">Add New Category</h5>
                <h5 v-else class="modal-title" id="addNewCategoryModalLabel">Update Category Info</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


             <form @submit.prevent="editmode ? updateCategory() : createCategory()">
              <!-- input fields -->
              <div class="modal-body">

                <div class="form-group">
                  <input v-model="form.title" type="text" name="title"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('title') }" placeholder="Category Title">
                  <has-error :form="form" field="title"></has-error>
                </div>   

                <div class="form-group">
                  <input v-model="slugConverted" type="text" name="slug"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('slug') }" placeholder="Category Slug" disabled="disabled"> 
                  <has-error :form="form" field="slug"></has-error>
                </div>   
             
              </div>
               <!-- modal body end -->



              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button v-show="editmode" type="submit" class="btn btn-primary px-4">Update</button>
                <button v-show="!editmode" type="submit" class="btn btn-primary px-4">Create</button>
              </div>
             </form>

            </div>
          </div>
        </div>
        <!-- Modal end -->

    </div>
</template>

<script>
    export default {
        
        data(){
            return{

                editmode: false,

                categories:{},

                form: new Form({
                    id: '',
                    title : '' ,
                    slug : '' ,
                })

            }
        },

        computed:{

            slugConverted(){
                
                    this.form.slug = this.sanitizeTitle(this.form.title);
                    // this.form.slug = this.sanitizeTitle(value);
                    return this.form.slug;
                }

        },

        methods:{

            sanitizeTitle: function(title) {

                  var slug = "";
                  // Change to lower case
                  var titleLower = title.toLowerCase();
                  // Letter "e"
                  slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
                  // Letter "a"
                  slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
                  // Letter "o"
                  slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
                  // Letter "u"
                  slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
                  // Letter "d"
                  slug = slug.replace(/đ/gi, 'd');
                  // Trim the last whitespace
                  slug = slug.replace(/\s*$/g, '');
                  // Change whitespace to "-"
                  slug = slug.replace(/\s+/g, '-');
                  
                  return slug;

            },

            newModal(){

                this.editmode = false;
                this.form.reset();
                $("#addNewCategoryModal").modal("show");

            },

            editModal(category){

                this.editmode = true;
                $("#addNewCategoryModal").modal("show");
                this.form.fill(category);

            },

            loadCategory(){

                // {data} is returned from controller as array of object
                axios.get("api/category")
                    .then( ({data}) => (this.categories = data) );

            },

            createCategory(){
                
                // progressbar start
                this.$Progress.start()

                // Submit the form via a POST request
                this.form.post('api/category')
                    .then(() => {

                        // progressbar finish
                        this.$Progress.finish()

                        this.loadCategory();
                        $("#addNewCategoryModal").modal("hide");

                        // toast message is fired
                        Toast.fire({
                          type: 'success',
                          title: 'Category Created successfully'
                        })

                    })
                    .catch(() => {
                        // progressbar fail
                        this.$Progress.fail()
                    });
                    
                

            },

            updateCategory(){

                // progressbar start
                this.$Progress.start()

                this.form.put("api/category/"+this.form.id)
                    .then(() => {

                        // progressbar finish
                        this.$Progress.finish()

                        $("#addNewCategoryModal").modal("hide");

                        // toast message is fired
                        Toast.fire({
                          type: 'success',
                          title: 'Category Updated successfully'
                        })
                        this.loadCategory();

                    })
                    .catch(() => {
                        // progressbar fail
                        this.$Progress.fail()
                    });

            },

            deleteCategory(id){
                Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                  if (result.value) {

                    // progressbar start
                    this.$Progress.start()

                    // send request to delete user
                    this.form.delete("api/category/"+id)
                        .then(() => {
                            Swal.fire(
                              'Deleted!',
                              'Category has been deleted.',
                              'success'
                            )
                            this.loadCategory();
                            // progressbar finish
                            this.$Progress.finish()
                        })
                        .catch(() => {
                            Swal.fire(
                              'Failed!',
                              'Something went wrong.',
                              'warning'
                            )
                            // progressbar fail
                            this.$Progress.fail()
                        });
                    
                  }
                })
            }

        },

        created(){

            this.loadCategory();

            // listening for custom event
            Fire.$on('AfterUserIsCreated' , () => {
                this.loadCategory();
            })
        }


    }
</script>
