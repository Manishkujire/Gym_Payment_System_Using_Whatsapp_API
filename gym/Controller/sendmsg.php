<?php
define( 'DIR', '../' );
require_once DIR . 'config.php';
$control = new Controller();
// include( 'WhatsappAPI.php' );
// $wp = new WhatsappAPI( '4222', '0e2210d6a3541819ef5ede7a6ab50257aa961dfd' );
$ins = '640F42A4E4CE3';
$api = 'a7d0e44ac90550f0bf8612ab1bf72537';
$url = 'https://betablaster.in/api/send.php';

$admin = new Admin();
if ( isset( $_POST[ 'send' ] ) )
 {
    $count = $_POST[ 'count' ];
    for ( $i = 1; $i <= $count; $i++ ) {
        $gid = $_POST[ 'gid'.$i ];
        $status = $_POST[ 'check'.$i ];
        $stmt = $admin->ret( "SELECT * FROM `members` where gid='$gid'" );
        $row = $stmt->fetch( PDO::FETCH_ASSOC );
        if ( $status == 1 ) {
            if ( $row[ 'leftdate' ]>0 ) {
                $n = $row[ 'phone' ];
                $num = substr( $n, 3 );
                $number = intval( $num );
                $message = 'Dear '.$row[ 'name' ].', your subscription expires on '.$row[ 'enddate' ].', you are left with '.$row[ 'leftdate' ].' days.';
                $data = [
                    'number' => $number,
                    'message' => $message,
                    'instance_id' => $ins,
                    'type'=>"text",
                    'access_token' => $api
                ];
                // $status = $wp->sendText( $number, $message );
            } else {
                $n = $row[ 'phone' ];
                $num = substr( $n, 3 );
                $number = intval( $num );
                $message = 'Dear '.$row[ 'name' ].', your subscription had expired on '.$row[ 'enddate' ].', please reniew immidiatly.';
                $data = [
                    'number' => $number,
                    'message' => $message,
                    'instance_id' => $ins,
                    'type'=>"text",
                    'access_token' => $api
                ];
                // $status = $wp->sendText( $number, $message );
                $admin->ret( "UPDATE `members` SET msg='1' where gid='$gid'" );
            }
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/x-www-form-urlencoded' ] );
            curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $data ) );
            curl_setopt( $ch, CURLOPT_URL, $url );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
            $result = curl_exec( $ch );
            curl_close( $ch );
        }
        $admin->redirect( '../sendmsg' );
    }
}

?>