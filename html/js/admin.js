$(function(){
	var baseurl=$('#base_url').val();

	$(".adminlog").on("click",function(){
		var data = {
			'username' : $("#login__username").val(),
			'password' : $("#login__password").val()
		};
			/*$.post(baseurl+"login/dologin/",{data:data},function(data){*/
			$.post(baseurl+"admin/adminlog/",{data:data},function(data){

				var check = jQuery.parseJSON(data);
				if(check.status=='ok')
				{
					alert("login successfully.");
					window.location.href=baseurl+"add_cat_two";
					/*$('form[name=signinFrom]').html('');*/
				}
				else if(check.status=='fail')
				{
					alert("login fail");
				}
				else
				{
					alert("Please Check your Login Details.");
					window.location.reload();
					console.log(data);
				}
			});
	});




});