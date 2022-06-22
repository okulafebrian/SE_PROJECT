<div class="modal fade" id="subscription" tabindex="-1" aria-labelledby="subscriptionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="subscriptionLabel">Meal2Go Subscription</h5>
            </div>
            <form method="POST" action="{{ route('subscriptions.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-start">
                    <div class="row">
                        <div class="col">
                            <p class="fw-bold m-0"><i class="bi bi-calendar-range me-2"></i>Plan Duration</p>
                            <p>{{ $start }} - {{ $end }}</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold m-0"><i class="bi bi-cash-stack me-2"></i>Total Payment</p>
                            <p>Rp 25.000</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mx-1">
                        <p class="fw-bold px-0">Enter Payment Information</p>
                        <input type="text" class="form-control mb-3" placeholder="Credit Card Number">
                        <input type="text" class="form-control mb-3" placeholder="Card Holder Name">
                    </div>
                    <p class="mx-1 mb-1">Expiration Date</p>
                    <div class="row d-flex justify-content-between">
                        <div class="col-6 d-flex">
                            <input type="text" class="form-control ms-1 me-2" placeholder="MM">
                            <input type="text" class="form-control" placeholder="YYYY">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="CVV">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
