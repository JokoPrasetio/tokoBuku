<div class="modal fade" id="delete_category_modal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete Category</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
        </div>

    <form action="/category" method="post" id="delete_category_form">
    @method('delete')
    @csrf
    <input type="hidden" id="delete_category_uid">
    <div class="modal-body">
        are you suer you want to delete <strong class="text-indigo" id="delete_category_confirm_item"></strong>
    </div>
    <div class="modal-footer">
        <button class="btn btn-outline-secondary" type="submit">Delete</button>
        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
    </div>
    </form>
</div>
</div>
</div>