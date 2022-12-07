<x-layout title="Meal Plan">

    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <h2 class="m-0">New Meal Plan</h2>
            <a class="btn btn-light shadow rounded-circle" href="{{ url('meal-planner') }}" role="button">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <br>
        <div class="card shadow p-3">
            <div class="card-body">
                <form method="POST" action="{{ route('meal-planner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <h6>Select Recipes</h6>
                            </div>
                            <div class="row d-flex justify-content-start ">
                                @foreach ($recipes as $recipe)
                                    <div class="card p-0 m-2" style="width: 20rem">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-1">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $recipe->id }}" name="selections[]">
                                                </div>
                                                <div class="col-5">
                                                    <img src="{{ asset('storage/recipe-images/' . $recipe->picture) }}"
                                                        alt="{{ $recipe->title }}" width="100%">
                                                </div>
                                                <div class="col">
                                                    <p class="m-0 fw-bold">{{ $recipe->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="schedule" class="form-label">Schedule</label>
                                <input type="text" class="form-control" placeholder="Date" name="date">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Time" name="time">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout>
