<x-layout title="Recipe Details">

    <div class="container my-5">
        <section class="row">
            <div class="col-5">
                <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}" alt="{{ $recipe->title }}"
                    class="rounded" width="100%">
            </div>
            <div class="col ps-4">
                <div class="row mb-2">
                    <div class="col d-flex justify-content-between">
                        <h2 class="card-title fw-bold m-0">{{ $recipe->title }}</h2>
                        <a class="btn btn-light shadow rounded-circle" href="{{ url('recipes') }}" role="button">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </div>

                <p class="card-text">By {{ $recipe->author }}</p>

                <div class="row my-4">
                    <p><i class="bi bi-stopwatch me-2"></i><b>Estimated time</b> : {{ $recipe->estimated_time }}
                        minute(s)
                    </p>
                    <p><i class="bi bi-bar-chart-line me-2"></i> <b>Difficulty</b> : {{ $recipe->difficulty }}</p>
                    <p><i class="bi bi-cash-coin me-2"></i> <b>Estimated Cost</b> : Rp {{ $recipe->estimated_cost }}~
                    </p>
                    <p class="m-0"><i class="bi bi-egg-fried me-2"></i> <b>Food</b> : Healthy</p>
                </div>

                @if (Auth::user()->id == $recipe->user_id)
                    <div class="row">
                        <p class="caption text-end">{{ $like }} Likes</p>
                        <div class="col d-flex justify-content-end">
                            <a class="btn btn-outline-primary me-3" href="{{ route('recipes.edit', $recipe->id) }}"
                                role="button">Edit</a>

                            @include('recipes.delete')
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#delete">
                                Delete
                            </button>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <p class="caption text-end">{{ $like }} Likes</p>
                        <div class="col d-flex justify-content-between">
                            @if ($saved)
                                <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                                <div class="actions">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="bi bi-bookmark-check-fill text-white me-2"></i>Saved</button>
                                </div>
                            @else
                                <form method="POST" action="{{ route('my-recipes.store') }}">
                                    @csrf
                                    <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                                    <div class="actions">
                                        <button id="save-btn" class="btn btn-outline-primary" type="submit"><i
                                                class="bi bi-bookmark me-2"></i>Save</button>
                                    </div>
                                </form>
                            @endif
                            @if ($liked)
                                <input type="text" value="{{ $recipe->id }}" hidden>
                                <button class="btn btn-primary" type="submit"><i
                                        class="bi bi-hand-thumbs-up-fill me-2 text-white"></i>Liked</button>
                            @else
                                <form method="POST" action="{{ route('ratings.store') }}">
                                    @csrf
                                    <input type="text" value="{{ $recipe->id }}" name="recipe_id" hidden>
                                    <button id="like-btn" class="btn btn-outline-primary" type="submit"><i
                                            class="bi bi-hand-thumbs-up me-2"></i>Like</button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endif
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
            <p>{!! $recipe->ingredients !!}</p>
        </section>

        @notMember
            <section class="my-5">
                <h3 class="fw-bold mb-3">Directions</h3>
                <div class="card">
                    <div class="card-body text-center py-5 shadow">
                        <h2><i class="bi bi-lock"></i></h2>
                        <h5>Content Locked</h5>
                        <p>You must subscribe first to access it</p>
                    </div>
                </div>
            </section>
        @endnotMember

        @member
            <section class="my-5">
                <h3 class=fw-bold>Directions</h3>
                <hr>
                <p>{!! $recipe->directions !!}</p>
            </section>
        @endmember
    </div>

</x-layout>
