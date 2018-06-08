<?php 
$c = $this->db->query("select * from category_one");
$cc = $c->result_array();

?>
<div class="main">
	<div class="card-panel subcarcard ">
			<div class="row">
			    <form class="col s12" id="subcatfrm">
			      <div class="row">

			      	  <div class="input-field col s3">
						    <select name="cat_one">
						      <option value="" disabled selected>Choosemain category</option>
						      <?php foreach ($cc as $key => $c1) { ?>
						      <option value="<?php echo $c1['category_name']; ?>"><?php echo $c1['category_name']; ?></option>
						      <?php } ?>
						      <select>
					   </div>


			        <div class="input-field col s3">
			          <input placeholder="enter category" id="subcat_name" name="subcat_name" type="text" class="validate">
			        </div>

			        <div class="input-field col s3">
			          <input placeholder="image" id="cat_img" name="cat_img" type="file" class="validate">
			        </div>

			        <div class="input-field col s3">
			          <a class="waves-effect waves-light btn addsubcat ">add sub cat</a>
			        </div>

			      </div>
			  </form>
		   </div>
	</div>
</div>


<?php 
$c2 = $this->db->query("select * from category_two");
$c22 = $c2->result_array();
?>
<div class="main">
	<table id="example" class="display compact nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>cat_one</th>
                <th>subcat_name</th>
                <th>images</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($c22 as $key => $cc) { ?>
	        	<tr>
	                <td><?php echo $cc['id']; ?></td>
	                <td><?php echo $cc['cat_one']; ?></td>
	                <td><?php echo $cc['subcat_name']; ?></td>
	               <td><img src="<?php echo base_url(); ?>html/images/sub_category/<?php echo $cc['cat_img']; ?>" width='50'></td>
	                <td></td>
	            </tr>
            <?php } ?>
       </tbody> 
    </table>      
</div>