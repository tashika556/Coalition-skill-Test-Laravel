$('#productForm').on('submit', function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        url: "{{ route('products.store') }}",
        type: "POST",
        data: formData,
        success: function(response) {
            if (response.success) {
                var product = response.product;
                var newRow = `<tr data-id="${product.id}">
                    <td>${product.product_name}</td>
                    <td>${product.quantity}</td>
                    <td>${product.price_per_item}</td>
                    <td>${product.created_at}</td>
                    <td>${product.total_value_number}</td>
                    <td>
                        <a href="{{ url('products/${product.id}/edit') }}" class="btn btn-primary edit-button">Edit</a>
                    </td>
                </tr>`;
                $('#productsTable').prepend(newRow);
                $('#successMessage').removeClass('d-none').fadeIn().delay(2000).fadeOut();
                $('#productForm')[0].reset();
            }
        }
    });
});

$(document).on('click', '.edit-button', function(e) {
    e.preventDefault();
    var editUrl = $(this).attr('href');
    $.get(editUrl, function(data) {
        $('#editModal .modal-body').html(data);
        $('#editModal').modal('show');
    });
});

$('#editModal').on('submit', '#editProductForm', function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    var actionUrl = $(this).attr('action');
    $.ajax({
        url: actionUrl,
        type: "PUT",
        data: formData,
        success: function(response) {
            if (response.success) {
                var product = response.product;
                var row = $(`tr[data-id="${product.id}"]`);
                row.find('td:eq(0)').text(product.product_name);
                row.find('td:eq(1)').text(product.quantity);
                row.find('td:eq(2)').text(product.price_per_item);
                row.find('td:eq(3)').text(product.updated_at);
                row.find('td:eq(4)').text(product.total_value_number);
                $('#editModal').modal('hide');
            }
        }
    });
});
});