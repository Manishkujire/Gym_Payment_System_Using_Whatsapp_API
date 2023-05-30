<?php
include 'config.php';
include 'admin.php';
$control = new Controller();
$admin = new Admin();
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>
<meta name = 'description' content = 'au theme template'>
<meta name = 'author' content = 'Hau Nguyen'>
<meta name = 'keywords' content = 'au theme template'>
<title>VIEW PLAYER DETAILS</title>
<link rel = 'stylesheet' href = 'css/style.css'>
<link rel = 'stylesheet'
href = 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
</head>

<body>
<div class = 'container'>
<h3>VIEW MEMBER DETAILS</h3>
<div>
<a href = 'index.php'>
<span class = 'material-symbols-outlined back'>
arrow_back
</span></a>
<br>
<br>
</div>
<table class = 'content-table ' id = 'example'>
<thead>
<tr>
<th>GID</th>
<th>Name</th>
<th>AGE</th>
<th>GENDER</th>
<th>PHONE</th>
<th>Delete</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php
$admin->setleft();
$stmt = $admin->ret( 'SELECT * FROM `members` order by gid' );
while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    ?>
    <tr>
    <td>
    <?php echo $row[ 'gid' ];
    ?>
    </td>
    <td>
    <?php echo $row[ 'name' ];
    ?>
    </td>

    <td>
    <?php echo $row[ 'age' ];
    ?>
    </td>
    <td>
    <?php echo $row[ 'gender' ];
    ?>
    </td>
    <td>
    <?php echo $row[ 'phone' ];
    ?>
    </td>
    <td class = 'symbol'><a href = "Controller/memberdelete.php?id=<?php echo $row['gid']; ?>"
    OnClick = "return confirm('are you sure')"><span class = 'material-symbols-outlined dlt'>delete</span></a></td>
    <td class = 'symbol'><a href = "memberupdate.php?id=<?php echo $row['gid']; ?>"
    ><span class = 'material-symbols-outlined edt'>edit</span></a></td>
    </tr>
    <?php }
    ?>
    </tbody>
    </table>
    </body>
    </html>