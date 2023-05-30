<?php
include 'config.php';
include 'admin.php';
$control = new Controller();
$admin = new Admin();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content='au theme template'>
    <meta name='author' content='Hau Nguyen'>
    <meta name='keywords' content='au theme template'>
    <title>GYM management
    </title>
    <link rel='stylesheet' href='css/add.css'>
    <script>
            function callme(){
                var id = document.getElementById('member');
                var i = id.value;
                // document.cookie = 'c=' + i;
                // console.log(i);
                let phone=[];
                let paydate=[];
                let enddate=[];
                let leftdate=[];
                <?php     
                        // $id= $_COOKIE[ 'c' ];
                        $q = $admin->ret( "SELECT * FROM `members`" );
                        while($row=$q->fetch( PDO::FETCH_ASSOC )){
?>
phone.push('<?php echo $row['phone']?>');
paydate.push('<?php echo $row['paydate']?>');
enddate.push('<?php echo $row['enddate']?>');
leftdate.push('<?php echo $row['leftdate']?>');
<?php } ?>
                console.log(phone)
                console.log(paydate)
                console.log(enddate)
                console.log(leftdate)
          a.value=phone[i-1]
          b.value=paydate[i-1]
    c.value=enddate[i-1]
    d.value=leftdate[i-1]

            }
        </script>
</head>

<body>
    <div class='container'>
        <form action='Controller/addpayment.php' method='POST'>
            <h1>ADD MEMBER</h1>
            <div class='row'>
                <label>NAME</label>
                <select name='member' type="submit" id="member" onchange='callme()'>
                    <option selected disabled>Choose the member</option>
                    <?php
$query = $admin->ret( 'SELECT * FROM `members` order by `leftdate`' );
while( $player = $query->fetch( PDO::FETCH_ASSOC ) ) {
    ?>
                    <option value='<?php echo $player['gid'];?>'>
                        <?php echo $player[ 'gid' ].' '.$player[ 'name' ];
    ?>
                    </option>
                    <?php }
        ?>
                </select>
            </div>
        
            <div class='row'>
                <label>PHONE NUMBER</label>
                <input type='text' id='a' readonly='' name='phone' readonly = ''>
            </div>

            <div class='row'>
                <label>LAST PAY</label>
                <input type='text' id='b' name='paydate'  readonly=''>
            </div>
            <div class='row'>
                <label>END DATE</label>
                <input type='text' id='c' name='enddate' readonly=''>
            </div>
            <div class='row'>
                <label>DAYS LEFT</label>
                <input type='text' id='d' name='leftdate'  readonly=''>
            </div>
            <div class='row'>
                <label class='a'>ADD days</label>
                <input class='newdate' type='text' name='interval'pattern="[0-9]+" required
                    title="Invalid input">
                <label class="b">DAYS</label>
            </div>
            <div class = 'row'>
    <input type = 'submit' name = 'update' value = 'SUBMIT'>
    </div>
            

        </form>

    </div>

</body>

</html>