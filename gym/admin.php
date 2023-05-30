<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
</head>
<title>ADMIN</title>

<body>
    <div class='player_pag'>
        <nav class='sidebar'>
            <div>
                <a href='index.php' class='brand'>
                    <span class='material-symbols-outlined'>

                    </span>
                    <span>GYM MANAGEMENT</span>
                </a>
                <small class='menu-heading'>
                    <span>Admin Tools</span>
                </small>
                <ul class='tools'>
                    <li>
                        <a href='index.php'>
                            <span class='material-symbols-outlined'>person</span>
                            <span>MEMBERS</span></a>
                        <a class="add" href="addmember.php"> <span class='material-symbols-outlined'>add</span>
                    </a>
                    </li>
                    <li>
                        <a href='viewpayment.php'>
                            <span class='material-symbols-outlined'>person</span>
                            <span>PAYMENT</span></a>
                            <a class="add" href="addpayment.php"> <span class='material-symbols-outlined'>add</span>
                    </a>
                    <li class='single'>
                        <a href='viewexpire.php'>
                            <span class='material-symbols-outlined'>person</span>
                            <span>EXPIRED</span></a>
                            
                    </a>
                    <li class='single'>
                        <a href='sendmsg.php'>
                            <span class='material-symbols-outlined'>person</span>
                            <span>SEND_MSG</span></a>
                            
                    </a>
                    </li>
            </div>
        </nav>
    </div>
</body>

</html>