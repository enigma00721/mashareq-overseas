<template>
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Event Information</div>
                    <div class="card-widget">
                        <div class="widget-user-header text-white">
                        <!-- style="background: url('../dist/img/photo1.png') center center;" -->
                           <img :src="getImage(event.image)" width="100%" height="200px" id="coverimage">
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="post">
                          <div class="user-block">
                            <span class="username">
                              Event Name
                            </span>
                            <span class="description">{{event.name}}</span>
                          </div>
                        </div>
                        <!-- post end -->

                        <div class="post">
                          <div class="user-block">
                            <span class="username">
                              Event Location
                            </span>
                            <span class="description">{{event.location}}</span>
                          </div>
                        </div>
                        <!-- post end -->

                        <div class="post">
                          <div class="user-block">
                            <span class="username">
                              Event Date
                            </span>
                            <span class="description">{{event.date}}</span>
                          </div>
                        </div>
                        <!-- post end -->

                        <div class="post">
                          <div class="user-block">
                            <span class="username">
                              Event Organizer
                            </span>
                            <span class="description">{{event.organizer}}</span>
                          </div>
                        </div>
                        <!-- post end -->

                        <div class="post">
                          <div class="user-block">
                            <span class="username">
                              Price
                            </span>
                            <span class="description">{{event.price}}</span>
                          </div>
                        </div>
                        <!-- post end -->

                        <div class="post mt-4 clearfix" style="border-bottom: none;">
                          <div class="user-block">
                            <span class="username mb-4">
                              Event Description
                            </span>
                            <vue-editor v-model="event.description" disabled></vue-editor>
                          </div>
                        </div>
                        <!-- post end -->

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
    import { VueEditor } from "vue2-editor";

    export default {

        components: {
              VueEditor 
           },

        data(){
            return{
                event:{}
            }
        },
        created() {
            this.loadSingleEvent();
        },

        methods:{

            loadSingleEvent(){

                                // id is route parameter dynamic
                axios.get('/api/event/'+ this.$route.params.id)
                    .then( ({data}) => {
                        this.event = data;
                    })
            } ,

            getImage(imagename){

                return "/images/event/" + imagename;

            },
        }
       
    }
</script>
