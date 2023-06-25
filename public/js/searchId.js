// searchId.js

window.addEventListener('DOMContentLoaded', function() {
    var recipe = JSON.parse(document.getElementById('recipeData').textContent);

    // Set recipe details using JavaScript
    document.getElementById('recipeName').textContent = recipe.name;
    document.getElementById('cookingTime').textContent = 'Cooking Time: ' + recipe.cooking_time;
    document.getElementById('cuisineType').textContent = 'Cuisine Type: ' + recipe.cuisine_type;
    document.getElementById('difficultyLevel').textContent = 'Difficulty Level: ' + recipe.difficulty_level;
    document.getElementById('recipeImage').src = recipe.image_url;
    document.getElementById('recipeImage').alt = recipe.name;
});
