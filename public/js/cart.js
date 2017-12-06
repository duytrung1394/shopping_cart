$(document).ready(function (){

	$(".quantity").change(function (){
		
		var masp = $(this).attr("data-masp");
		var soluong = $(this).val();

		$.ajax({
			url: "cart/xulyQuantity",
			type: "post",
			data: "masp="+masp+"&soluong="+soluong,
			async: true,
			success:function(kq)
			{
				window.location.reload();
			}
		});
		return false;
	});
});