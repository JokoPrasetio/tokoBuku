listDataTableCategory.bootstrapTable({
    url: "/datatable/category",
    showColumns:true,
    showColumnsToggleAll: true,
    showRefresh:true,
    sortable:true,
    search:true,
    searchOnEnterKey:false,
    searchHiglight:true,
    pagination:true,
    pageSize:50,
    pageList: [50, 100, 200],
    cookie: true,
    cookieIdTable: "list_table_category",
    icons: {
        refresh: "fas fa-sync",
        columns: "fas fa-th-list",
    },
    columns: [
        {
            title: "Name",
            field: "name",
            sortable: true,
        },
        {
            title: "Image",
            field: "uid",
            sortable: true,
            formatter:(value, row) => {
                const imageUrl='/assets/img/category/' + row.image;
                return '<a href="'+ imageUrl +'" class="badge bg-info text-decoration-none" target="_blank">Image</a>'
            }
        },
        {
            title: "Action",
            field: "uid",
            sortable: true,
            formatter: (value, row) => {
                const fields = {

                };
                const obj = encodeURIComponent(JSON.stringify(fields));

                let buttons = "";
                
                buttons += `
                    <button class="badge bg-danger" style="border:none" onclick="deleteCategory('${row.uid}', '${row.name}')" data-bs-toggle ="tooltip" data-bs-placement="top" data-bs-title="delete">
                    Delete
                    </button>
                `
                return `
                    <div class="d-flex space-x">
                        ${buttons}
                    </div>
                `;
            },
        },
    ],
    onPostBody: () => {
        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
        );
        const tooltipList = [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );
    },
    
});