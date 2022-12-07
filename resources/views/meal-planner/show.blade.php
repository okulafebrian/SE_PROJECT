<x-layout title="Show Meal Plan">
    <div class="container my-5">
        <div class="col d-flex justify-content-between">
            <h2 class="card-title fw-bold m-0">{{ $planner->title }}</h2>

            <div class="d-flex">
                @include('meal-planner.delete')
                <button type="button" class="btn btn-light shadow rounded-circle" data-bs-toggle="modal"
                    data-bs-target="#delete">
                    <i class="bi bi-trash3"></i>
                </button>
                <a class="btn btn-light shadow rounded-circle ms-3" href="{{ url('meal-planner') }}" role="button">
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
        </div>
        <hr>
        @foreach ($recipes as $recipe)
            <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 16rem; height:22rem"
                href="{{ route('recipes.show', $recipe->id) }}">

                <div class="card-body text-start">
                    <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}" alt="{{ $recipe->title }}"
                        class="card-img-top mb-3">
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
</x-layout>
