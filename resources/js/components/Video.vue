<template>
    <div class="container">
        <div class="row pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Video</h3>

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
                      <th>Title</th>
                      <th>Image</th>
                      <th>Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="video in videos" :key="video.id">
                      <td> {{ video.id }} </td>
                      <td> {{ video.title }} </td>
                      <td> 
                        <img :src="getImage(video.image)" width="90px" height="60px">
                      </td>
                      <td>
                          <a href="#" @click="editModal(video)">
                              <i class="fa fa-edit"></i>
                          </a>

                          <span>&nbsp;/&nbsp;</span>

                          <a href="#" @click="deleteVideo(video.id)">
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
        <div class="modal fade" id="addNewVideo" tabindex="-1" role="dialog" aria-labelledby="addNewVideoLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addNewVideoLabel" v-if="!editmode">New Video</h5>
                 <h5 class="modal-title" id="addNewVideoLabel" v-else>Update Video Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <form @submit.prevent="editmode ? updateVideo() : createVideo()">
                  <div class="modal-body">
                    
                    <div class="form-group">
                      <input v-model="form.title" type="text" name="title"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('title') }"placeholder="Full Title">
                      <has-error :form="form" field="title"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.url" type="text" name="url"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('url') }"placeholder="Full Url">
                      <has-error :form="form" field="url"></has-error>
                    </div>

                    <div class="form-group">
                      <textarea v-model="form.body" type="text" name="body" rows="5" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('body') }"placeholder="Optional Body"></textarea>
                      <has-error :form="form" field="body"></has-error>
                    </div>

                    <div class="form-group">
                      <label v-if="editmode">New Image</label>
                      <label v-else>Optional Image</label>
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

                  </div>
                  <!-- modal body end -->


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

<script>
    export default {

        data(){
            return{

                videos:{},

                editmode:false,

                form: new Form({
                    id: '',
                    title: '',
                    url:'',
                    body:'',
                    image: ''
                })

            }
        } ,

        methods:{

            loadVideos(){

                axios.get('api/video')
                    .then( ({data}) => {
                        this.videos = data;
                    })

            },

            getImage(imagename){

                return "images/video/" + imagename;

            },

            // convert image type to some json/encoding
            uploadImage(e){

                // console.log('file upload');
                let file = e.target.files[0];
                // console.log(file);      // file info like name, size
                let reader = new FileReader();

                if(file['size'] < 2111775){

                    reader.onloadend = (file) => {
                        this.form.image = reader.result;
                        // console.log(reader.result);
                    }

                    reader.readAsDataURL(file);

                }else{

                    Swal({
                        type: 'error' ,
                        title: 'Oops!' ,
                        text: 'You are uploading a large file'
                    })

                }

            },

            createVideo(){

                // progressbar start
                this.$Progress.start();

                this.form.post('api/video')
                       .then(() => {

                            // progressbar finish
                            this.$Progress.finish();

                            $("#addNewVideo").modal("hide");

                            // toast message is fired
                            Toast.fire({
                              type: 'success',
                              title: 'video Created successfully'
                            })

                            this.loadVideos();

                       })
                       .catch(()=>{
                            // progressbar fail
                            this.$Progress.fail()
                       })

            },

            updateVideo(){

                // progressbar start
                this.$Progress.start()

                this.form.put("api/video/"+this.form.id)
                    .then(() => {

                        // progressbar finish
                        this.$Progress.finish()

                        $("#addNewVideo").modal("hide");

                        // toast message is fired
                        Toast.fire({
                          type: 'success',
                          title: 'Video Info Updated successfully'
                        })

                        this.loadVideos();

                    })
                    .catch(() => {

                        // progressbar fail
                        this.$Progress.fail()

                    })

            },

            deleteVideo(id){

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

                        this.form.delete("api/video/"+id)
                            .then(() => {

                                Swal.fire(
                                  'Deleted!',
                                  'Video has been deleted.',
                                  'success'
                                )

                                // progressbar finish
                                this.$Progress.finish();

                                this.loadVideos();

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
                $("#addNewVideo").modal("show");

            } ,

            editModal(team){

                this.editmode = true;
                $("#addNewVideo").modal("show");
                this.form.fill(team);

            }

        } ,

        created(){

            this.loadVideos();

        }

    }
</script>
