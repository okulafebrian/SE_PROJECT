<x-layout title="My Recipe">

    <div class="container my-5">
        <section class="mb-5">
            <h3 class="fw-bold mb-4">Saved Recipes</h3>
            @if ($exist)
                <div class="row">
                    @foreach ($savedRecipes as $savedRecipe)
                        <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 16rem; height:22rem"
                            href="{{ route('recipes.show', $savedRecipe->recipe->id) }}">

                            <div class="card-body text-start">
                                <img src="{{ asset('storage/recipe-images/' . $savedRecipe->recipe->picture) }}"
                                    alt="{{ $savedRecipe->recipe->title }}" class="card-img-top mb-3">

                                <h5 class="card-title fw-bold mb-1">{{ $savedRecipe->recipe->title }}</h5>
                                <p class="caption">By {{ $savedRecipe->recipe->author }}</p>
                                <div class="category mb-3">
                                    @if ($savedRecipe->recipe->cat_1 == '1')
                                        <span class="badge bg-primary">Simple</span>
                                    @endif

                                    @if ($savedRecipe->recipe->cat_2 == '1')
                                        <span class="badge bg-warning">Budget</span>
                                    @endif

                                    @if ($savedRecipe->recipe->cat_3 == '1')
                                        <span class="badge bg-success">Healthy</span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="card shadow border-0">
                    <div class="card-body text-center py-5">
                        <h4>No saved recipes yet!</h4>
                    </div>
                </div>
            @endif
        </section>

        <section class="my-4">
            <div class="d-flex justify-content-start mb-4">
                <h3 class="m-0 me-3 fw-bold">My Recipes</h3>
                <a role="button" class="btn btn-light shadow rounded-circle" href="{{ route('recipes.create') }}">
                    <i class="bi bi-plus"></i>
                </a>
            </div>
            <div class="row">
                @foreach ($recipes as $recipe)
                    <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 16rem; height:22rem"
                        href="{{ route('recipes.show', $recipe->id) }}">

                        <div class="card-body text-start">
                            <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}"
                                alt="{{ $recipe->title }}" class="card-img-top mb-3">
                            <h5 class="card-title fw-bold mb-1">{{ $recipe->title }}</h5>
                            <p class="caption">By {{ $recipe->author }}</p>

                            <div class="category mb-3">
                                @if ($recipe->cat_1 == '1')
                                    <span class="badge bg-primary">Simple</span>
                                @endif

                                @if ($recipe->cat_2 == '1')
                                    <span class="badge bg-warning">Budget</span>
                                @endif

                                @if ($recipe->cat_3 == '1')
                                    <span class="badge bg-success">Healthy</span>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
