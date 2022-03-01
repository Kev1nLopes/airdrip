import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);


export default new Vuex.Store({
  state:{
    loged: false,
    user: null,
    token: null,
    type_token: null
  },
  mutations:{
    login(state, payload){
      state.loged = payload;
    },
    changeUser(state, payload){
      state.user = payload
    },
    changeToken(state, payload){
      state.token = payload
    },
    changeType(state,payload){
      state.type_token = payload
    }

  },
  actions:{

  }
})