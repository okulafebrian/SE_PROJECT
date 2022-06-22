<x-layout title="Subscription">
    <div class="container my-5">
        <h2 class="fw-bold mb-5">My Subscriptions</h2>
        <div class="row">
            <div class="col">
                <div class="card shadow p-4 me-5 text-center">

                    @if ($active)
                        <div class="card-body">
                            <h3 class="fw-bold">Subscribed</h3>
                            <div class="my-4">
                                <p class="m-0">Next billing date:</p>
                                <p>{{ date('d F Y', strtotime($currentSubscription->end_date)) }}</p>
                            </div>
                            @include('subscriptions.edit')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#unsubscribe">
                                Cancel
                            </button>
                        </div>
                    @else
                        <div class="card-body">
                            <h3 class="fw-bold">Membership</h3>
                            <h5>Rp 25.000 / month</h5>
                            <ul class="list-unstyled py-3">
                                <li><i class="bi bi-check-circle me-2"></i>Get access to all recipes</li>
                                <li><i class="bi bi-check-circle me-2"></i>Share your own recipes</li>
                                <li><i class="bi bi-check-circle me-2"></i>Bookmark recipes</li>
                                <li><i class="bi bi-check-circle me-2"></i>Meal planner</li>
                            </ul>

                            @include('subscriptions.create')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#subscription">
                                Subscribe Now
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-8">
                <div class="card shadow p-2">
                    @if ($exist == true)
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Payment Date</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $subscription)
                                        <tr>
                                            <td>{{ $subscription->id }}</td>
                                            <td>{{ date('d-m-Y', strtotime($subscription->payment_date)) }}</td>
                                            <td>Monthly Membership</td>
                                            <td>{{ date('d-m-Y', strtotime($subscription->end_date)) }}</td>
                                            <td>{{ $subscription->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    @else
                        <div class="card-body text-center py-4">
                            <h5 class="fw-bold">No Subscription History</h5>
                            <p class="m-0">You haven't subscribed yet</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
