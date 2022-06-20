<x-layout title="Recipe">

    <div class="container">
        <h2 class="text-center my-5">Explore Indonesian Cuisine</h2>

        <div class="bar">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        @foreach ($recipes as $recipe)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/storage/images/foto/' . $recipe->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"> {{ $recipe->description }} </p>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>
