<x-layout title="Browse Recipe">
    @if (session('alert'))
        <div class="alert alert-danger px-5">
            {{ session('alert') }}
            <a class="btn btn-danger" href="{{ route('subscriptions.index') }}" role="button">Subscribe here</a>
        </div>
    @endif
    <div class="container my-5">
        <h2 class="text-center fw-bold">Explore Indonesian Cuisine</h2>

        <div class="my-4">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        @auth
            <section class="my-5">
                <h4>Recommended Recipes</h4>
                <div class="row">
                    @foreach ($recommends as $recommend)
                        <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 16rem; height:22rem"
                            href="{{ route('recipes.show', $recommend->id) }}">

                            <div class="card-body text-start">
                                <img src="{{ asset('storage/recipe-images/' . $recommend->picture) }}"
                                    alt="{{ $recommend->title }}" class="card-img-top mb-3">
                                <h5 class="card-title fw-bold mb-1">{{ $recommend->title }}</h5>
                                <p class="caption">By {{ $recommend->author }}</p>

                                <div class="category mb-3">
                                    @if ($recommend->cat_1 == '1')
                                        <span class="badge bg-primary">Simple</span>
                                    @endif

                                    @if ($recommend->cat_2 == '1')
                                        <span class="badge bg-warning">Budget</span>
                                    @endif

                                    @if ($recommend->cat_3 == '1')
                                        <span class="badge bg-success">Healthy</span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </section>
        @endauth

        <section class="my-5">
            <h4>All Recipes</h4>
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
