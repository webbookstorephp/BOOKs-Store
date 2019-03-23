$(function(){
    $updateCart = $("a.updateCart");
    $updateCart.click(function(e){
        e.preventDefault();

        $qty = $(this).parents(".tbody").find(".qty").val();
        $key = $(this).attr("data-key");

        $.ajax({
            url: 'updateCart.php',
            type: 'GET',
            data: {'qty': $qty, 'key': $key},
            success: function(data)
            {
                if(data == 1)
                {
                    alert('Cập nhật giỏ hàng thành công');
                    location.href = 'gio-hang.php';
                }
            }
        });
    });
});