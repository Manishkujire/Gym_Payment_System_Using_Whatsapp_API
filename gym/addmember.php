<?php

define( 'DIR', '' );
require_once DIR . 'config.php';

$control = new Controller();

$admin = new Admin();
 include 'admin.php' ;
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

</head>

<body>
    <div class='container'>
        <form action='Controller/addmember.php' method='POST'>
            <h1>ADD MEMBER</h1>
            <div class='row'>
                <input name='gid' type='hidden'>
            </div>

            <div class='row'>
                <label>NAME</label>
                <input type='text' name='name' placeholder='Enter the name' pattern="[A-Za-z\s]+" required
                    title="letters only">
            </div>
            <div class='row'>
                <label>AGE</label>
                <input type='text' pattern="[0-9]+" required title="numbers only" name='age'
                    placeholder='Enter ther age'>
            </div>
            <div class='row'>
                <label>GENDER</label>
                <select name='gender'>
                    <option selected disabled>Choose the gender</option>
                    <option value='M'>male</option>
                    <option value='F'>female</option>
                </select>
            </div>
            <div class='row'>
                <label>PHONE NUMBER</label>
                <input type='text' name='phone' placeholder='Enter the Ph.No' pattern="+91[0-9]{10}" required
                    title="10 numeric characters only">
            </div>

            <div class='row'>
                <label>PDATE</label>
                <input type='date' name='paydate'>
            </div>
            <div class='row'>
                <label>EDATE</label>
                <input type='date' name='enddate'>
            </div>
            <div class='row'>
                <input type='submit' name='save' value='SUBMIT'>
            </div>
        </form>

    </div>
</body>

