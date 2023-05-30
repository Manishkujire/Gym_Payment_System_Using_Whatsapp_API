<?php
define( 'DIR', '../' );
require_once DIR . 'config.php';
$control = new Controller();

$admin = new Admin();
if ( isset( $_POST[ 'save' ] ) )
 {
    $gid = $_POST[ 'gid' ];
    $name = $_POST[ 'name' ];
    $age = $_POST[ 'age' ];
    $gender = $_POST[ 'gender' ];
    $phone = $_POST[ 'phone' ];
    $paydate = $_POST[ 'paydate' ];
    $enddate = $_POST[ 'enddate' ];
    $leftdate=$admin->left($enddate);
    $stmt = $admin->cud( "INSERT INTO `members`(`gid`,`name`,`age`,`gender`,`phone`,`paydate`,`enddate`,`leftdate`) VALUES ('".$gid."','".$name."','".$age."','".$gender."','".$phone."','".$paydate."','".$enddate."','".$leftdate."')", 'saved' );
    echo "<script>alert('data saved');</script>";
    $admin->redirect( '../index' );
}
?>