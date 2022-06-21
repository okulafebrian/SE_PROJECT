<x-layout title="Recipe">

    <div class="container my-5">
        <div class="title-header d-flex justify-content-between">
            <h4>Create Recipe</h4>
            <a class="btn btn-primary rounded-circle" href="{{ route('recipes.index') }}" role="button">
                <i class="bi bi-arrow-left text-light"></i>
            </a>
        </div>

        <br>

        <div class="card px-5 py-4">
            <div class="card-body">
                <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="difficulty" class="col-sm-2 col-form-label">Difficulty</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="difficulty" id="easy"
                                    value="easy">
                                <label class="form-check-label" for="easy">Easy</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="difficulty" id="moderate"
                                    value="moderate">
                                <label class="form-check-label" for="moderate">Moderate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="difficulty" id="difficult"
                                    value="difficult">
                                <label class="form-check-label" for="difficult">Difficult</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="simple" name="simple">
                                <label class="form-check-label" for="simpleOption">Simple</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="budget" name="budget">
                                <label class="form-check-label" for="budgetOption">Budget</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="healthy" name="healthy">
                                <label class="form-check-label" for="healthyOption">Healthy</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="estimatedTime" class="col-sm-2 col-form-label">Estimated Time</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="estimatedTime" name="estimatedTime">
                                <span class="input-group-text">MINS</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="estimatedCost" class="col-sm-2 col-form-label">Estimated Cost</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control" id="estimatedCost" name="estimatedCost">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="ingredients" class="col-sm-2 col-form-label">Ingredients</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="ingredients" name="ingredients" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="directions" class="col-sm-2 col-form-label">Directions</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="directions" name="directions" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="picture" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="picture">
                        </div>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
