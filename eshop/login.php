<?php 
require_once 'inc/header.php' ;
require_once 'app/classes/User.php';

//prvin ke proverime dali e korisnikot najaven 
//ako e najaven nema potreba dolnikot kod da ni se izvrusuva

if($user->is_logged()){
    header('Location: index.php');
    exit();
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];//zimame go username
    $passowrd = $_POST['password'];//zimame go password
    //$user= new User(); isto i za tuka ne ni treba bidejki go imame vo header
    $result = $user->login($username,$passowrd);//vo result gi zimame vrednosti 

    if(!$result){//ako ne sme uspeale da se najavime ke ni vrati false ke ispecati netocen username ili password
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Netocen username ili password";
        header('Location: login.php');
    exit();
    }
    $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "Dobredojdovte nazad ! $username";
    header('Location: index.php');
    exit();
    
}


?>


<div class="row justify-content-center">
    <div class="col-lg-5">
        <h3 class="text-center py-5">Login</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="register.php">Register</a>
    </div>



</div>



<?php require_once 'inc/footer.php' ?>