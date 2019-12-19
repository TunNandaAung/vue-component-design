import NotFound from './components/NotFound';
import UserSettingsForm from './components/UserSettingsForm';



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


    ],



}