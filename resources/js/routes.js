import NotFound from './components/NotFound'
import UserSettingsForm from './components/UserSettingsForm'
import RenderFunctionCompo from './components/RenderFunctionCompo'
import DataProvider from './components/DataProvider'
import RenderlessComponents from './components/RenderlessComponents'
import CompoundComponents from './components/CompoundComponents'
import SearchSelectComponent from './components/SearchSelectComponent'

export default {
    mode: 'history',

    linkActiveClass: 'link-active',

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
        {
            path: '/home/data-provider',
            component: DataProvider

        },
        {
            path: '/home/renderless-components',
            component: RenderlessComponents

        },
        {
            path: '/home/compound-components',
            component: CompoundComponents

        },

        {
            path: '/home/search-select-component',
            component: SearchSelectComponent

        },
    ],



}