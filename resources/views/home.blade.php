<x-layout title="Home">
    <header class="header-home">
        <div class="overlay-background d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="text-white pb-4">Easily get healthy and simple recipes with us!</h1>
                <a class="btn btn-primary" href="#" role="button">Get started</a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <div class="row my-5 p-5 d-flex justify-content-between align-items-center">
                <div class="col-5 description-image">
                    <img src="/images/Recipe.jpg" class="rounded img-fluid shadow" alt="Recipe">
                </div>
                <div class="col-6 description-content">
                    <h1 class="fw-bold mb-4">A Personalized Recipe Recommendations Platform</h1>
                    <p>We let the people do the ‘talking’ to make the best recipes sources out there. We provided
                        various recipe with the highest quality and affordable for everyone.</p>
                </div>
            </div>




        </div>
        <x-recipeSlider></x-recipeSlider>
        <div class="container mt-5 rounded-3 p-4" style="background-color:#ebd6cc;">
            <br>
            <div class="row mx-2 d-flex align-items-center justify-content-between">
                <div class="col-5 header-image">
                    <img src="/images/mealPlanning.jpg" class="rounded img-fluid shadow" alt="Recipe">
                </div>
                <div class="col-6 header-description">
                    <h1 class="fw-bold">Try out our meal planner!</h1>
                    <p>We make an attractive interface for you to organize your meal schedule easily.</p>
                    <button class="btn btn-primary">Try it now!</button>
                </div>
            </div>
            <br>
        </div>
        <div class="container mt-5 mb-3">
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
                        <button class="btn w-50 btn-primary">Subscribe now!</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
