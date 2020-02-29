import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user : {},
    data: {},
    list : {},
    workspace: {
    	data: {},
    	list: {}
    }
  },
  mutations: {
  	setUser(state,payload) {
  		state.user = payload.data
  	},
  	setList(state,payload) {
  		state.list[payload.name] = payload.data
  	},
  	setData(state,payload) {
  		state.data[payload.name] = payload.data
  	}
  }
})