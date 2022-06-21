<x-layout title="My Recipes">

    <div class="container my-5">
        <h5>Saved Recipes</h5>
        <hr>
        <h5>My Recipes</h5>
        <hr>

        <div class="row">
            @foreach ($recipes as $recipe)
                <a role="button" class="btn btn-light shadow d-flex align-items-center justify-content-center m-2"
                    style="width: 16rem; height:16rem" href="{{ route('recipes.create') }}">
                    <div class="button-body">
                        <h5 class="card-title text-nowrap text-truncate fw-bolder fs-4" style="margin-block-end: 0;">Food
                            Name
                            </h2>
                            <p class="card-text fs-6 text-muted text-nowrap text-truncate fw-light">Username</p>
                            <div class="d-flex flex-row">
                                <div class="rounded-3 bg-success text-white px-2 py-1 fw-normal"
                                    style="font-size: 9px; min-width: 15px; width: fit-content; margin-right: 3px;">
                                    Healthy
                                </div>

                                <div class="rounded-3 bg-warning text-white px-2 py-1 fw-normal"
                                    style="font-size: 9px; min-width: 15px; width: fit-content; margin-right: 3px;">
                                    Easy
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <i class="bi bi-star-fill px-0.5" style="color: #F7D716"></i>
                                <i class="bi bi-star-fill px-0.5" style="color: #F7D716"></i>
                                <i class="bi bi-star-fill px-0.5" style="color: #F7D716"></i>
                                <i class="bi bi-star-fill px-0.5" style="color: #b0b0b0"></i>
                                <i class="bi bi-star-fill px-0.5" style="color: #b0b0b0"></i>
                                <p class="fw-bold px-2" style="color: #F8B400">3.0</p>
                            </div>
                    </div>
                </a>
            @endforeach

            <a role="button" class="btn btn-light shadow d-flex align-items-center justify-content-center"
                style="width: 16rem; height:16rem" href="{{ route('recipes.create') }}">
                <div class="button-body">
                    <i class="bi bi-plus-square-dotted fs-1"></i>
                    <h5>Create new recipe</h5>
                </div>
            </a>
        </div>






    </div>

</x-layout>
