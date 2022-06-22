<x-layout title="Edit Recipe">

    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <h2 class="m-0 fw-bold">Edit Recipe</h2>
            <a class="btn btn-light shadow rounded-circle" href="{{ url()->previous() }}" role="button">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <hr>
        <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
            @method('UPDATE')
            @csrf
            <section class="row">
                <div class="col-5">
                    <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}" alt="{{ $recipe->title }}"
                        class="rounded" width="100%">
                </div>
                <div class="col ms-4">
                    <div class="row mb-3">
                        <label for="title" class="col-sm-3 col-form-label fw-bold">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="{{ $recipe->title }}">
                        </div>
                    </div>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-3 pt-0 fw-bold">Difficulty</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="row mb-3">
                        <label for="estimatedTime" class="col-sm-3 col-form-label fw-bold">Estimated Time</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="estimatedTime" name="estimatedTime"
                                    placeholder="{{ $recipe->estimated_time }}">
                                <span class="input-group-text">Minute(s)</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="estimatedCost" class="col-sm-3 col-form-label fw-bold">Estimated Cost</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control" id="estimatedCost" name="estimatedCost"
                                    placeholder="{{ $recipe->estimated_cost }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="my-5">
                <h3 class=fw-bold>Description</h3>
                <textarea class="form-control" id="directions" name="directions" rows="6"
                    placeholder="{{ $recipe->description }}"></textarea>
            </section>

            <section class="my-5">
                <h3 class=fw-bold>Ingredients</h3>
                <textarea class="form-control" id="directions" name="directions" rows="6"
                    placeholder="{{ $recipe->ingredients }}"></textarea>
            </section>

            <section class="my-5">
                <h3 class=fw-bold>Directions</h3>
                <textarea class="form-control" id="directions" name="directions" rows="6"
                    placeholder="{{ $recipe->directions }}"></textarea>
            </section>
            @method('PUT')
            <div class="row">
                <button type="submit" class="btn btn-primary text-white">Save</button>
            </div>
        </form>

    </div>

</x-layout>
