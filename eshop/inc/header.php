<?php require_once "app/config/config.php";
    require_once "app/classes/User.php";
    $user = new User();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Martin Shop</title>
</head>
<body>
<div class="container">
    <?php //OD TUKA POCNUVA MENITO ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    
    <a class="navbar-brand" href="index.php">Martin Shop</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <?php if(!$user->is_logged()) : ?>
            <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
    
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>


        <?php else : //tuka ako sme najaven ke bide neso drugo , a toa e My Orders i Logout 
            //ovde dolu svg xmlns e kod za ikonkata da se dodade , moze a i ne mora ama u vaj slucaj gu stavimo  ?>
            <li class="nav-item">
            <a class="nav-link" href="cart.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
             viewBox="0 0 16 16"> <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 
             8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5
              12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
            </svg>Cart
            </a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="orders.php">My Orders</a>
        </li>
    

        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>

        <?php endif;//tuka go zavrsuvame phpto ?>      
        </ul>
</div>
</nav>
<?php //A TUKA ZAVRSUVA MENITO ?>





    <?php if(isset($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['message']['type']; ?> alert-dismissible fade show" role="alert">
    <?php 
    echo $_SESSION['message']['text'];
    unset ($_SESSION['message']);
    ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    <?php endif; ?>