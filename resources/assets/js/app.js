
require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)


Vue.component('message', require('./components/message.vue'));
// ES6
const app = new Vue({
    el: '#app',
    data: {
    	
    		messageToSend: '',
    		chat: {
    			messages: []
    		}
    },
    methods: {
    	sendMessage(){
    		
    		if (this.messageToSend.length != 0) {
    			this.chat.messages.push(this.messageToSend)
    			this.messageToSend = ''
    		}

    		
    	}
    }
});
