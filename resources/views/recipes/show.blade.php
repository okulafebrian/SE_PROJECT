<x-layout title="Recipe Details">

    <div class="container my-5">
        <section class="row">
            <div class="col-5">
                <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}" alt="{{ $recipe->title }}"
                    class="rounded" width="100%">
            </div>
            <div class="col-6 ps-4">
                <h2 class="card-title fw-bold m-0">{{ $recipe->title }}</h2>
                <p class="card-text">By {{ $recipe->author }}</p>

                <div class="row mb-3">
                    <p><i class="bi bi-stopwatch me-2"></i><b>Estimated time</b> : {{ $recipe->estimated_time }}
                        minute(s)
                    </p>
                    <p><i class="bi bi-bar-chart-line me-2"></i> <b>Difficulty</b> : {{ $recipe->difficulty }}</p>
                    <p><i class="bi bi-cash-coin me-2"></i> <b>Estimated Cost</b> : Rp. {{ $recipe->estimated_cost }}~
                    </p>
                    <p><i class="bi bi-egg-fried me-2"></i> <b>Food</b> : Healthy</p>
                </div>

                @if (Auth::user()->id === $recipe->user_id)
                    <div class="actions">
                        <a class="btn btn-primary" href="{{ route('recipes.edit', $recipe->id) }}"
                            role="button">Edit</a>
                        <a class="btn btn-outline-primary" href="#" role="button">Delete</a>
                    </div>
                @endif
            </div>
            <div class="col-1">
                <a class="btn btn-light shadow rounded-circle" href="{{ url()->previous() }}" role="button">
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
        </section>

        <section class="my-5">
            <h3 class=fw-bold>Description</h3>
            <hr>
            <p>{{ $recipe->description }}</p>
        </section>

        <section class="my-5">
            <h3 class=fw-bold>Ingredients</h3>
            <hr>
            <p>{{ $recipe->ingredients }}</p>
        </section>

        <section class="my-5">
            <h3 class=fw-bold>Directions</h3>
            <hr>
            <p>{{ $recipe->directions }}</p>
        </section>
    </div>

</x-layout>
