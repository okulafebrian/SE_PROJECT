<x-layout title="My Recipes">

    <div class="container my-5">
        <h4>Saved Recipes</h4>
        <hr>
        <h4>My Recipes</h4>
        <hr>

        <div class="row">
            @foreach ($recipes as $recipe)
                <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 18rem; height:24rem"
                    href="{{ route('recipes.show', $recipe->id) }}">
                    <div class="card-body text-start">
                        <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}" alt="{{ $recipe->title }}"
                            class="card-img-top mb-3">
                        <h5 class="card-title fw-bold m-0">{{ $recipe->title }}</h5>
                        <p class="card-text">By {{ $recipe->author }}</p>

                        <div class="category">
                            <span class="badge text-bg-success">Healthy</span>
                            <span class="badge text-bg-primary">Easy</span>
                        </div>


                    </div>
                </a>
            @endforeach

            <a role="button" class="btn btn-light shadow d-flex align-items-center justify-content-center"
                style="width: 16rem; height:16rem" href="{{ route('recipes.create') }}">
                <div class="button-body">
                    <i class="bi bi-plus-square-dotted fs-1"></i>
                    <h5>Create new recipe</h5>
                </div>
            </a>
        </div>






    </div>

</x-layout>
