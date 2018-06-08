<?php 
$c = $this->db->query("select * from category_one");
$cc = $c->result_array();

$c2 = $this->db->query("select * from category_two");
$cc2 = $c2->result_array();

?>
<div class="main">
	<div class="card-panel subcarcard ">
			<div class="row">
			    <form class="col s12" id="chilidfrm">
			      <div class="row">

			      	  <div class="input-field col s4">
						    <select name="cat_one">
						      <option value="" disabled selected>Choosemain category</option>
						      <?php foreach ($cc as $key => $c1) { ?>
						      <option value="<?php echo $c1['category_name']; ?>"><?php echo $c1['category_name']; ?></option>
						      <?php } ?>
						      <select>
					   </div>

					    <div class="input-field col s4">
						    <select name="cat_two">
						      <option value="" disabled selected>Choosemain category</option>
						      <?php foreach ($cc2 as $key => $c2) { ?>
						      <option value="<?php echo $c2['subcat_name']; ?>"><?php echo $c2['subcat_name']; ?></option>
						      <?php } ?>
						      <select>
					   </div>


			        <div class="input-field col s4">
			          <input placeholder="enter category" name="lastcat_name" type="text" class="validate">
			        </div>

			         <div class="input-field col s6">
			          <input placeholder="price" id="price" name="price" type="text" class="validate">
			        </div>

			         <div class="input-field col s6">
			          <input placeholder="image" name="cat_img" id="lastcat" type="file" class="validate">
			        </div>

			         <div class="input-field col s12">
			          <textarea name="description" placeholder="description"></textarea>
			        </div>

			       
			        <div class="input-field col s3">
			          <a class="waves-effect waves-light btn addchilid ">add sub cat</a>
			        </div>

			      </div>
			  </form>
		   </div>
	</div>
</div>


<?php 
$c2 = $this->db->query("select * from category_three");
$c22 = $c2->result_array();
?>
<div class="main">
	<table id="example" class="display compact nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>cat_one</th>
                <th>cat_two</th>
                <th>lastcat_name</th>
                <th>price</th>
                <th>description</th>
                <th>images</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($c22 as $key => $cc) { ?>
	        	<tr>
	                <td><?php echo $cc['id']; ?></td>
	                <td><?php echo $cc['cat_one']; ?></td>
	                <td><?php echo $cc['cat_two']; ?></td>
	                <td><?php echo $cc['lastcat_name']; ?></td>
	                <td><?php echo $cc['price']; ?></td>
	                <td><?php echo $cc['description']; ?></td>
	               <td><img src="<?php echo base_url(); ?>html/images/category_three/<?php echo $cc['cat_img']; ?>" width='50'></td>
	                <td></td>
	            </tr>
            <?php } ?>
       </tbody> 
    </table>      
</div>




<style type="text/css">
	input#lastcat {
    position:  relative;
    top: 17px;
    text-align:  center;
    padding-left:  55px;
}
</style>