<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DocuPet Pet Owner Registration</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header class="bg-white border-bottom border-2 p-3 text-center">
                <h1>DocuPet - A safe and happy home for every pet</h1>
                <div class="links mt-4">
                    <a href="#" class="btn btn-link text-decoration-none text-secondary">Help</a>
                    <a href="#" class="btn btn-link text-decoration-none">Save and Finsih Later</a>
                </div>
            </header>
            
            <div class="container-md my-5">
                
                <div class="paws">

                    <div class="alert alert-danger fade show" v-if="show_error">
                        We were unable to register your pet. Please try again.
                    </div>

                    <div v-if="sending">

                        <h2 class="text-dark">Registering @{{ pet_name}}...</h2>

                    </div>
                    <div v-else-if="sent">

                        <h2 class="text-dark">@{{ pet_name}} has been registered!</h2>

                    </div>
                    <form action="/" @submit.prevent="submit" v-else>

                        <h2 class="text-dark">Tell us about your dog</h2>

                        <div class="mb-3">
                            <label for="pet-name" class="form-label">What is your dog's name?</label>
                            <input type="text" class="form-control" id="pet-name" v-model="pet_name">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Pet type?</label>
                            <select class="form-select" id="type" v-model="type">
                                <option value="" disabled selected>Select a pet type</option>
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="breed" class="form-label">What breed are they?</label>
                            <select class="form-select" v-model="breed" :disabled="type == ''">
                                <option value="" disabled selected>Select a breed</option>
                                <option value="custom">Can't find it?</option>
                                <option v-for="breed in breed_list">@{{ breed }}</option>
                            </select>
                        </div>

                        <div class="mb-3 p-3" v-if="breed == 'custom'">

                            <p>Choose One</p>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="mix-true" value="0" v-model="is_mix">
                                <label class="form-check-label" for="mix-true">
                                    I don't know
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="mix-false" value="1" v-model="is_mix">
                                <label class="form-check-label" for="mix-false">
                                    It's a mix
                                </label>
                            </div>

                            <input type="text" class="form-control" placeholder="Describe the breeds" v-model="custom_breed" v-if="is_mix">
                        </div>

                        <div class="mb-3">

                            <p>What gender are they?</p>

                            <div class="btn-group">
                                <input type="radio" class="btn-check" id="gender-male" v-model="gender" value="Male">
                                <label class="btn btn-outline-primary" for="gender-male">Male</label>

                                <input type="radio" class="btn-check" id="gender-female" v-model="gender" value="Female">
                                <label class="btn btn-outline-primary" for="gender-female">Female</label>
                            </div>
                        </div>

                        <input class="btn btn-primary text-white d-block me-auto ms-auto px-5" type="submit" value="Continue" :disabled="is_disabled">
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
