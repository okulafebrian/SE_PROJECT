<x-layout title="Home">
    <header class="header-home">
        <div class="overlay-background d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="text-white fw-bold pb-4">Easily get healthy and simple recipes with us!</h1>
                @guest
                    <a class="btn btn-primary" href="{{ route('register') }}" role="button">Get started</a>
                @endguest
            </div>
        </div>
    </header>

    <main class="main-home">
        <div class="container">

            <div class="description row p-5 d-flex justify-content-between align-items-center">
                <div class="col-5 description-image">
                    <img src="/images/Recipe.jpg" class="rounded img-fluid shadow" alt="Recipe">
                </div>
                <div class="col-6 description-content">
                    <h1 class="fw-bold pb-4">A Personalized Recipe recipeations Platform</h1>
                    <p>We let the people do the ‘talking’ to make the best recipes sources out there. We provided
                        various recipe with the highest quality and affordable for everyone.</p>
                </div>
            </div>

            <div class="my-5">
                <h1 class="fw-bold text-center">Find Your Favourite Recipe</h1>
                <div class="row">
                    <div class="container my-5">
                        <div class="row mx-auto my-auto justify-content-center">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <a role="button" class="btn btn-light shadow m-2 p-0"
                                            style="width: 16rem; height:22rem" href="#">

                                            <div class="card-body text-start">
                                                <img src="{{ asset('storage/recipe-images/' . $recipeFirst->picture) }}"
                                                    alt="{{ $recipeFirst->title }}" class="card-img-top mb-3">
                                                <h5 class="card-title fw-bold mb-1">{{ $recipeFirst->title }}</h5>
                                                <p class="caption">By {{ $recipeFirst->author }}</p>

                                                <div class="category mb-3">
                                                    @if ($recipeFirst->cat_1 == '1')
                                                        <span class="badge bg-primary">Simple</span>
                                                    @endif

                                                    @if ($recipeFirst->cat_2 == '1')
                                                        <span class="badge bg-warning">Budget</span>
                                                    @endif

                                                    @if ($recipeFirst->cat_3 == '1')
                                                        <span class="badge bg-success">Healthy</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    @foreach ($recipes as $recipe)
                                        <div class="carousel-item">
                                            <a role="button" class="btn btn-light shadow m-2 p-0"
                                                style="width: 16rem; height:22rem"
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
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev w-auto my-auto" href="#recipeCarousel" role="button"
                                    data-bs-slide="prev" style="height: fit-content">
                                    <div class="bg-primary p-3 rounded-3">
                                        <i class="bi bi-caret-left-fill text-light"></i>
                                    </div>
                                </a>
                                <a class="carousel-control-next w-auto my-auto" href="#recipeCarousel" role="button"
                                    data-bs-slide="next" style="height: fit-content">
                                    <div class="bg-primary p-3 rounded-3">
                                        <i class="bi bi-caret-right-fill text-light"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5rounded-3 p-4" style="background-color:#ebd6cc;">
            <br>
            <div class="row mx-2 d-flex align-items-center justify-content-between">
                <div class="col-5 header-image">
                    <img src="/images/mealPlanning.jpg" class="rounded img-fluid shadow" alt="Recipe">
                </div>
                <div class="col-6 header-description">
                    <h1 class="fw-bold">Try out our meal planner!</h1>
                    <p>We make an attractive interface for you to organize your meal schedule easily.</p>
                    <a class="btn btn-primary" href="{{ route('register') }}" role="button">Try it now</a>
                </div>
            </div>
            <br>
        </div>
        <div class="container my-5 py-5">
            <div class="row mx-2 d-flex align-items-center justify-content-center mx-5">
                <h1 class="text-center fw-bold mb-4">Subscription</h1>
                <div class="card h-100 text-center w-50 pt-3 pb-4 border-0" style="background-color:#ebd6cc;">
                    <h3 class="fw-bold">Member</h3>
                    <div class="card-body text-center mb-4">
                        <h3 class="card-title fw-bold mb-4">Rp. 25.000 per month</h3>
                        <div class="h-50 d-flex flex-column align-items-center justify-content-center">
                            <p class="card-text">Get access to all recipes</p>
                            <p class="card-text">Share your own recipes</p>
                            <p class="card-text">Bookmark recipes</p>
                            <p class="card-text">Meal planner</p>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <a class="btn btn-primary" href="{{ route('subscriptions.index') }}" role="button">Subscribe
                            now</a>
                    </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </main>
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
</x-layout>
