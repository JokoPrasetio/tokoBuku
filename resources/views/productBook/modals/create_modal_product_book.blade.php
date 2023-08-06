<div class="modal fade" id="add_product_book" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Product</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <form action="/product-book" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <select name="category_uid" id="category_uid" class="form-control selectpicker" required
                            data-live-search="true">
                            <option disabled selected>Select Request Role</option>
                            @foreach ($category as $item)
                                <option value="{{ $item['uid'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="name_produk" class="form-control" placeholder="input name book"
                            required>
                        <label for="floatingInput">Name Book</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        <label for="floatingInput">Image</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="amount" id="amount" class="form-control">
                        <label for="floatingInput">Amount Product</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="title" id="title" class="form-control">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="price" id="price" class="form-control">
                        <label for="floatingInput">Price Product</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                        <label for="floatingInput">Description Product</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="address" id="address" class="form-control">
                        <label for="floatingInput">Address Product</label>
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
