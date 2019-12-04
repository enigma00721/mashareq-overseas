<template>
    <div class="container pt-4">
        <div class="row justify-content-center">
              <!-- add new menubuilder section -->
              
              <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header bg-info">
                      <h3 class="card-title">Add New Menu</h3>
                    </div>
                    <div class="card-body">
                      <!-- Color Picker -->
                      <div class="form-group">
                        <input type="text" class="form-control" name="title" v-model="newMenu" @keyup.enter="save" id="NewMenu">

                      </div>
                      <!-- /.form group -->
                      <div class="text-center">
                        <button type="button" class="btn btn-outline-primary btn-md" @click="save">Save</button>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
              <!-- add new menubuilder section  end  -->
              

        </div>

        <div class="row">

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                
                <label v-for="list in lists"
                       :for="list.title" 
                       :key="list.id">
                  
                  <input type="checkbox" 
                         name="lists[]" 
                         :id="list.id" 
                         :value="list.title" 
                         @change="selected(list)" :checked="false"> 
                    {{list.title}}
                </label>
              </div>
            </div>
          </div>

          <div class="col-md-8">
                <draggable :list="menus" :disabled="!enabled" class="list-group" ghost-class="ghost"
                         @start="dragging = true" @end="dragging = false"
                        :options="{animation:200}"  @change="updateOrder"
                >

                    <div class="list-group-item" v-for="element in menus" :key="element.id">
                      {{ element.title }}

                      <span class="float-right"><button class="btn btn-sm btn-danger" @click="deleteMenu(element.id)">X</button></span>
                    </div>

                </draggable>
            
          </div>
        </div>
        <!-- row end -->


    </div>
    <!-- container end -->
</template>
<style type="text/css" scoped>
  label{
    display:  block;
  }
</style>

<script>

  import draggable from "vuedraggable";
    export default {
      data(){
        return{

          newMenu: '',
          slug: '',

          enabled: true,

          lists: [],        // category list
          menus: [],        // menubuilder

          dragging: false

        }
      } ,

      methods:{

        loadCategory(){

            axios.get("api/category")
                .then( ({data}) => (this.lists = data) );

        },

        loadMenus(){

          axios.get("api/menubuilder")
              .then( ({data}) => (this.menus = data) );
           
        },

        selected(list) {
              if (event.target.checked) {
               
                console.log(list.title);
                axios.post("api/menubuilder",list)
                        .then(() => {

                          // progressbar finish
                          this.$Progress.finish();


                          // toast message is fired
                          Toast.fire({
                            type: 'success',
                            title: 'Category Sent to Menubuider successfully'
                          })

                        })
                        .catch(() => {
                            // progressbar fail
                            this.$Progress.fail()
                        }); 
                  this.loadMenus();                   
              } 
        },

        save(){

          // progressbar start
          this.$Progress.start()

          // Submit the form via a POST request
          axios.post('api/category' , {
                    title: this.newMenu,
                    slug: this.slugConverted
                })
              .then(() => {

                  // progressbar finish
                  this.$Progress.finish();

                  this.loadCategory();

                  // toast message is fired
                  Toast.fire({
                    type: 'success',
                    title: 'Menu Created successfully'
                  })

                  // clear input field
                  this.newMenu = "";

              })
              .catch(() => {
                  // progressbar fail
                  this.$Progress.fail()
              });
              
        },

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

        updateOrder(){

          // progressbar start
          this.$Progress.start()
          // console.log('updating');

          this.menus.map((menu,index) => {
            menu.order = index + 1;
          })

          axios.post("api/menubuilder/sorting" , this.menus)

              .then(() => {
                // progressbar finish
                this.$Progress.finish();

                this.loadCategory();
                this.loadMenus();

                // toast message is fired
                Toast.fire({
                  type: 'success',
                  title: 'MenuOrder Updated successfully'
                })

              })
              .catch(()=>{
                // progressbar fail
                this.$Progress.fail()
              })

        },

        deleteMenu(id){

          // progressbar start
          this.$Progress.start()

          axios.delete("api/menubuilder/" + id)

              .then(() => {

                  // progressbar finish
                  this.$Progress.finish();

                  this.loadCategory();
                  this.loadMenus();

                  // toast message is fired
                  Toast.fire({
                    type: 'success',
                    title: 'Menu Deleted successfully'
                  })

              })
              .catch(()=>{

                  // progressbar fail
                  this.$Progress.fail()

              });

        },

        checkMove: function(evt) {
              // console.log(evt.draggedContext.element.id);
              // console.log(evt.draggedContext.element.newId);
        } ,

        

      } ,

      created() {
          this.loadCategory();
          this.loadMenus();
      },

      computed:{

          slugConverted(){
              
              this.slug = this.sanitizeTitle(this.newMenu);
              return this.slug;
          },



      }
    }
</script>
