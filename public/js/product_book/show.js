function ShowDetailProduct(uid, obj){
    obj = JSON.parse(decodeURIComponent(obj))
    showProductBookModal.modal("show");
    showProductBookForm.attr("action", `/product-book/${uid}`);
    $.each(obj, (key,value) => {
        console.log(key,value);
        $(key).val(value);
    });
    
    showProductBookModal.on("show.bs.modal");
}