$(document).ready(function (){
	$(".del-sanpham").click(function (){

		var masp = $(this).attr('data-masp');

		$.ajax({
			url: "cart/del_sanpham",
			type: "post",
			data: "masp="+masp,
			async: true,
			success:function(kq)
			{
				window.location.reload();
			}
		});
		
	});
});