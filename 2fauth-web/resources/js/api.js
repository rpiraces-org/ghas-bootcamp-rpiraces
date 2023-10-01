import Vue      from 'vue'
import axios    from 'axios'
import VueAxios from 'vue-axios'
import router   from './routes.js'

Vue.use(VueAxios, axios)

Vue.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
Vue.axios.defaults.headers.common['Content-Type'] = 'application/json'

if (window.appConfig.subdirectory) {
    Vue.axios.defaults.baseURL = window.appConfig.subdirectory;
}

Vue.axios.interceptors.response.use(response => response, error => {
    
    // Whether or not the promise must be returned, if unauthenticated is received
    // we update the auth state of the front-end
    if ( error.response.status === 401 ) {
        Vue.$storage.remove('authenticated')
    }

    // Return the error when we need to handle it at component level
    if( error.config.hasOwnProperty('returnError') && error.config.returnError === true ) {
        return Promise.reject(error);
    }

    // Return the error for form validation at component level
    if( error.response.status === 422 ) {
        return Promise.reject(error);
    }

    // Push to the login view and force the page to refresh to get a fresh CSRF token
    if ( error.response.status === 401 ) {
        router.push({ name: 'login', params: { forceRefresh: true } })
        return new Promise(() => {})
    }

    if ( error.response.status === 407 ) {
        router.push({ name: 'genericError', params: { err: error.response, closable: false } })
        return new Promise(() => {})
    }

    // we push to a specific or generic error view
    let routeName = 'genericError'

    // api calls are stateless so when user inactivity is detected
    // by the backend middleware it cannot logout the user directly
    // so it returns a 418 response.
    // We catch the 418 response and push the user to the autolock view
    if ( error.response.status === 418 ) routeName = 'autolock'
    
    if ( error.response.status === 404 ) routeName = '404'

    router.push({ name: routeName, params: { err: error.response } })
    return new Promise(() => {})

})