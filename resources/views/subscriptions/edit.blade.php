<div class="modal fade" id="unsubscribe" tabindex="-1" aria-labelledby="unsubscribeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="unsubscribeLabel">Cancel Meal2Go Subscription</h5>
            </div>
            <form method="POST" action="{{ route('subscriptions.update', $currentSubscription->id) }}">
                @method('UPDATE')
                @csrf
                <div class="modal-body text-start">
                    <p class="fw-bold">Are you sure want to cancel?</p>
                    <p>After cancelling, you still can access all features in Meal2Go until
                        {{ date('d F Y', strtotime($currentSubscription->end_date)) }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Unsubscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
