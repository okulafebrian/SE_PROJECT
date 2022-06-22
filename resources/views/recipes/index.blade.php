<x-layout title="Browse Recipe">
    <div class="container my-5">
        <h2 class="text-center fw-bold">Explore Indonesian Cuisine</h2>

        <div class="my-4">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        @foreach ($recipes as $recipe)
            <a role="button" class="btn btn-light shadow m-2 p-0" style="width: 16rem; height:22rem"
                href="{{ route('recipes.show', $recipe->id) }}">
                <form method="POST" action="{{ route('my-recipes.store') }}">
                    @csrf
                    <input name="id" type="hidden" value="{{ $recipe->id }}">
                    <div class="card-body text-start">
                        <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}"
                            alt="{{ $recipe->title }}" class="card-img-top mb-3">
                        <h5 class="card-title fw-bold m-0">{{ $recipe->title }}</h5>
                        <p class="card-text">By {{ $recipe->author }}</p>

                        <div class="category">
                            <span class="badge bg-success">Healthy</span>
                            <span class="badge bg-primary">Easy</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </a>
        @endforeach
    </div>

</x-layout>
