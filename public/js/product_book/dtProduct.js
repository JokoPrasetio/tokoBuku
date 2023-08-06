listProductBookTable.bootstrapTable({
    url:"/datatable/product-book",
    showColumns:true,
    showColumnsToggleAll:true,
    showRefresh:true,
    sortable:true,
    search:true,
    searchOnEnterKey:false,
    searchHiglight:true,
    pagination:true,
    pageSize:50,
    pageList:[50, 100, 200],
    cookie: true,
    cookieIdTable:"list_product_book",
    icons:{
        refresh: "fas fa-sync",
        columns: "fas fa-th-list",
    },
    columns: [
        {
            title: "Name Product",
            field: "name_produk",
            sortable: true,
        },
        {
            title: "Image Product",
            field: "uid",
            sortable: true,
            formatter:(value, row) =>{
                const imageUrl ='/assets/img/productBook/' + row.image;
                return '<a href="'+imageUrl+'" class="badge bg-info text-decoration-none" target="_blangk">Image</a>'
            }
        },
        {
            title:"Detail",
            field:"uid",
            sortable: true,
            formatter:(value, row) => {
                const fields = {
                    "#show_category_product_book":row.category.name,
                    "#show_product_book_name" : row.name_produk,
                    "#show_product_book_amount" : row.amount,
                    "#show_product_book_title" : row.title,
                    "#show_product_book_price" : row.price,
                    "#show_product_book_deskripsi": row.deskripsi,
                    "#show_product_book_address" : row.address
                }
                const obj = encodeURIComponent(JSON.stringify(fields));
                let buttons = "";
                buttons += ` 
                <button class="badge bg-info my-auto" style="border:none" onclick="ShowDetailProduct('${row.uid}', '${obj}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Show Detail">
                Show Detail
             </button>
            `
            return `
                <div class="d-flex space-x">
                    ${buttons}
                </div>
              `
            }
        },
        {
            title: "Action", 
            field: "uid",
            sortable: true,
            formatter: (value, row) => {
                const fields ={

                };
                const obj = encodeURIComponent(JSON.stringify(fields));
                let buttons = "";
                buttons += `
                    <button class="badge bg-danger" style="border:none" onclick="deleteProductBook('${row.uid}', '${row.name_produk}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="delete">Delete</button>
                `
                buttons +=`
                    <button class="badge bg-warning" style="border:none" onclick="redirect('${row.uid}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">Edit</button>
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
        const tooltipTriggerList=document.querySelectorAll(
            '[data-bs-toggle ="tooltip"]'
        );
        const tooltipList =[...tooltipTriggerList].map(
            (tooltiTriggerEl) => new bootstrap.Tooltip(tooltiTriggerEl)
        );
    },
});