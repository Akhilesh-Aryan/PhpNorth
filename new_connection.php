<?php include "include/config.php";?>
<!doctype html>
<html lang="en">
    <head>
        <title>North Bihar Power Limited</title>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <?php include "include/link.php";?>
    </head>
    <body>
        <?php include "include/header.php";?>
           
        <div class="container">
           <div class="side">
            <?php include "include/side.php";?>
            </div>
               <div class="content">
    
                    <form action="new_connection.php" method="post">
                           <div class="form-group">
                            <label>Name:-</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>Email:-</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                           <div class="form-group">
                            <label> Pan no.</label>
                            <input type="text" name="pan" class="form-control">
                        </div>
                           <div class="form-group">
                            <label> Aadhar</label>
                            <input type="text" name="aadhar" class="form-control">
                        </div>
                           <div class="form-group">
                            <label> City:-</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                           <div class="form-group">
                            <label>State:-</label>
                            <input type="text" name="state" class="form-control"><br />
                        </div>
                           <div class="form-group">
                            <label> Area:-</label>
                            <input type="text" name="area" class="form-control">
                        </div>
                           <div class="form-group">
                            <label> Pin Code</label>
                            <input type="number" name="pin_code" class="form-control">
                        </div>
                         <br>
                           <div class="form-group">
                            <input type="submit" name="send">
                        </div>
                    </form>
              
            </div>
        </div>
            <?php include "include/footer.php";?> 
    </body>
</html>
<?php
if(isset($_POST['send'])){
    $data =[
        'name' =>$_POST['name'],
        'email' =>$_POST['email'],
        'contact' =>$_POST['contact'],
        'pan' =>$_POST['pan'],
        'aadhar' =>$_POST['aadhar'],
        'city' =>$_POST['city'],
        'state' =>$_POST['state'],
        'area' =>$_POST['area'],
        'pin_code' =>$_POST['pin_code'],
    ];
    insertData('user',$data);
}
?>