<x-layout title="My Recipe">

    <div class="container my-5">
        <section class="mb-5">
            <h3 class="fw-bold mb-3">Saved Recipes</h3>
            <div class="card shadow border-0">

                @if ($exist)
                    @foreach ($savedRecipes as $savedRecipe)
                        <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 16rem; height:22rem"
                            href="{{ route('recipes.show', $savedRecipe->id) }}">
                            <div class="card-body text-start">
                                <img src="{{ asset('storage/recipe-images/' . $savedRecipe->picture) }}"
                                    alt="{{ $savedRecipe->recipe->title }}" class="card-img-top mb-3">
                                <h5 class="card-title fw-bold m-0">{{ $savedRecipe->recipe->title }}</h5>
                                <p class="card-text">By {{ $savedRecipe->author }}</p>

                                <div class="category">
                                    <span class="badge bg-success">Healthy</span>
                                    <span class="badge bg-primary">Easy</span>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="card-body text-center py-5">
                        <h4>No saved recipes yet!</h4>
                    </div>
                @endif
            </div>
        </section>

        <section>
            <h3 class="fw-bold">My Recipes</h3>
            <div class="row">
                @foreach ($recipes as $recipe)
                    <a role="button" class="btn btn-light shadow m-1 mb-3 p-0" style="width: 17rem; height:22rem"
                        href="{{ route('recipes.show', $recipe->id) }}">
                        <div class="card-body text-start">
                            <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}"
                                alt="{{ $recipe->title }}" class="card-img-top mb-3">
                            <h5 class="card-title fw-bold m-0">{{ $recipe->title }}</h5>
                            <p class="card-text">By {{ $recipe->author }}</p>
                            <div class="category">
                                <span class="badge bg-success">Healthy</span>
                                <span class="badge bg-primary">Easy</span>
                            </div>
                        </div>
                    </a>
                @endforeach

                <a role="button" class="btn btn-light shadow d-flex align-items-center justify-content-center m-1 p-0"
                    style="width: 17rem; height:22rem" href="{{ route('recipes.create') }}">
                    <div class="button-body">
                        <i class="bi bi-plus-square-dotted fs-1"></i>
                        <h5>Create new recipe</h5>
                    </div>
                </a>
            </div>
        </section>
    </div>
</x-layout>
