<?php

include "db_connect.php";

$title= trim($_POST['title']);

$productname= trim($_POST['productname']);

$location= trim($_POST['location']);

$price= trim($_POST['price']);

$description= trim($_POST['description']);

$category= trim($_POST['category']);


$sql="INSERT INTO  `products` (`product_name`,`category_id`,`descript`,`price`,`title`) VALUES('$productname','$category','$description','$price','$title') ";
$query=mysqli_query($conn,$sql) or die($conn);

if($query==TRUE){
    echo 'Success';

}else{
    echo 'Failed';
}

?>