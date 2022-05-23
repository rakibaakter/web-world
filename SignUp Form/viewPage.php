<?php
if(isset($_POST['submit'])){
    echo $name =$_POST['userName'];
    echo $email =$_POST['userEmail'];
    echo $password =$_POST['pass'];
    echo $phoneNo =$_POST['phone'];
    echo $cntry =$_POST['country'];
    echo $gender =$_POST['gender'];
    echo $language =$_POST['lang'];
    echo $descript =$_POST['description'];
    echo $profile =$_POST['userProfile'];
}
?>

<?php
    include("header.php");
?>

<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Country</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><?php if(isset($name))echo $name;?></td>
                    <td><?php if(isset($email))echo $email;?></td>
                    <td><?php if(isset($password))echo $password;?></td>
                    <td><?php if(isset($phoneNo))echo $phoneNo;?></td>
                    <td><?php if(isset($cntry))echo $cntry;?></td>
                    <td><?php if(isset($gender))echo $gender;?></td>
                    <td><?php if(isset($language))echo $language;?></td>
                    <td><?php if(isset($descript))echo $descript;?></td>
                    <td><?php if(isset($profile))echo $profile;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>
