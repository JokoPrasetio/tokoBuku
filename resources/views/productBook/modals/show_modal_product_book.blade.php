<div class="modal fade" id="show_product_book_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Product</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" enctype="multipart/form-data" id="show_product_book_form">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" id="show_category_product_book" class="form-control" readonly>
                        <label for="floatingInput">Category Book</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="show_product_book_name" class="form-control" readonly>
                        <label for="floatingInput">Name Book</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" id="show_product_book_amount" class="form-control" readonly>
                        <label for="floatingInput">Amount Product</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="show_product_book_title" class="form-control" readonly>
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" id="show_product_book_price" class="form-control" readonly>
                        <label for="floatingInput">Price Product</label>
                    </div>
                    <label for="floatingInput">Deskripsi</label>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="show_product_book_deskripsi" rows="3" readonly></textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="show_product_book_address" class="form-control" readonly>
                        <label for="floatingInput">Address Product</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</div>
                </div>
            </form>
        </div>
    </div>
</div>
