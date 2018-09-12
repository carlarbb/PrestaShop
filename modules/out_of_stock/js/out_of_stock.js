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
                productRow.append('<form class=\"form_stock\" style="text-align:center;"> <input type=\"checkbox\" name=\"out_of_stock\" style=\"width:30px; height:30px;\" checked> </form>');
            } else {
                productRow.append('<form class=\"form_stock\" style="text-align:center;"> <input type=\"checkbox\" name=\"out_of_stock\" style=\"width:30px; height:30px;\"> </form>');
            }
        });
    });
});