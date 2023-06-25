<link href="{{ asset('css/recipes.css?v=1a040064279b') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <input type="text" id="recipeSearch" name="query" placeholder="Search recipes"
                   class="border border-gray-300 px-4 py-2 rounded-md">
            <button id="searchButton" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2">Search
            </button>

            <div id="recipeResults">
                <!-- Results will be added here -->
            </div>
        </div>
    </div>
    <div class="search-results" id="search-results">

    </div>
    <script src="{{ asset('js/recipes.js') }}"></script>

</x-app-layout>
