/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

const app = new Vue({
    el: '#app',
    data() {
        return {
            sending: false,
            sent: false,
            show_error: false,
            pet_name: '',
            type: '',
            breed: '',
            is_mix: 0,
            custom_breed: '',
            gender: '',
            dog_breeds: [
                'Australian Cattle Dog',
                'Australian Shepherd',
                'Bearded Collie',
                'Belgian Laekenois',
                'Belgian Malinois',
                'Belgian Sheepdog',
                'Belgian Tervuren',
                'Bergamasco',
                'Berger Picard',
                'Border Collie',
                'Bouvier des Flandres',
                'Canaan Dog',
                'Cardigan Welsh Corgi',
                'Entlebucher Mountain Dog',
                'Finnish Lapphund',
                'German Shepherd Dog',
                'Icelandic Sheepdog',
                'Miniature American Shepherd',
                'Norwegian Buhund',
                'Old English Sheepdog',
                'Pembroke Welsh Corgi',
                'Polish Lowland Sheepdog',
                'Pyrenean Shepherd',
                'Shetland Sheepdog',
                'Spanish Water Dog',
                'Swedish Vallhund'
            ],
            cat_breeds: [
                'Abyssinian',
                'American Bobtail',
                'American Curl',
                'American Shorthair',
                'American Wirehair',
                'Balinese',
                'Bengal',
                'Birman',
                'Bombay',
                'British Shorthair',
                'Burmese',
                'Chartreux',
                'Chausie',
                'Cornish Rex Abyssinian',
                'American Bobtail',
                'American Curl',
                'American Shorthair',
                'American Wirehair',
                'Balinese',
                'Bengal',
                'Birman',
                'Bombay',
                'British Shorthair',
                'Burmese',
                'Chartreux',
                'Chausie',
                'Cornish Rex'
            ]
        }
    },
    computed: {
        breed_list: function () {

            if (this.type == 'dog') {
                return this.dog_breeds;
            }
            
            if (this.type == 'cat') {
                return this.cat_breeds;
            }

            return [];
        },
        is_disabled: function () {

            if (this.pet_name == '') {

                return true;
            }

            if (this.type == '') {

                return true;
            }

            if (this.breed == '') {

                return true;
            }

            if (this.is_mix && this.custom_breed == '') {

                return true;
            }

            if (this.gender == '') {

                return true;
            }

            return false;
        }
    },
    methods: {
        submit: function () {

            this.sending = true;

            let params = {
                name: this.pet_name,
                type: this.type,
                breed: this.is_mix ? this.custom_breed : this.breed,
                gender: this.gender
            }

            axios.post('/api/register', params)
            .then((response) => {
                // handle success
                this.sent = true;
            })
            .catch((error) => {
                // handle error
                this.show_error = true;

            })
            .then(() => {
                // always executed
                this.sending = false;
            });
        }
    }
});
