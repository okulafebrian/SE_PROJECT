<x-layout title="My Recipes">

    <div class="container my-5">
        <h5>Saved Recipes</h5>
        <hr>
        <h5>My Recipes</h5>
        <hr>
        <a role="button" class="btn btn-light shadow d-flex align-items-center justify-content-center"
            style="width: 16rem; height:16rem" href="{{ route('recipes.create') }}">
            <div class="button-body">
                <i class="bi bi-plus-square-dotted fs-1"></i>
                <h5>Create new recipe</h5>
            </div>
        </a>



    </div>

</x-layout>
