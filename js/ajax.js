function getCartQuantity() {
  $.ajax({
    url: "./php/cart.php",
    type: "POST",
    data: {
      action: "get_quantity",
    },
    success: function (data) {
      var res = JSON.parse(data);
      if (res.statusCode == 200) {
        document.getElementById('cart_quantity').textContent = res.total;
      } else {
        console.log(res.statusCode);
      }
    },
  });
}

function getAllCart() {
  let res;
  $.ajax({
    url: './php/cart.php',
    type: 'POST',
    async: false,
    data: {
      action: 'get_all_cart',
    },
    success: function(data) {
      res = JSON.parse(data).data;
    }
  })
  return res;
}
