import Vue from 'vue'
import i18n from './langs/i18n'

Vue.mixin({

    data: function () {
        return {
            appVersion: window.appVersion
        }
    },

    methods: {

        async appLogout(evt) {
            if (this.$root.appConfig.proxyAuth) {
                if (this.$root.appConfig.proxyLogoutUrl) {
                    location.assign(this.$root.appConfig.proxyLogoutUrl)
                }
                else return false
            }
            else {
                await this.axios.get('/user/logout')
                this.clearStorage()
                this.$router.push({ name: 'login', params: { forceRefresh: true } })
            }
        },

        clearStorage() {
            this.$storage.remove('accounts')
            this.$storage.remove('groups')
            this.$storage.remove('lastRoute')
            this.$storage.remove('authenticated')
        },

        isUrl: function (url) {
            var strRegex = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/
            var re = new RegExp(strRegex)

            return re.test(url)
        },

        openInBrowser(uri) {
            const a = document.createElement('a')
            a.setAttribute('href', uri)
            a.dispatchEvent(new MouseEvent("click", { 'view': window, 'bubbles': true, 'cancelable': true }))
        },

        /**
         * 
         */
        inputId(fieldType, fieldName) {
            let prefix
            fieldName = fieldName.toString()

            switch (fieldType) {
                case 'text':
                    prefix = 'txt'
                    break
                case 'button':
                    prefix = 'btn'
                    break
                case 'email':
                    prefix = 'eml'
                    break
                case 'password':
                    prefix = 'pwd'
                    break
                case 'radio':
                    prefix = 'rdo'
                    break
                case 'label':
                    prefix = 'lbl'
                    break
                default:
                    prefix = 'txt'
                    break
            }

            return prefix + fieldName[0].toUpperCase() + fieldName.toLowerCase().slice(1);
            // button
            // checkbox
            // color
            // date 
            // datetime-local
            // file
            // hidden
            // image
            // month
            // number
            // radio
            // range
            // reset
            // search
            // submit
            // tel
            // text
            // time
            // url
            // week
        },

        setTheme(theme) {
            document.documentElement.dataset.theme = theme;
        },

        applyPreferences(preferences) {
            for (const preference in preferences) {
                try {
                    this.$root.userPreferences[preference] = preferences[preference]
                 }
                 catch (e) {
                    console.log(e)
                 }
            }

            if (this.$root.userPreferences.lang != 'browser') {
                i18n.locale = this.$root.userPreferences.lang
                document.documentElement.lang = this.$root.userPreferences.lang
            }

            this.setTheme(this.$root.userPreferences.theme)
        },

        displayPwd(pwd) {
            if (this.$root.userPreferences.formatPassword && pwd.length > 0) {
                const x = Math.ceil(this.$root.userPreferences.formatPasswordBy < 1 ? pwd.length * this.$root.userPreferences.formatPasswordBy : this.$root.userPreferences.formatPasswordBy)
                const chunks = pwd.match(new RegExp(`.{1,${x}}`, 'g'));
                if (chunks) {
                    pwd = chunks.join(' ')
                }
            }
            return this.$root.userPreferences.showOtpAsDot ? pwd.replace(/[0-9]/g, '●') : pwd
        },
        
        strip_tags (str) {
            return str.replace(/(<([^> ]+)>)/ig, "")
        }
    }

})