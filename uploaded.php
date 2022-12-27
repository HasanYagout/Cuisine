<?php
  
    if(isset($_POST['save']))
    {

        
        $output_dir="upload/";
        $imagename=$_FILES['image']['name'][0];
        $imageext=substr($imagename,strpos($imagename,'.'));
        $imageext=str_replace('.','',$imageext);
        $ret[$imagename]=$output_dir.$imagename;
        
        include 'DB.php';
        $table='products';
        $query="insert into $table(image) values ('$imagename')";
        $result=mysqli_query($connect,$query);
    
    if(!file_exists($output_dir))
    {
        @mkdir($output_dir,0777);
    }
    move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$imagename);
    echo $imagename;
    
    }
   ?>
