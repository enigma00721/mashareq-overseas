<template>
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Add Gallery Images</div>
                    <div class="card-widget">
                        <div class="widget-user-header text-white">
                           <!-- <img :src="getImage(event.image)" width="100%" height="200px" id="coverimage"> -->
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card-widget">

                           <!--  <div class="input-group">
                              <div class="custom-file">
                                <input type="file" @change="uploadImage" name="image" class="custom-file-input" multiple="multiple">
                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                              </div>
                            </div> -->

                            <vue-dropzone 
                                ref="myVueDropzone" 
                                id="dropzone" 
                                :options="dropzoneOptions" 
                                v-on:vdropzone-sending="sendingEvent"
                                v-on:vdropzone-thumbnail="thumbnail"
                                v-on:vdropzone-mounted="mountingv"
                            >
                                
                            </vue-dropzone>

                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" @click="save">Save</button>
                            </div>

                        </div>


                        <div class="row">
                          <div class="col-md-4">
                            
                          </div>
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn  btn-danger btn-lg" @click="$router.go(-1)">Go Back</button>
                        </div>

                    </div>
                    <!-- card body end -->
                </div>
            </div>
        </div>
    </div>
</template>

<style type="text/css">
    #coverimage{
        object-fit:cover;
    }
</style>

<script>

    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    // Vue.use(vue2Dropzone);

    export default {

        components: {
            vueDropzone: vue2Dropzone
          },
    
        data(){
            return{

                event:{},

                images:[],

                dropzoneOptions: {
                  url: 'http://127.0.0.1:8000/api/gallery/image/'+this.$route.params.id ,
                
                  maxFilesize: 2, // MB
                       maxFiles: 4,
                       chunking: true,
                       chunkSize: 500, // Bytes
                       thumbnailWidth: 150, // px
                       thumbnailHeight: 150,
                       // addRemoveLinks: true
                }

            }
        },
        created() {
            // this.loadSingleEvent();
        },

        methods:{

    
            mountingv(){
                console.log('mounting vue');
            },
            sendingEvent (file, xhr, formData) {
                   // console.log(file);
                   // console.log(xhr);
                   // console.log(formData);
                },

                thumbnail(file, dataUrl){
                    console.log(file);
                }   ,

          save(){
            axios.post('/api/gallery/image/'+this.$route.params.id  , this.images)
                .then()
                .catch();
          },

          uploadImage(e){

                // console.log('file upload');
                let file = e.target.files[0];
                // console.log(file);      // file info like name, size
                let reader = new FileReader();

                if(file['size'] < 1048576 ){    // size in bytes 1Mb

                    reader.onloadend = (file) => {
                        this.images = reader.result;
                        console.log(reader.result);
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

            // loadSingleEvent(){

            //     // id is route parameter dynamic
            //     axios.get('/api/event/'+ this.$route.params.id)
            //         .then( ({data}) => {
            //             this.event = data;
            //         })
            // } ,

            getImage(imagename){

                // return "/images/event/" + imagename;

            },
        }
       
    }
</script>
