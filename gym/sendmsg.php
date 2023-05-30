<?php
include 'config.php';
include 'admin.php';
$control = new Controller();
$admin = new Admin();
$admin->setleft();
$i=0;
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content='au theme template'>
    <meta name='author' content='Hau Nguyen'>
    <meta name='keywords' content='au theme template'>
    <title>VIEW PLAYER DETAILS</title>
    <link rel='stylesheet' href='css/style.css'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
</head>

<body>
    <div class='container'>
        <form action="Controller/sendmsg.php" method="POST">
        <div>
            <a href='index.php'>
            <span class="material-symbols-outlined back">
arrow_back
</span></a>
<button name="send" type="submit" class = 'material-symbols-outlined send'onclick="return alert('MSG SENT SUCCESSFULLY')">send</button>
<br>
<br>
<br>
<br>
<br>
        </div>
<?php 
 $stmt = $admin->ret( "SELECT * FROM `members` where `leftdate`='0' and `msg`='0'" );
if( $stmt->rowCount()>0){
    ?>
        <h3>NOT INFORMED</h3>
        <table class='content-table ' id='example'>
            <thead>
                <tr>
                    <th><label for="selectAll"><input type="checkbox"id="selectAll-n">SELECT ALL
                        
                    </label>
                    </th>
                    <th>GID</th>
                    <th>Name</th>
                    <th>PHONE</th>
                    <th>EDATE</th>
                    <th>DAYS LEFT</th>
                </tr>
            </thead>
            <tbody>
                <?php
while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    $i++;
    ?>
                <tr style="     background-color: rgba(146, 29, 29, 0.68);

">
                    <td>
                        <input type="hidden" value="  <?php echo $row[ 'gid' ]?>" name='gid<?php echo $i?>'>
                        <input type="hidden" name="check<?php echo $i?>"value='0'>
                        <input type="checkbox" class="select-n" name="check<?php echo $i?>"value='1'>

                    </td>
                    <td>

                        <?php echo $row[ 'gid' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'name' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'phone' ];
    ?>
                    </td>
                  
                    <td>
                        <?php echo $row[ 'enddate' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'leftdate' ];
    ?>
                    </td>
                </tr>
                <?php }
    ?>
    
            </tbody>
        </table>
        <script>
            let mainn=document.getElementById('selectAll-n');
            let selectn=document.getElementsByClassName('select-n');
            mainn.onclick=()=>{
                if(mainn.checked==true){
                    for(let i=0;i<selectn.length;i++)
                    selectn[i].checked=true;
                }
                else{
                    for(let i=0;i<selectn.length;i++)
                    selectn[i].checked=false;
                }
            }
            </script>
        <?php }
    ?>
    <?php 
$stmt = $admin->ret( "SELECT * FROM `members` where `leftdate`='0' and `msg`='1'" );
if( $stmt->rowCount()>0){
    ?>
        <h3>INFORMED</h3>
        <table class='content-table ' id='example'>
            <thead>
                <tr>
                <th><label for="selectAll"><input type="checkbox"id="selectAll-i">SELECT ALL
                        
                        </label>
                        </th>
                    <th>GID</th>
                    <th>Name</th>
                    <th>PHONE</th>
                    <th>EDATE</th>
                    <th>DAYS LEFT</th>
                </tr>
            </thead>
            <tbody>
                <?php
while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    $i++;
    ?>
                <tr style="   background-color: rgba(130, 71, 85, 0.68);">
                <td>
                <input type="hidden" value="  <?php echo $row[ 'gid' ]?>" name='gid<?php echo $i?>'>
                        <input type="hidden" name="check<?php echo $i?>"value='0'>
                        <input type="checkbox" class="select-i" name="check<?php echo $i?>"value='1'>


                    </td>
                    <td>

                        <?php echo $row[ 'gid' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'name' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'phone' ];
    ?>
                    </td>
                  
                    <td>
                        <?php echo $row[ 'enddate' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'leftdate' ];
    ?>
                    </td>
                </tr>
                <?php }
    ?>
    
            </tbody>
        </table>
        <script>
        let maini=document.getElementById('selectAll-i');
            let selecti=document.getElementsByClassName('select-i');
            maini.onclick=()=>{
                if(maini.checked==true){
                    for(let i=0;i<selecti.length;i++)
                    selecti[i].checked=true;
                }
                else{
                    for(let i=0;i<selecti.length;i++)
                    selecti[i].checked=false;
                }
            }
        </script>
        <?php }
    ?>
    <?php 
$stmt = $admin->ret( "SELECT * FROM `members` where not leftdate='0'" );
if( $stmt->rowCount()>0){
    ?>
        <h3>OTHERS</h3>
        <table class='content-table ' id='example'>
            <thead>
                <tr>
                    <th><label for="selectAll"><input type="checkbox"id="selectAll-o">SELECT ALL
                        
                        </label>
                        </th>
                    <th>GID</th>
                    <th>Name</th>
                    <th>PHONE</th>
                    <th>EDATE</th>
                    <th>DAYS LEFT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $admin->setleft();
while( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
    $i++;
    ?>
                <tr style="   background-color: rgba(60, 120, 60, 0.68);">
                    <td>
                    <input type="hidden" value="  <?php echo $row[ 'gid' ]?>" name='gid<?php echo $i?>'>
                        <input type="hidden" name="check<?php echo $i?>"value='0'>
                        <input type="checkbox" class="select-o" name="check<?php echo $i?>"value='1'>



                    </td>
                    <td>

                        <?php echo $row[ 'gid' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'name' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'phone' ];
    ?>
                    </td>
                  
                    <td>
                        <?php echo $row[ 'enddate' ];
    ?>
                    </td>
                    <td>
                        <?php echo $row[ 'leftdate' ];
    ?>
                    </td>
                </tr>
                <?php
                }
    ?>
    <input type="hidden" name="count" value="<?php echo $i;?>">
            </tbody>
        </table>
        <?php }
    ?>
                <script>

            
            let maino=document.getElementById('selectAll-o');
            let selecto=document.getElementsByClassName('select-o');
            maino.onclick=()=>{
                if(maino.checked==true){
                    for(let i=0;i<selecto.length;i++)
                    selecto[i].checked=true;
                }
                else{
                    for(let i=0;i<selecto.length;i++)
                    selecto[i].checked=false;
                }
            }
        </script>
        </form>
</body>
</html>