<?php
include 'DB.php';
$table = 'products';
if (isset($_POST['save'])) {
    
    
        $output_dir="upload/";
        $imagename=$_FILES['image']['name'][0];
    
        $extension=pathinfo($imagename,PATHINFO_EXTENSION);
        echo $imagename;
        $imageext=substr($imagename,strpos($imagename,'.'));
        $imageext=str_replace('.','',$imageext);
        $ret[$imagename]=$output_dir.$imagename;
        $name = $_POST['name'];
    $price = $_POST['price'];
    
    $query = "INSERT INTO $table (id,name,price,image) VALUES (null,'$name','$price','$imagename')";
        include 'DB.php';
        $table='products';
        
        $result=mysqli_query($connect,$query);
    
    if(!file_exists($output_dir))
    {
        @mkdir($output_dir,0777);
    }
    move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$imagename);
    
    
    }
    

isset($result) ? $message = '<p class="message">Save success</p>' : $message = '';
?>
<section>
    <div class="has-form">
        <h2>Data of Books: Insert</h2>
        <?php echo $message; ?>

        <form action="add.php"
           method="post"
           enctype="multipart/form-data">
           <input type="text" name="name">
           <input type="text" name="price">
           <input type="file" name="image[]">

           <input type="submit" name="save" value="Upload">
     	
     </form>

        
    </div>
</section>
