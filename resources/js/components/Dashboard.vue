<template>
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{count.event}}</h3>

                    <p>Posts</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-newspaper"></i>
                  </div>
                  <router-link to="/event" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </router-link>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{count.slider}}</h3>

                    <p>Slider</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-photo-video"></i>
                  </div>
                  <router-link to="/slider" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </router-link>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{count.contact}}</h3>

                    <p>Contact</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <router-link to="/contact" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </router-link>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{count.video}}</h3>

                    <p>Videos</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-video"></i>
                  </div>
                  <router-link to="/video" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                  </router-link>
                </div>
            </div>

        </div>
        <not-found></not-found>
    </div>
</template>

<script>
  import NotFound from './NotFound'
    export default {
      components:{
             'not-found':NotFound
         },
      data(){
        return{

          count: []

        }
      } ,
        created() {
            axios.get("api/dashboard")
              .then((data) => {
                this.count = data.data
              });
        }
    }
</script>
