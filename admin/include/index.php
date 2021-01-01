<?php include "../include/config.php";?>
<!doctype html>
<html lang="en">
    <head>
        <title>admin Panel</title>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <?php include "include/header.php";?>
           
       <div class="main">
           <div class="submain">
               <table class="table">
                   <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Contact</th>
                       <th>Pan</th>
                       <th>Aadhar</th>
                       <th>City</th>
                       <th>State</th>
                       <th>Area</th>
                       <th>Pin Code</th>
                       <th>action</th>
                   </tr>
                   <?php
                   $calling = callingData('user');
                   foreach($calling as $a):
                   ?>
                   <tr>
                   <td><?= $a['id'];?></td>
                   <td><?= $a['name'];?></td>
                   <td><?= $a['email'];?></td>
                   <td><?= $a['contact'];?></td>
                   <td><?= $a['pan'];?></td>
                   <td><?= $a['aadhar'];?></td>
                   <td><?= $a['city'];?></td>
                   <td><?= $a['state'];?></td>
                   <td><?= $a['area'];?></td>
                   <td><?= $a['pin_code'];?></td>
                   <td>
                    <a href="index.php?del_record=<?= $a['id'];?>" class="btn">Delete</a>
                    <?php
                    if($a['status']==false):?>
                    <a href="index.php?id=<?= $a['id'];?>" class="approve-btn">Approve</a>
                    <?php else: ?>
                        <a class="approved-btn">Approved</a>
                    <?php endif;?>
                   </td>
                   </tr>
                   <?php endforeach;?>
               </table>
           </div>
       </div>
    </body>
</html>
<?php
if(isset($_GET['del_record'])){
    $id = $_GET['del_record'];

    deleteData('user', "id = '$id'");
    redirect("index");
}
if(isset ($_GET['id'])){
    $id = $_GET['id'];
    updateData('user', "status='1'", "id='$id'");
    redirect("index");
}
?>
