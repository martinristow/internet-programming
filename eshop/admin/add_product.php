<?php
require '../app/config/config.php';
require '../app/classes/User.php';
require '../app/classes/Product.php';

$user = new User();
    
if($user->is_logged() && $user->is_admin() ) : //AKO OVOJ USLOV E ISPOLNET TOGAS TOA ZNACI DEKA KORISNIKOT
    //E NAJAVEN I ISTIOT E ADMIN  
    //tuka so get['id] go zimame bidejki taka ni e napisano vo a href u index delete_product.php?id=
    

    //PREZIMAME GI SEA INFORMACIITE
    if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $product = new Product();

        $name = $_POST['name'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $image = $_POST['photo_path'];

        $product->create($name , $price , $size ,$image);

        header('Location: index.php');
    }
    

endif;

?>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.css">


<form action=""method="post">


<input type="text" name="name" placeholder="Product Name">
<input type="text" name="price"step="0.01"placeholder="Product Price" >
<input type="text" name="size" placeholder="Product Size" >
<input type="hidden" name="photo_path" id="photoPathInput">
<div id="dropzone-upload" class="dropzone"></div>
<input type="submit" value="Add Product">
</form>

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