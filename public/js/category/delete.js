function deleteCategory(uid, name){
    delteCategoryConfirmItem.html(`"${name}"`);
    deleteCategoryForm.attr("action", `/category/${uid}`);
    deleteCategoryModal.modal("show");
}