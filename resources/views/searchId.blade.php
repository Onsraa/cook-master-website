<!-- searchId.blade.php -->
<link href="{{ asset('css/recipe.css?v=1a040064279b') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipe Details') }}
        </h2>
    </x-slot>
    <div class="d-flex mb-2 mt-4">
        <div class="position-relative d-flex align-items-center justify-content-center mh-50"
             style="max-height: 555px; width: 100%;">
            <img class="recipe-detail-image" alt="" src=""
                 style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>


        <div class="position-sticky text-left" style="width:25%;height:fit-content; top:50px; right:0%;">
            <p class="text-uppercase text-upper-case"></p>
            <p class="recipe-cuisine-type"></p>
            <p class="text-capitalize diff-level"></p>
            <div onclick="redirectToLessons()" class="d-flex justify-content-center align-items-center"
                 style="background: rgba(193, 196, 201); border-radius: 5px; width: 90%; max-width: 450px; height: auto; cursor: pointer;">
                <p id="Enroll-course" class="m-0 p-2 text-uppercase" style="font-size: 123%;">Enroll</p>
            </div>
        </div>
    </div>
    <script>
        function redirectToLessons() {
            window.location.href = "/lessons";
        }
    </script>
    <div>
        <div id="description" class="w-75 d-flex flex-column m-0" style="max-width:60%; padding-left:5%;">
            <p class="text-uppercase text-upper-case" style="font-size:169%;"></p>
            <p class="description" style="margin-bottom: 1em;"></p>
            <p class="calories"><strong>Calories: </strong></p>
            <p class="prepare-time"><strong>Preparation Time: </strong></p>
            <p class="ingredients" style="margin-bottom: 1em;"></p>


            <p class="cook-time"><strong>Cooking Time: </strong></p>
            <p class="instructions"></p>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var recipeId = window.location.pathname.split('/').pop();
            console.log(recipeId);
            var recipeApiUrl = `/api/searchId/${recipeId}`;

            fetch(recipeApiUrl)
                .then(response => response.json())
                .then(recipes => {
                    if (recipes.length > 0) {
                        var recipe = recipes[0];
                        //Recipe Tittle
                        var pElements = document.querySelectorAll('.text-upper-case');
                        pElements.forEach(function (element) {
                            element.textContent = recipe.name;
                        });

                        //Recipe image
                        var imgElement = document.querySelector('.recipe-detail-image');
                        imgElement.setAttribute('src', 'http://mecookyoucook.localhost/' + recipe.image_url);

                        //Recipe cuisine type
                        var cuisineType = document.querySelector('.recipe-cuisine-type');
                        cuisineType.textContent = 'CUISINE TYPE: ' + recipe.cuisine_type;

                        //Difficult Level
                        var diffLevel = document.querySelector('.diff-level');
                        diffLevel.textContent = 'DIFFICULTY: ' + recipe.difficulty_level;

                        //Instruction
                        var instructions = document.querySelector('.instructions');
                        instructions.textContent = recipe.instructions;
                        ;

                        //Description
                        var description = document.querySelector('.description');
                        description.textContent = recipe.description;

                        //Ingredients
                        var ingredients = document.querySelector('.ingredients');
                        ingredients.innerHTML = recipe.ingredients.replace(/,/g, '<br>');

                        //calories
                        var calories = document.querySelector('p.calories');
                        var additionalCaloriesText = document.createTextNode(recipe.calories + "kcal");
                        calories.appendChild(additionalCaloriesText);

                        //Prepare Time
                        var prepareTime = document.querySelector('p.prepare-time');
                        var additionalPrepareText = document.createTextNode(recipe.preparation_time);
                        prepareTime.appendChild(additionalPrepareText);

                        //Cooking Time
                        var cookTime = document.querySelector('p.cook-time');
                        var additionalCookText = document.createTextNode(recipe.cooking_time);
                        cookTime.appendChild(additionalCookText);

                        ////OLD
                        var recipeDetailsDiv = document.getElementById('recipeDetails');

                        // Create and populate recipe details elements
                        var recipeName = document.createElement('h2');
                        recipeName.textContent = recipe.name;
                    }
                })
                .catch(error => {
                    console.error('Error fetching recipe:', error);
                });
        });

    </script>
</x-app-layout>
