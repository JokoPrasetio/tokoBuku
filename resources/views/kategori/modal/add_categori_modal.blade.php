<div class="modal fade" id="add_kategori" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Kategori</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <form action="/category" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" id="name" class="form-control @error('name'){{ session('validatorError') === 'add' ? 'is-invalid' : ''}}                      @enderror" placeholder="input name category" required>
                        <label for="floatingInput">Category Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="description" class="form-control @error('description'){{ session('validatorError') === 'add' ? 'is-invalid' : ''}}                      @enderror" placeholder="input description category" id="description">
                        <label for="floatingInput">Description</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>