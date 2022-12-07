<x-layout title="Create Recipe">

    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <h2 class="m-0 fw-bold">Create Recipe</h2>
            <a class="btn btn-light shadow rounded-circle" href="{{ url('my-recipes') }}" role="button">
                <i class="bi bi-arrow-left"></i>
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
                                <input class="form-check-input" type="radio" name="difficulty" id="Easy"
                                    value="Easy">
                                <label class="form-check-label" for="Easy">Easy</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="difficulty" id="Moderate"
                                    value="Moderate">
                                <label class="form-check-label" for="Moderate">Moderate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="difficulty" id="Difficult"
                                    value="Difficult">
                                <label class="form-check-label" for="Difficult">Difficult</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="1" name="cat_1">
                                <label class="form-check-label" for="simpleOption">Simple</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="1" name="cat_2">
                                <label class="form-check-label" for="budgetOption">Budget</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="1" name="cat_3">
                                <label class="form-check-label" for="healthyOption">Healthy</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="estimatedTime" class="col-sm-2 col-form-label">Estimated Time</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="estimatedTime" name="estimatedTime">
                                <span class="input-group-text">Minute(s)</span>
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
                            <textarea class="form-control" id="ingredients" name="ingredients" rows="10"></textarea>
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
