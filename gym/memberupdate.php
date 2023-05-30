<?php
define( 'DIR', '' );
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();
include 'admin.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>MEMBER DETAILS</title>
    <link rel='stylesheet' href='css/add.css'>
</head>

<body>

    <?php
$gid = $_GET [ 'id' ];
$stmt = $admin->ret( 'SELECT * FROM `members` where `gid`="'.$gid.'";' );
$row = $stmt->fetch( PDO::FETCH_ASSOC );
?>
    <div class='container'>
        <form action="Controller/memberupdate.php?id=<?php echo $row['gid']; ?>" method='POST'>
            <h1>UPDATE PLAYER DETAILS</h1>
            <br>
            <div class='row'>
                <label>ID</label>
                <label>
                    <?php echo $gid;
?>
                </label>
            </div>
            <div class='row'>
                <label>NAME</label>
                <input type='text' name='name' placeholder='Enter the name' value="<?php echo $row['name'];?>"
                pattern="[A-Za-z\s]+" required
                    title="letters only">
            </div>
            <div class='row'>
                <label>AGE</label>
                <input type='text' name='age' placeholder='Enter the age' value='<?php echo $row['age']; ?>'>
            </div>
            <div class='row'>
            <input type='hidden' name='gender' value='<?php echo $row['gender']; ?>'>
                <label>GENDER</label>
                <select name='gender' value='<?php echo $row['gender']; ?>'>
                    <option desabled  value='<?php echo $row['gender']; ?>'><?php echo $row['gender']; ?></option>
                    <option value='M'>MALE</option>
                    <option value='F'>FEMALE</option>
                </select>
            </div>
            
            <div class='row'>
                <label>PHONE NUMBER</label>
                <input type='text' name='phone' placeholder='Enter phone number' value='<?php echo $row['phone'];
                    ?>'pattern="[+]91[0-9]{10}" required
                    title="10 numeric characters only with prefix +91">
                
            </div>

            <div class='row'>
                <label>PDATE</label>
                <input type='date' name='paydate' placeholder='' value='<?php echo $row['paydate'];
                    ?>'>
            </div>
            <div class='row'>
                <label>EDATE</label>
                <input type='date' name='enddate' placeholder='' value='<?php echo $row['enddate'];
                    ?>'>
            </div>
            <br>
            <div class='row'>
                <input type='submit' name='update' value='SUBMIT' class='btn btn-danger'>
            </div>
        </form>
    </div>
</body>

</html>