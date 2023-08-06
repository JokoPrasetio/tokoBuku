function deleteProductBook(uid, name_produk){
 deleteProductBookConfirmItem.html(`"${name_produk}"`);
 deleteProductBookForm.attr("action", `/product-book/${uid}`);
 deleteProductBookModal.modal("show");   
}