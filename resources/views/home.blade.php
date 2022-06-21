<x-layout title="Home">
    <header class="header-home">
        <div class="overlay-background d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1 class="text-white fw-bold pb-4">Easily get healthy and simple recipes with us!</h1>
                <a class="btn btn-primary" href="#" role="button">Get started</a>
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
                    <h1 class="fw-bold pb-4">A Personalized Recipe Recommendations Platform</h1>
                    <p>We let the people do the ‘talking’ to make the best recipes sources out there. We provided
                        various recipe with the highest quality and affordable for everyone.</p>
                </div>
            </div>

            <div class="browse row">
                <h1 class="fw-bold">Find Your Favourite Recipe</h1>
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

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
