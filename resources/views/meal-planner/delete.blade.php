<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Meal Plan Deletion</h5>
            </div>
            <div class="modal-body text-start">
                <p>Are you sure want to delete <b>{{ $planner->title }}</b> recipe?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('meal-planner.destroy', $planner->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>

        </div>
    </div>
</div>
