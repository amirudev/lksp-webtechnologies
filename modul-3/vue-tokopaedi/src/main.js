// import { createApp } from 'vue'
// import Vuex from 'vuex'
// import App from './App.vue'
// import 'es6-promise/auto'

// import router from './router/index.js'

// const store = new Vuex.Store({
//   state: {
//     count: 0
//   },
//   mutations: {
//     increment (state) {
//       state.count++
//     }
//   }
// })

// const app = createApp(App)
// app.use(router)
// app.use(Vuex)
// app.use(store)
// app.mount('#app')

import { createApp } from 'vue'
import Vuex from 'vuex'
import 'es6-promise/auto'

import router from './router/index.js'
import App from './App.vue'

import './index.css'

const app = createApp(App)
app.use(router)
app.use(Vuex)

const store = new Vuex.Store({
    state: {
        cart: []
    },
    mutations: {
        addItem(state, item){
            state.cart.push(item)
            console.log(item)
            console.log(state.cart)
        }
    },
    getters: {
        cartCount: state => {
            return state.cart.length
        }
    }
})

app.use(store)
app.mount('#app')
