


<?php
define( 'DIR', '../' );
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if ( isset( $_POST[ 'update' ] ) )
 {
    $gid = $_POST[ 'member' ];
    $tday=date('Y-m-d');
    if($_POST[ 'interval' ]>0){
    $newdate=$admin->getdate($_POST[ 'enddate' ],$_POST[ 'interval' ]);
    $admin->cud( "UPDATE `members` SET `paydate` ='$tday' ,`enddate` = '$newdate',`msg`='1' WHERE `gid`='$gid'", 'updated' );
    }
    echo "<script>alert('data updated successfully');</script>";
    $admin->redirect( '../viewpayment' );
}
?>

