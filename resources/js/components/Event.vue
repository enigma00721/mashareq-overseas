<template>
    <div class="container">
        <div class="row pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Event List</h3>

                <div class="card-tools">
                  <button class="btn btn-success" type="button" @click="createModal">
                    Add New &nbsp;<i class="fas fa-user-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Date</th>
                      <th>Image</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="event in events.data" :key="event.id">
                      <td> {{ event.id }} </td>
                      <td> {{ event.name }} </td>
                      <td> {{ event.location }} </td>
                      <td> {{ event.date | myDate}} </td>
                      
                      <td> 
                        <img :src="getImage(event.image)" width="90px" height="60px">
                      </td>
                      <td>


                          <router-link  :to="`/event/view/${event.id}`"> 
                              <i class="fas fa-eye"></i>
                          </router-link>

                          <span>&nbsp;/&nbsp;</span> 

                          <a href="#" @click="editModal(event)">
                              <i class="fa fa-edit"></i>
                          </a>

                          <span>&nbsp;/&nbsp;</span>

                          <a href="#" @click="deleteEvent(event.id)">
                              <i class="fa fa-trash text-red"></i>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <pagination :data="events" @pagination-change-page="getResults" align="center">
                  <span slot="prev-nav">&lt; Previous</span>
                    <span slot="next-nav">Next &gt;</span>
                </pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- row end -->

        <!-- Modal -->
        <div class="modal fade" id="addNewEvent" tabindex="-1" role="dialog" aria-labelledby="addNewEventLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewEventLabel" v-if="!editmode">Add New Event</h5>
                 <h5 class="modal-title" id="addNewEventLabel" v-else>Update Event Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <form @submit.prevent="editmode ? updateEvent() : createEvent()">
                  <div class="modal-body">
                    
                    <div class="form-group">
                      <input v-model="form.name" type="text" name="name"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }"placeholder="Event Full Name" @blur="slugConverted">
                      <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.location" type="text" name="location"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('location') }"placeholder="Event Location">
                      <has-error :form="form" field="location"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.date"  name="date" type="date" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('date') }" placeholder="Event Date" ></input>
                        <!-- <v2-datepicker v-model="form.date" name="date"></v2-datepicker> -->
                      
                      <has-error :form="form" field="date"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.price" type="text" name="price"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('price') }"placeholder="Event Price">
                      <has-error :form="form" field="price"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.organizer" type="text" name="organizer"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('organizer') }" placeholder="Event Organizer">
                      <has-error :form="form" field="organizer"></has-error>
                    </div>

                    <div class="form-group">
                      <Select2 v-model="form.category" :options="myOptions"  name="category"          :settings="{ multiple:true ,placeholder:'Choose Category'}" :class="{ 'is-invalid': form.errors.has('category') }"  
                      />
                      <has-error :form="form" field="category"></has-error>
                    </div>

                    <div class="form-group">
                      <label v-if="editmode">New Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" @change="uploadImage" name="image" class="custom-file-input" :class="{ 'is-invalid': form.errors.has('image') }" >
                          <has-error :form="form" field="image"></has-error>
                          <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <vue-editor v-model="form.description"></vue-editor>
                    </div>

                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" v-if="editmode">Update</button>
                    <button type="submit" class="btn btn-primary" v-else>Create</button>
                  </div>
              </form>

            </div>
          </div>
        </div>
        <!-- modal end -->

    </div>
    <!-- container end -->
</template>
<style type="text/css">
  .select2-container {
      width: 100% !important;
  }
  .select2-search__field{
    width: 100% !important;
  }
</style>
<script>

  // import Select2Component
  import Select2 from 'v-select2-component';
  import { VueEditor } from "vue2-editor";

  // Vue.component('Select2', Select2);


    export default {


      components: {
            VueEditor ,
            Select2
         },


        data(){
            return{

              check:"good",

                events:{},

                categories:[],

                editmode:false,

                form: new Form({
                    id: '',
                    name: '',
                    slug: '',
                    location: '',
                    date: '',
                    price: '',
                    organizer: '',
                    image: '',
                    description: '',
                    category:''
                })

            }
        } ,

        computed:{
          myOptions:function(){
              return this.categories.map(obj =>  ({id:obj.id , text:obj.title}) );
          }
        },

       
        methods:{

          // -------- for pagination data load ------------------
          getResults(page=1){
            axios.get('api/event?page=' + page)
                .then(response => {
                  this.events = response.data;
                });
          },

            //   change route/page another method using router property
          // eventViewPage(eventid){
          //   this.$router.push({ path: 'event/view/' , params:{id:eventid} });
          // },

            loadEvents(){

                axios.get('api/event')
                    .then( ({data}) => {
                        this.events = data;
                    })

            },

            getImage(imagename){

                return "images/event/" + imagename;

            },

            uploadImage(e){

                // console.log('file upload');
                let file = e.target.files[0];
                // console.log(file);      // file info like name, size
                let reader = new FileReader();

                if(file['size'] < 1048576 ){    // size in bytes 1Mb

                    reader.onloadend = (file) => {
                        this.form.image = reader.result;
                        // console.log(reader.result);
                    }

                    reader.readAsDataURL(file);

                }else{

                    Swal.fire({
                        type: 'error' ,
                        title: 'Oops!' ,
                        text: 'You are uploading a large file'
                    });

                }

            },

            slugConverted() {
                 
                 // Change to lower case
                 var titleLower = this.form.name.toLowerCase();
                 // Letter "e"
                 this.form.slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
                 // Letter "a"
                 this.form.slug = this.form.slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
                 // Letter "o"
                 this.form.slug = this.form.slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
                 // Letter "u"
                 this.form.slug = this.form.slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
                 // Letter "d"
                 this.form.slug = this.form.slug.replace(/đ/gi, 'd');
                 // Trim the last whitespace
                 this.form.slug = this.form.slug.replace(/\s*$/g, '');
                 // Change whitespace to "-"
                 this.form.slug = this.form.slug.replace(/\s+/g, '-');

            },

            createEvent(){

                // progressbar start
                this.$Progress.start();

                this.form.post('api/event')
                       .then(() => {

                            // progressbar finish
                            this.$Progress.finish();

                            $("#addNewEvent").modal("hide");

                            // toast message is fired
                            Toast.fire({
                              type: 'success',
                              title: 'event Created successfully'
                            })

                            this.loadEvents();

                       })
                       .catch(()=>{
                            // progressbar fail
                            this.$Progress.fail()
                       })

            },

            updateEvent(){

                // progressbar start
                this.$Progress.start()

                this.form.put("api/event/"+this.form.id)
                    .then(() => {

                        // progressbar finish
                        this.$Progress.finish()

                        $("#addNewEvent").modal("hide");

                        // toast message is fired
                        Toast.fire({
                          type: 'success',
                          title: 'Event Details Updated successfully'
                        })

                        this.loadEvents();

                    })
                    .catch(() => {

                        // progressbar fail
                        this.$Progress.fail()

                    })

            },

            deleteEvent(id){

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

                        this.form.delete("api/event/"+id)
                            .then(() => {

                                Swal.fire(
                                  'Deleted!',
                                  'Event has been deleted.',
                                  'success'
                                )

                                // progressbar finish
                                this.$Progress.finish();

                                this.loadEvents();

                            })
                            .catch(() => {

                                // progressbar fail
                                this.$Progress.fail();

                            });
                    }
                })
                // swal fire end

            },

            createModal(){

                this.editmode = false;
                this.form.reset();
                $("#addNewEvent").modal("show");

            } ,

            editModal(event){

                this.editmode = true;

                // dynamically selects category associated with the edit modal
                axios.get('api/category/selected/' + event.id)
                  .then( ({data}) => {
                    this.form.category = data;
                  });

                $("#addNewEvent").modal("show");
                this.form.fill(event);

            }

        } ,

        created(){

            this.loadEvents();

            axios.get('api/category')
                .then( ({data}) => {
                    this.categories = data;
                });
        }

    }
</script>
