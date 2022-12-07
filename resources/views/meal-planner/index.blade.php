<x-layout title="Meal Planner">

    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <h2 class="fw-bold m-0">Meal Planner</h2>
            <a id="add-plan" class="btn btn-outline-primary" href="{{ route('meal-planner.create') }}" role="button">
                <i class="bi bi-plus-lg me-2"></i>Plan
            </a>
        </div>

        @if ($exist)
            <section class="my-4">
                <div class="row">
                    @foreach ($planners as $planner)
                        <a role="button" class="card btn btn-light shadow m-2 me-3 p-3" style="width: 34rem"
                            href="{{ route('meal-planner.show', $planner->id) }}">
                            <div class="card-body text-start">
                                <div class="details">
                                    <h3 class="fw-bold">{{ $planner->title }}</h3>
                                    <p class="m-0"><i class="bi bi-calendar-date me-3"></i>{{ $planner->date }}</p>
                                    <p class="m-0"><i class="bi bi-clock me-3"></i>{{ $planner->time }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @else
            <section class="my-4">
                <div class="row">
                    <div class="card shadow border-0">
                        <div class="card-body text-center py-5 my-5">
                            <h4 class="fw-bold">No Meal Planner Data</h4>
                            <p class="m-0">Let's plan the dishes you want to cook!</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </div>

</x-layout>
