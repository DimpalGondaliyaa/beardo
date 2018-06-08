$(function()
{
	baseurl = $("#base_url").val();

	$(".addsubcat").on("click",function()
	{
			var subcatfrm = new FormData($("#subcatfrm")[0]);
	        $.ajax({
	        url : baseurl+"Add_cat_two/addsubcat/",
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

  $(document).ready(function(){
    $('select').formSelect();
  });

  $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
} );
