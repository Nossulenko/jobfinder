import { createApp } from 'vue'
import store from './store' 
import './style.css'
import App from './App.vue'

createApp(App)
.store(store)
.mount('#app')


//main.js contains the JavaScript to initialise a Vue app. App.vue contains the root component of a Vue app.