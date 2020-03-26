import NotFound from './components/NotFound'
import UserSettingsForm from './components/UserSettingsForm'
import RenderFunctionCompo from './components/RenderFunctionCompo'
import DataProvider from './components/DataProvider'
import RenderlessComponents from './components/RenderlessComponents'
import CompoundComponents from './components/CompoundComponents'
import SearchSelectComponent from './components/SearchSelectComponent'
import BlogSection from './components/BlogSection'

export default {
    mode: 'history',

    linkActiveClass: 'link-active',

    routes: [

        {
            path: '*',
            component: NotFound

        },

        {
            path: '/',
            component: UserSettingsForm

        },
        {
            path: '/render-function',
            component: RenderFunctionCompo

        },
        {
            path: '/data-provider',
            component: DataProvider

        },
        {
            path: '/renderless-components',
            component: RenderlessComponents

        },
        {
            path: '/compound-components',
            component: CompoundComponents

        },

        {
            path: '/search-select-component',
            component: SearchSelectComponent

        },


        {
            path: '/blog-section',
            component: BlogSection
        },


    ],



}