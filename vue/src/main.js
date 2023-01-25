import { createApp } from 'vue'
import store from './store'
import router  from './router'
import './index.css'
import App from './App.vue'


createApp(App)
.use(store)
.use(router)
.mount('#app')


//main.js contains the JavaScript to initialise a Vue app. App.vue contains the root component of a Vue app.