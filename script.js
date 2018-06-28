function addToCartJS(productId, productPrice) {
    console.log(productId, productPrice);
    var postedData = {
        action: 'add',
        id: productId,
        price: productPrice
    }
    $.ajax({
        type: 'POST',
        url: './function_cart.php',
        data: postedData,
        dataType: 'json',
        success: function (output) {
            console.log(output);
        }
    });
}