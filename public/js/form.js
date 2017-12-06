$(document).ready(function (){
	$(".btn-checkout").click(function (){
		var errors = false;
		hoten = $("#inputHoten").val();
		sdt = $("#inputSodienthoai").val();
		diachi = $("#inputDiachi").val();

		if(hoten == "")
		{
			$("#inputHoten").next(".alert").html("<strong>Warning!</strong> Bạn chưa nhập tên");
			$("#inputHoten").next(".alert").fadeIn();
			errors = true;
		}
		var regex = /^[0-9]{10,11}$/;
		if(regex.test(sdt) == false)
		{
		$("#inputSodienthoai").next(".alert").html("<strong>Warning!</strong> Nhập lại số điện thoại, chữ số gồm 10-11 số");
			$("#inputSodienthoai").next(".alert").fadeIn();
			errors = true;
		}
		if(diachi== ""){
			$("#inputDiachi").next(".alert").html("<strong>Warning!</strong> Bạn chưa nhập địa chỉ")
			$("#inputDiachi").next(".alert").fadeIn();
			errors= true;
		}

		if(errors == true)
		{
			return false;
		}else{

			// var formData = new FormData($(this)[0]);
			
			$.ajax({
				url: "cart/thanhtoan", 
				type: "post",
				dataType: "json",
				data: "hoten="+hoten+"&sdt="+sdt+"&diachi="+diachi,
				async: true,
				success:function(result)
				{	
					console.log(result);
					if(result.message == "success")
					{
						$("#success").fadeIn();
					}else{
						$("#errors").fadeIn();
						$("#success").fadeOut();
					}	
				}
			});
			return false;
		}
	});
	
})