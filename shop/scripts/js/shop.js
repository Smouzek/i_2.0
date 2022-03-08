$(document).ready(function() {
	// действие при наведении на изображения карусели
    $(".product__carousel-content img").hover(function() {
    	let link = $(this).attr('src');
    	$(".product__photo img").attr('src', link);
	});

    // действия для выбора количества товара
    $(".product__minus").click(function() {
    	let count_dom = $(".product__count-part");
    	let value = count_dom.val();
    	if (value > 0) {
			value--;
    		count_dom.val(value);
     	}
    });

    $(".product__plus").click(function() {
    	let count_dom = $(".product__count-part");
    	let value = count_dom.val();
    	value++;
    	count_dom.val(value);
    	
    });
    //
    $("#buy").click(function() {
    	let value = $(".product__count-part").val();
    	notif({
		  msg: "В корзину добавлено " + value + " товаров",
		  type: "info"
		});
    });
});
