import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export const store = new Vuex.Store({
    state: {
      airfaireType: null,
      adult: 1,
      infant: 0,
      child: 0,
    },
    mutations: {
      getAirType (state,type) {
        state.airfaireType = type
      },
      getPassengers(state,{adult,infant,child}) {
        state.adult = adult
        state.infant = infant
        state.child = child
      }

    }
})