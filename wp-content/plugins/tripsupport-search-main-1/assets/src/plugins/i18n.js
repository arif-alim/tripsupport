import Vue from 'vue';
import VueI18n from 'vue-i18n';
import en from './../locales/en.js';
import fr from './../locales/fr.js';
Vue.use(VueI18n);
let url = location.href;
let locale = 'en';
if (url.includes('/fr/')) {
  locale = 'fr';
}
// let locale = 'en';
// let LanguageSource = localStorage.getItem('Language-source');
// if (LanguageSource == 'fr-FR') {
//   locale = 'fr';
// }

export const i18n = new VueI18n({
  locale: locale,
  fallbackLocale: locale,
  messages: { en, fr },
});
