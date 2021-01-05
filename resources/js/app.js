require('./bootstrap');

import Vue from 'vue';

var app = new Vue({
    el: "#root",
    data: {
        active: false,
        headerBox: true,
    },
    methods: {
        tendina(){
            if(this.active == false){
                this.active = true;
            }else{
                this.active = false;
            }

            if(this.headerBox == true){
                this.headerBox = false;
            }else{
                this.headerBox = true;
            }

        }
    }
});
