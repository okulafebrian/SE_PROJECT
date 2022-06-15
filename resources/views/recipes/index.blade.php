<x-user title="Recipe">
    <h2>Browse Recipe</h2>
    <hr>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    @foreach ($recipes as $recipe)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"> {{ $recipe->description }} </p>
            </div>
        </div>
    @endforeach

</x-user>
