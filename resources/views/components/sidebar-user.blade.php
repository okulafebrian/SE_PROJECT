<nav class="navbar d-flex flex-column flex-shrink-0 p-3 bg-light" id="sidebar">
    <a class="navbar-brand" href="#">
        <img src="/images/Meal2Go.png" alt="Meal2Go" width="40" class="d-inline-block align-text-bottom me-2">
        Meal<span style="color: #E87A00">2</span>Go
    </a>
    <hr>
    <ul class="nav flex-column mb-auto me-auto">
        <li class="mb-2">
            <a href="dashboard" class="nav-link active" aria-current="page">
                <i class="bi bi-grid-1x2-fill me-3"></i> Dashboard
            </a>
        </li>
        <li class="mb-2">
            <a href="{{ route('recipes.index') }}" class="nav-link link-dark">
                <i class="bi bi-search me-3"></i> Browse Recipes
            </a>
        </li>
        <li class="mb-2">
            <a href="{{ route('my-recipes.index') }}" class="nav-link link-dark">
                <i class="bi bi-journal-bookmark-fill me-3"></i> My Recipes
            </a>
        </li>
        <li class="mb-2">
            <a href="#" class="nav-link link-dark">
                <i class="bi bi-calendar-week-fill me-3"></i> Meal Planner
            </a>
        </li>
    </ul>
</nav>
