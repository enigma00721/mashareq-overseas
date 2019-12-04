

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// ------------------ for acl ----------------------------
import Gate from './Gate';
Vue.prototype.$gate = new Gate(window.user);
// ------------------ for acl ----------------------------




//  ----------------- datepicker --------------
// import V2Datepicker from 'v2-datepicker';
// Vue.use(V2Datepicker)


// ------------- for validation --------------------
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


// ------------- moment js for date manipulation ---------
import moment from 'moment'


// ------------- progressbar ---------
import VueProgressBar from 'vue-progressbar'


// -------------- sweet alert2 --------------
import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.Toast = Toast;
// -------------- sweet alert2 --------------


let Fire = new Vue();
window.Fire = Fire;
// window.Fire = new Vue();



//  ------ pagination --------------
Vue.component('pagination', require('laravel-vue-pagination'));



Vue.component(
  'not-found' , 
  require('./components/NotFound.vue')
);


//   without default doesn't render the component
let routes = [
  { path: '/dashboard', component: require('./components/Dashboard.vue').default },
  { path: '/team', component: require('./components/Team.vue').default },
  { path: '/user', component: require('./components/User.vue').default },
  { path: '/contact', component: require('./components/Contact.vue').default },
  { path: '/category', component: require('./components/Category.vue').default },
  { path: '/event', component: require('./components/Event.vue').default },
  { path: '/slider', component: require('./components/Slider.vue').default },
  { path: '/video', component: require('./components/Video.vue').default },
  { path: '/menubuilder', component: require('./components/Menubuilder.vue').default },
  { path: '/gallery', component: require('./components/Gallery.vue').default },

  { path: '/event/view/:id', component: require('./components/EventView.vue').default },
  { path: '/gallery/view/:id', component: require('./components/GalleryView.vue').default },

  { path: '*', component: require('./components/NotFound.vue').default },
]

const router = new VueRouter({
	mode:'history',
	routes
})



// --------------- global filters --------------

	// ------------ text filter -------------------
Vue.filter('capitalWhole', function (text) {
	return text.toUpperCase();
})

Vue.filter('capitalText', function (text) {
  if (!text) return ''
  text = text.toString()
  return text.charAt(0).toUpperCase() + text.slice(1)
})


	// ------------ date filter -------------------
Vue.filter('myDate',function(date){
	return moment(date).format('MMMM Do YYYY');
})

Vue.filter('myDateOther',function(date){
	return moment(date, "YYYYMMDD").fromNow();
})

// --------------- global filter end --------------



// --------------- progress bar --------------
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '4px'
})





const app = new Vue({
	el:"#app" ,
    router
});
