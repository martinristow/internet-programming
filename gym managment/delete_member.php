<?php



require_once 'config.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $member_id = $_POST['member_id'];

    $sql = "DELETE FROM members WHERE memer_id = ?";
    $run =$conn->prepare($sql);
    $run->bind_param("i",$member_id);
    $message = "";
    if($run->execute()){
        $message =  "Clenot e izbrisen";
    }
    else {
        $message = "Clenot ne e izbrisan";
    }

    $_SESSION['success_message'] == $message ;
    header('location: admin_dashboard.php');
    exit();
}