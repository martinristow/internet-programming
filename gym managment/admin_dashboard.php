<?php


require_once 'config.php';
//echo "Vlegovte <br>";
//var_dump($_SESSION);

if(!isset($_SESSION['admin_id']))
{
    header('location: index.php');
    exit();
}
else {
    echo "Najaven";// so ovaj kod do tuka nasiot LOGIN SYSTEM E ZAVRSEN
    //TUKA SEGA PAUZA PRODOLZUVAME SO REALNITE ZADACI PO INTERNET PROGRAMIRANJE
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.css">

</head>

<body>
    <?php 
    if(isset($_SESSION['success_message'])) : ?>
    


    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?php
   echo $_SESSION['success_message'];
   
   unset($_SESSION['success_message']);
   ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container">
<div class="row">
    <div class="col-md-12">

<h2>Members List</h2>

<a href="export.php?what=members" class="btn btn-success btn-sm">Export</a>

<table class="table table-striped">
<thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Trainer</th>
        <th>Photo</th>
        <th>Training Plan</th>
        <th>Access Card</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>

<?php

$sql = "SELECT members.* ,
training_plans.name AS training_plan_name,
trainers.first_name AS trainer_first_name,
trainers.last_name AS trainer_last_name
FROM `members`
LEFT JOIN `training_plans` ON members.training_plan_id = training_plans.plan_id
LEFT JOIN `trainers` ON members.trainer_id = trainers.trainer_id;";
$run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);
$select_members = $results;
//var_dump($results);
foreach($results as $result) : ?>
<tr>
    <td><?php echo $result['first_name']; ?></td>
    <td><?php echo $result['last_name']; ?></td>
    <td><?php echo $result['email']; ?></td>
    <td><?php echo $result['phone_number']; ?></td>
    <td><?php
    if($result['trainer_first_name'])
    {
        echo $result['trainer_first_name'] . " " . $result['trainer_last_name'];
    }
    else {
        echo "Nema trener";
    }
    
    ?></td>

    <td><img style="width : 70px; " src="<?php echo $result['photo_path']; ?>" alt=""></td>
    
    <td><?php 
    if($result['training_plan_name'])
    {
        echo $result['training_plan_name'];
    }
    else{
        echo "Nema plan";
    }
    /*
    $plan_id=  $result['training_plan_id']; 
    
    $sql = "SELECT * FROM training_plans WHERE plan_id = ?";
    $run =$conn->prepare($sql);
    $run ->bind_param('i',$plan_id);
    $run->execute();

    $results = $run->get_result();
    $results=$results->fetch_assoc();

    if($results)
    {
        echo $results['name'];
    }
    else {
        echo "Nema Plan";
    }
   // var_dump($results);
    */
    
    ?></td>
    
    
    
    <td><a target="_blank" href="<?php echo $result['access_card_pdf_path']; ?>">Access Card</a></td>
    <td><?php 
    
    $created_at = strtotime($result['created_at']); 
    $new_date = date("F, jS Y", $created_at);
    echo $new_date;
    ?></td>


    <td>
        <form action="delete_member.php" method="POST">
        <input type="hidden" name="member_id" value="<?php echo $result['memer_id']; ?>">
        
         
    <button>DELETE</button>
    </form>


    </td>

</tr>

<?php
 endforeach;

?>

</tbody>


</table>


    </div>

    <div class="col-md-12">
    <h2>Trainers List</h2>
    <a href="export.php?what=trainers" class="btn btn-success btn-sm">Export</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM trainers";
        $run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);
$select_trainers = $results;
//var_dump($results);
foreach($results as $result) : ?>
        

<tr>
<td><?php echo $result['first_name']; ?></td>
<td><?php echo $result['last_name']; ?></td>
<td><?php echo $result['email']; ?></td>
<td><?php echo $result['phone_number']; ?></td>
<td><?php echo date("F jS, Y",strtotime($result['created_at'])); ?></td>

</tr>
<?php endforeach; ?>

        </tbody>
    </table>
    </div>


</div>


        <div class="row mb-5">
            <div class="col-md-6">
                <h2>Register Member</h2>
                <form action="register_member.php" method="post" enctype="multipart/form-data">
                    First Name: <input class="form-control" type="text" name="first_name"><br>
                    Last Name: <input class="form-control" type="text" name="last_name"><br>
                    Email: <input class="form-control" type="email" name="email"><br>
                    Phone Number: <input class="form-control" type="text" name="phone_number"><br>
                    Training Plan:
                    <select class="form-control" name="training_plan_id" >
                   <option value="" disabled selected>Training Plan</option>
                  <?php
                  $sql = "SELECT * FROM training_plans";
                  $run = $conn->query($sql);
                  while ($result = $run->fetch_assoc()) {
                    echo "<option value='" . $result['plan_id'] . "'>" . $result['name'] . "</option>";
                }////vcituvame gi direktno od bazata samite planovi
                    

                   
                    ?>


                    </select><br>


                    <input type="hidden" name="photo_path" id="photoPathInput">
                    <div class="dropzone" id="dropzone-upload"></div>

                    <input class="btn btn-primary mt-3" type="submit" value="Register Member">
                </form>
            </div>

                <div class="col-md-6">
                    <h2>Register Trainer</h2>
                    <form action="register_trainer.php" method="post">
                    First Name: <input class="form-control" type="text" name="first_name"><br>
                    Last Name: <input class="form-control" type="text" name="last_name"><br>
                    Email: <input class="form-control" type="email" name="email"><br>
                    Phone Number: <input class="form-control" type="text" name="phone_number"><br>
                    <input class="btn btn-primary"type="submit" value="Register Trainer">
                    </form>
                </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Assign Trainer to Member</h2>
                <form action="assign_trainer.php" method="post">
                <label for="">Select Member</label>
                <select name="member" class="form-select">
                    <?php 
                foreach($select_members as $member) : ?>
                <option value="<?php echo $member['memer_id']; ?>">
                        <?php echo $member['first_name'] . " ". $member['last_name']; ?>
            </option>
               <?php  endforeach;
                    ?>
                </select>

                <label for="">Select Trainer</label>
                <select name="trainer" class="form-select">
                <?php 
                foreach($select_trainers as $trainer) : ?>
                <option value="<?php echo $trainer['trainer_id']; ?>">
                        <?php echo $trainer['first_name'] . " ". $trainer['last_name']; ?>
            </option>
               <?php  endforeach;
                    ?>
                </select>

                <button type="submit" class="btn btn-primary">Assign Trainer</button>

                </form>
            </div>
        </div>
    </div>
<?php 
$conn->close();//ja zatvarame konekcijata sekogas na krajot
 ?>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


    <script>
      Dropzone.options.dropzoneUpload = {
        url: "upload_photo.php",
        paramName: "photo",
        maxFilesize: 20, //MB
        acceptedFiles: "image/*",
        init: function(){
            this.on("success",function (file,response){
                const jsonResponse = JSON.parse(response);
                if(jsonResponse.success){
                    document.getElementById('photoPathInput').value = jsonResponse.photo_path;
                }else {
                    console.error(jsonResponse.error);
                }
            });
        }
      };  
    </script>


<form action="logout.php" method="post">
    <input type="submit"value="ODJAVI SE">
</form>
</body>

</html>