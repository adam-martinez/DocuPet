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
                    <form action="">

                        <h2 class="text-dark">Tell us about your dog</h2>

                        <div class="mb-3">
                            <label for="dog-name" class="form-label">What is your dog's name?</label>
                            <input type="text" class="form-control" id="dog-name">
                        </div>

                        <div class="mb-3">
                            <label for="dog-name" class="form-label">Pet type?</label>
                            <select class="form-select" id="type">
                                <option value="" disabled selected>Select a pet type</option>
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="breed" class="form-label">What breed are they?</label>
                            <select class="form-select" id="breed">
                                <option value="" disabled selected>Select a breed</option>
                                <option value="custom">Can't find it?</option>
                                <option value="breed">Breed</option>
                            </select>
                        </div>

                        <div class="mb-3 p-3">
                            <p>Choose One</p>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mix" id="mix-true" value="0">
                                <label class="form-check-label" for="mix-true">
                                    I don't know
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mix" id="mix-false" value="1">
                                <label class="form-check-label" for="mix-false">
                                    It's a mix
                                </label>
                            </div>

                            <input type="text" class="form-control" id="mix-breed">
                        </div>

                        <div class="mb-3">

                            <p>What gender are they?</p>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="gender" id="gender-male">
                                <label class="btn btn-outline-primary" for="gender-male">Male</label>

                                <input type="radio" class="btn-check" name="gender" id="gender-female">
                                <label class="btn btn-outline-primary" for="gender-female">Female</label>
                            </div>
                        </div>

                        <input class="btn btn-primary text-white d-block me-auto ms-auto px-5" type="submit" value="Continue" disabled>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
