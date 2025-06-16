import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createI18n } from 'vue-i18n';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';


/**
 * Messages
 */
const messages = {
    en: {
        message: {
           fieldSelectAnItem: "Select an item",
        }
    },
    fr: {
        message: {
           fieldSelectAnItem: "Sélectionner un élément",
        }
    }
}

//
// Create i18n 
//
const i18n = createI18n({
    // something vue-i18n options here ...
    legacy: false, // you must set `false`, to use Composition API
    locale: document.querySelector('meta[name="locale"]').content, // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
})

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(i18n)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
