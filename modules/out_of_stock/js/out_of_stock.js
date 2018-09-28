$(document).ready(function() {
    $(".column-headers").append('<th scope=\"col\" class=\"text-center\" style=\"width: 9%\">Out of stock</th>');
    $(".column-filters").append('<th>&nbsp;</th>');
    $('[data-uniturl]').each(function() {
        var productRow = $(this);
        $.ajax({
            type: "GET",
            url: linkToController,
            data: { product_id: $(this).data('productId') },
        }).done(function(data) {
            if (data == 1) {
                productRow.append('<td class=\"text-center\"> <input type=\"checkbox\" class=\"out_of_stock\" style=\"width:30px; height:30px;\" data-productid=\"' + productRow.data('productId') + '\" checked> </td>');
            } else {
                productRow.append('<td class=\"text-center\"> <input type=\"checkbox\" class=\"out_of_stock\" style=\"width:30px; height:30px;\" data-productid=\"' + productRow.data('productId') + '\"> </td>');
            }
        });
    });
});

//onclick pe elemente create dinamic
$(document).on('click', '.out_of_stock', function() {
    var send_info;
    if ($(this).is(':checked')) send_info = 1;
    else send_info = 0;
    $.ajax({
        type: "GET",
        url: linkToController,
        data: {
            change_stock: send_info,
            checkboxProdId: $(this).data("productid")
        }
    }).done(function(data) {
        if (data) alert('success');
        else alert('failure');
    });
});