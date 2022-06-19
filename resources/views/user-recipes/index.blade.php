<x-user title="My Recipes">

    <div class="d-flex justify-content-between">
        <div class="header">
            <h2>My Recipes</h2>
        </div>
        <div class="btn-create-recipe">
            <a class="btn btn-primary" href="{{ route('recipes.create') }}">
                Create Recipe
            </a>
        </div>
    </div>
    <hr>

</x-user>
