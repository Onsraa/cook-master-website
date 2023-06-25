document.getElementById('searchButton').addEventListener('click', function (event) {
    event.preventDefault();
    var query = document.getElementById('recipeSearch').value;
    fetch(`/api/recipes/${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(recipes => {
            var resultsDiv = document.getElementById('search-results');
            resultsDiv.innerHTML = '';

            recipes.forEach(recipe => {
                var recipeDiv = document.createElement('div');
                recipeDiv.classList.add('recipe-card');

                var innerRecipeDiv = document.createElement('div');
                innerRecipeDiv.classList.add('inner-recipe-card');

                var titleContentDiv = document.createElement('div');
                titleContentDiv.classList.add('title-content');

                var timeDifficultyDiv = document.createElement('div');
                timeDifficultyDiv.classList.add('time-difficulty-content');

                var cookingTimeIcon = document.createElement('i');
                cookingTimeIcon.classList.add('bi', 'bi-clock-fill');

                var name = document.createElement('h2');
                name.textContent = recipe.name;
                name.classList.add('recipe-name')

                var link = document.createElement('a');
                link.href =  "/recipes/"+recipe.id;
                link.appendChild(name);

                var cookingTime = document.createElement('p');
                cookingTime.appendChild(cookingTimeIcon);
                cookingTime.classList.add('time');

                var timeValue = parseInt(recipe.cooking_time);
                var timeUnit = '';

                if (recipe.cooking_time.includes('hour')) {
                    timeUnit = 'h';
                } else if (recipe.cooking_time.includes('minute')) {
                    timeUnit = 'm';
                }

                cookingTime.appendChild(document.createTextNode(' ' + timeValue + timeUnit));

                var cuisineType = document.createElement('p');
                cuisineType.textContent = 'Cuisine type: ' + recipe.cuisine_type;

                var difficultyLevel = document.createElement('p');
                difficultyLevel.textContent = 'Difficulty: ' + recipe.difficulty_level;

                var img = document.createElement('img');
                img.src = recipe.image_url;
                img.alt = recipe.name;

                timeDifficultyDiv.appendChild(difficultyLevel);
                timeDifficultyDiv.appendChild(cookingTime);

                titleContentDiv.appendChild(link);
                titleContentDiv.appendChild(cuisineType);
                titleContentDiv.appendChild(timeDifficultyDiv);

                recipeDiv.appendChild(img);
                recipeDiv.appendChild(titleContentDiv);

                innerRecipeDiv.appendChild(recipeDiv);
                resultsDiv.appendChild(innerRecipeDiv);
            });
        });
});
