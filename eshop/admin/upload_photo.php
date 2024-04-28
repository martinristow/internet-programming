<?php

$photo = $_FILES['photo'];

$photo_name = basename($photo['name']);
//so basename ni vrakja samo imeto na slikata 
//ako go nemavme toa moze da ni ja ispese celata lokacija primer 
//u koj folder e i slicno 

$photo_path = '../public/product_images/'. $photo_name;//tuka e public bidejki slikite ke se smestuvat 
//u foldero public pa foldero product_images

$allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
if(in_array($ext, $allowed_ext) && $photo['size'] < 2000000) {
    move_uploaded_file($photo['tmp_name'],$photo_path);
    echo json_encode(['success' => true, 'photo_path'=> $photo_path]);
}else {
    echo json_encode(['success' => false, 'error' => 'Invalid file']);
}

?>