var base_url = $('input[name="base_url"]').val();

$(document).on("click", ".productModal", function(){
    $('#addproduct').modal('show');
});
$(document).on("click", ".close", function(){
    $('#addproduct').modal('hide');
    $('#editproduct').modal('hide');
});
// add products
$(document).on('submit','form#add_product', function(e){
    e.preventDefault();
    let formData = $(this).serialize();
    $.ajax({
        method:'POST',
        url: base_url + 'products/addproduct',
        data: formData,
        dataType: 'json',
        success: function(response){
            console.log('response', response);
            if (response.status) {
                $('#addproduct').modal('hide');
                $("#productTable").DataTable().ajax.reload();
            } else {
                alert('The price should not be a negative value.')
            }
        }
    })
})

// edit products
$(document).on("click", ".updateProduct", function(e){
    e.preventDefault();
    var product_id = $(this).attr('data-id');
    $.ajax({
        method:'POST',
        url: base_url + 'products/editProduct',
        dataType: 'json',
        data: {id:product_id},
        success: function(data){
            console.log('data', data);
            $('#editproduct').modal('show');
            $('#editproduct .product_edit_id').val(data.products.id);
            $('#editproduct input[name="product_name"]').val(data.products.product_name);
            $('#editproduct input[name="description"]').val(data.products.description);
            $('#editproduct input[name="price"]').val(data.products.price);
        }
    })
});

// update products
$(document).on("submit","#editproduct", function(e){
    e.preventDefault();
    let formData = new FormData(document.getElementById("edit_product"));
    var product_id = $('input[name="product_edit_id"]').val();
    formData.append("id", product_id);
    $.ajax({
        method: 'POST',
        url: base_url + 'products/updateProduct',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'json',
        success: function (data) {
            alert('updated successfully..');
           $('#editproduct').modal('hide');
           $("#productTable").DataTable().ajax.reload();
       }
    })

})
// delete products
$(document).on("click", ".deleteProduct", function (e) {
    e.preventDefault();
    var product_id = $(this).attr('data-id');
    $.ajax({
        type: 'POST',
        url: base_url + 'products/delete_products',
        data: { id: product_id },
        success: function (data) {
            alert('successfullt deleted')
            $("#productTable").DataTable().ajax.reload();
        }
     })
 });


$(document).ready(function () {
    $('#productTable').DataTable({
        "responsive": true,
        "processing": true,
        "serverside": true,
        "order": [[0, 'desc']],
        "columns": [
            { "data": "product_name" },
            { "data": "description" },
            { "data": "price" },
            { "data": 'date_created', render: DataTable.render.datetime( 'MM/DD/YYYY' ) },
            { "data": 'date_modified', render: DataTable.render.datetime( 'MM/DD/YYYY' ) },
            {
                "data": "actions", "render": function (data, type, row, meta) {
                    var str = '';
                    str += '<div class="actions">';
                    str += '<button data-id="' + row.id + '"class="btn btn-sm btn-info updateProduct">Update</button>';
                    str += '<button data-id="' + row.id + '"class="btn btn-sm btn-danger deleteProduct">Delete</button>';
                    str += '</div>';
                    return str;
                }
            }
        ],
        "ajax": {
            "url": base_url + "products/getProducts",
            "type": "POST",
            dataSrc: ""
        }
    });
});