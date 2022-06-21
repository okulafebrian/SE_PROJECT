<x-layout title="Recipe">

    <div class="container">
        <a class="btn btn-primary rounded-circle" href="{{ route('recipes.index') }}" role="button">
            <i class="bi bi-arrow-left text-light"></i>
        </a>
        <hr>
        <section>
            <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}" alt="{{ $recipe->title }}">
            <div class="details">
                <h5 class="card-title fw-bold m-0">{{ $recipe->title }}</h5>
                <p class="card-text">By {{ $recipe->author }}</p>

                <div class="row mb-3">
                    <p><b>Estimated time</b> : 35 mins</p>
                    <p><b>Difficulty</b> : Easy</p>
                    <p><b>Estimated Cost</b> : Rp. 50.000~</p>
                    <p><b>Category</b> : Healthy</p>

                </div>
            </div>
        </section>
    </div>

</x-layout>
