$(function()
{
	baseurl = $("#base_url").val();

	$(".addchilid").on("click",function()
	{
			var subcatfrm = new FormData($("#chilidfrm")[0]);
	        $.ajax({
	        url : baseurl+"Add_cat_three/addsubchilid/",
	          type :"POST",
	          data :subcatfrm, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	            window.location.reload();
	          }
	        });
	});
});	
