import NotFound from './components/NotFound';
import UserSettingsForm from './components/UserSettingsForm';
import RenderFunctionCompo from './components/RenderFunctionCompo';


export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [

        {
            path: '*',
            component: NotFound

        },

        {
            path: '/home/controlled-component',
            component: UserSettingsForm

        },
        {
            path: '/home/render-function',
            component: RenderFunctionCompo

        },

    ],



}