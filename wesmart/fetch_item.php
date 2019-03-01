<?php /*?><?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * From tbl_product WHERE id = '1'";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		  
          
            	<img src="images/about/'.$row["image"].'" class="img-responsive" /><br />
            	<h4 class="text-info">'.$row["name"].'</h4>
            	<h4 class="text-danger">$ '.$row["price"] .'</h4>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
          
		';
	}
	echo $output;
}


?><?php */?>