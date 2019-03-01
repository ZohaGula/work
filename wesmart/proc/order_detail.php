<?php
$con = mysqli_connect('localhost', 'root', '' , 'wesmarti_db') or die('not connected'.mysqli_error());
if(!$con){
    die(json_encode([
        'status' => 0,
        `message` => "Invalid db credentials"
    ]));	
} 
if(!mysqli_select_db($con, 'wesmarti_db')){
    die(json_encode([
        'status' => 0,
        `message` => "Invalid db credentials"
    ]));	
} else {
    $response_msg = array ("status"=>false);
    $firstName = $_POST['first_name'];
    $lastName = $_POST['first_name'];
    $amount = $_POST['amount'];
    $_email = $_POST['_email'];
    $phone = $_POST['phone'];
    $logoName = $_POST['logo_name'];
    $tagLine = $_POST['tagline'];
    $lookFeel = $_POST['lookFeel'];
    $colorLike = $_POST['colorLike'];
    $colorDisLike = $_POST['colorDisLike'];
    $idea = $_POST['idea'];
    $target_audience = $_POST['target_audience'];
    $industry = $_POST['industry'];
    $logoStyle = $_POST['logoStyle'];
    $_dateTime = date("F d, Y h:i:s A");

    $sql = "INSERT INTO order_detail ".
            "(fname, lname, amount, _email, phone, logo_name, tagline, look_feel, color_like, color_dislike, idea, target_audience,industry,logoStyle) VALUES ".
            "(\"$firstName\", \"$lastName\", \"$amount\", \"$_email\", \"$phone\", \"$logoName\", \"$tagLine\", \"$lookFeel\", \"$colorLike\", \"$colorDisLike\",
             \"$idea\", \"$target_audience\" , \"$industry\", \"$logoStyle\")" 
            or die('error in data'.mysqli_error());

    $run_insert = mysqli_query($con,$sql);

    if($run_insert){
        $response_msg = array ("status"=>true, "data" => mysqli_insert_id($con));
    }
    else{
        $response_msg['message'] = mysqli_error($con);
        $response_msg['sql'] = $sql;
    }

    echo json_encode($response_msg);	
}
?>

