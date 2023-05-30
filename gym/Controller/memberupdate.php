<?php
define( 'DIR', '../' );
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if ( isset( $_POST[ 'update' ] ) )
 {
    $gid = $_GET[ 'id' ];
    $name = $_POST[ 'name' ];
    $age = $_POST[ 'age' ];
    $gender = $_POST[ 'gender' ];
    $phone = $_POST[ 'phone' ];
    $paydate= $_POST[ 'paydate' ];
    $enddate = $_POST[ 'enddate' ];
    $leftdate=$admin->left($enddate);
    $stmt = $admin->cud( "UPDATE `members` SET `gid`='$gid',`name` = '$name',`age` = '$age',`gender` = '$gender',`phone`= '$phone',`paydate` = '$paydate' ,`enddate` = '$enddate' ,`leftdate` = '$leftdate 'WHERE `gid`='$gid'", 'updated' );
    echo "<script>alert('data updated successfully');</script>";
    $admin->redirect( '../index' );
}
?>

