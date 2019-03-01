<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;
$product_names = array();
$output = '
<div class="table-responsive" width="800px;" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th width="40%">Product Name</th>  
            <th width="10%">Quantity</th>  
            <th width="20%">Price</th>  
            <th width="15%">Total</th>  
            <th width="5%">Action</th>  
        </tr>
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$myObj = (object) array(
			"Product" => $values["product_name"],
			"Qty" => $values["product_quantity"],
			"ProductPrice" => $values["product_price"],
			"ProductTotal" => number_format($values["product_quantity"] * $values["product_price"])
		);
		array_push($product_names,$myObj);
		$output .= '
		<tr>
			<td>'.$values["product_name"].'</td>
			<td>'.$values["product_quantity"].'</td>
			<td align="right">'.$values["product_price"].'</td>
			<td align="right">'.number_format($values["product_quantity"] * $values["product_price"], 2, ".", "").'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">Remove</button></td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;
	}
	$output .= '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">'.number_format($total_price, 2, ".", "").'</td>  
        <td></td>  
    </tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		Your Cart is Empty!
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	number_format($total_price, 2, ".", ""),
	'total_item'		=>	$total_item,
	'product_names'      =>  $product_names
);	

echo json_encode($data);


?>