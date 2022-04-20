import "./main.scss";
import vue from "vue";
import sample from "./components/sample.vue";
import vuetify from "./plugins/vuetify.js";
import VueGtag from "vue-gtag";
import "./plugins/axios.js";
import "./plugins/global.js";
import "./plugins/vue-cookie.js";
import "./plugins/HotelDatePicker/HotelDatePicker.js";
import { i18n } from "./plugins/i18n.js";
import { store } from "./store/main.js";
import app from "./components/App.vue";
import "./plugins/global.js";
import VueRouter from "vue-router";
vue.component("sample", sample);
vue.component("app", app);
vue.config.devtools = false;

let id = "UA-176424086-1";
let url = location.href;
url = url.substring(url.indexOf(".")).split("/")[0];

if (url == ".com") {
  id = "UA-151388614-1";
}
vue.use(VueGtag, {
  config: { id: id },
});
vue.use(VueRouter);
const router = new VueRouter({
  mode: 'history',
});
new vue({
  el: "#app",
  vuetify,
  i18n,
  store,
  router,
  components: {
    sample,
    app,
  },
});
