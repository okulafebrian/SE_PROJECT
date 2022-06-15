<x-user title="Recipe">
    <h2>Create Recipe</h2>
    <hr>
    <div class="card">
        <div class="card-body p-4">
            <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="author" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="estimatedTime" class="col-sm-2 col-form-label">Estimated Time</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" id="estimatedTime">
                            <span class="input-group-text">MINS</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="difficulty" class="col-sm-2 col-form-label">Difficulty</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="easyOption"
                                value="easyOption">
                            <label class="form-check-label" for="easyOption">Easy</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="moderateOption"
                                value="moderateOption">
                            <label class="form-check-label" for="moderateOption">Moderate</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="difficultOption"
                                value="difficultOption">
                            <label class="form-check-label" for="difficultOption">Difficult</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="estimatedCost" class="col-sm-2 col-form-label">Estimated Cost</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" id="estimatedCost">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="simpleOption" value="simpleOption">
                            <label class="form-check-label" for="simpleOption">Simple</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="budgetOption" value="budgetOption">
                            <label class="form-check-label" for="budgetOption">Budget</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="healthyOption" value="healthyOption">
                            <label class="form-check-label" for="healthyOption">Healthy</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ingredients" class="col-sm-2 col-form-label">Ingredients</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="ingredients" rows="6"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="directions" class="col-sm-2 col-form-label">Directions</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="directions" rows="6"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="image">
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>

            </form>
        </div>
    </div>



</x-user>
