<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Cuisine/stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <style>
         form#manage_form {
            display:inline-block;
      width: 300px;
      margin: 0px auto;
  }
        </style>
        
    
    </head>

    <body>
    
<?php
if($_SESSION['type']==0)
{
 ?>
   <div class='navbar' id='dropdownclick'>
   <ul class='first_ul'>
     
      <li class='navbar_links' ><a href='user_index.php'>home</a> </li>
      <li class='navbar_links' ><a href='#'>news</a> </li>
      <li class='navbar_links' ><a  href='../Cuisine/contact_us.php'>contact</a> </li>
      
    </ul>
    <img id='navbar_logo'src='logo.png'>
    <ul class='second_ul'>
       <li class='navbar_links' ><a href='#'>about</a> </li>
       <li class='navbar_links'><a href='../Cuisine/shop.php'>shop</a></li>
       <li class='dropdownicon'><a href='javascript:void(0);' onclick='list_button()'>&#9776;</a></li>
       <li class='account_icon' ><a href='../Cuisine/login.php' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
        <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
      </svg></a></li>
      <li class='cart_icon'><a href='#'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
       <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
     </svg></a></li>
    </ul>
 </div>
 
 <?php
}



else if($_SESSION['type']==1){
  
 ?>
 <div class='navbar' id='dropdownclick'>
   <ul class='first_ul'>
     
      <li class='navbar_links' ><a href='admin_index.php'>home</a> </li>
      <li class='navbar_links' ><a href='#'>news</a> </li>
      <li class='navbar_links' ><a  href='#'>contact</a> </li>
      <style>
       .upload img {
   border-radius: 50%;
   border: 8px solid #DCDCDC;
   height:60px;
   width:60px;
}
.upload .round {
   position: absolute;
   bottom: 0;
   right: 0;
   background: #00B4FF;
   width: 32px;
   height: 32px;
   line-height: 33px;
   text-align: center;
   border-radius: 50%;
   overflow: hidden;
} 
.upload .round input[type = "file"] {
   position: absolute;
   transform: scale(2);
   opacity: 0;
} 

li#profile_picture {
   margin: 20px;
}
      </style>
    </ul>
    <img id='navbar_logo'src='logo.png'>
    <ul class='second_ul'>
       <li class='navbar_links' ><a href='#'>about</a> </li>
       <li class='navbar_links'><a href='../Cuisine/manage.php'>manage</a></li>
       <li class='dropdownicon'><a href='javascript:void(0);' onclick='list_button()'>&#9776;</a></li>
       <li class='account_icon' ><a href='../Cuisine/login.php' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
        <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
      </svg></a></li>
      
     <li><h1 class='name'><?php echo $_SESSION['firstname']; ?></h1></li>

     <li id="profile_picture"><form class='form' id = 'form' action='' enctype='multipart/form-data' method='post'>
<div class='upload'>
 <?php
      
require 'DB.php';
 $sessionId = $_SESSION["id"];
 $user = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM users WHERE id = $sessionId"));
 $id = $user["id"];
 $name = $user["firstname"];
 $image = $user["image"];
 ?>
 <img src="upload/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>">
 <div class="round">
   
   <input type="hidden" name="name" value="<?php echo $name; ?>">
   <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
   <i class = "fa fa-camera" style = "color: #fff;"></i>
 </div>
</div>
</form></li>
   <?php  

}
?>







<script type="text/javascript">
     document.getElementById("image").onchange = function(){
         document.getElementById("form").submit();
     };
   </script>
<?php
   if(isset($_FILES["image"]["name"])){
     $id = $_SESSION["id"];
     $name = $_POST["name"];
     $output_dir="upload/";
     $imageName = $_FILES["image"]["name"];
     $imageSize = $_FILES["image"]["size"];
     $tmpName = $_FILES["image"]["tmp_name"];
     // Image validation
     $validImageExtension = ['jpg', 'jpeg', 'png'];
     $imageExtension = explode('.', $imageName);
     $imageExtension = strtolower(end($imageExtension));
    
       $newImageName = $name . "-" . date("Y.m.d"); // Generate new image name
       
       $query = "UPDATE users SET image = '$newImageName' WHERE id = $id";
       mysqli_query($connect, $query);
       move_uploaded_file($tmpName, "upload/" . $newImageName);
       echo
       "
       <script>
       document.location.href = '../Cuisine/manage.php';
       </script>
       ";
     }
   
   ?>
   </ul>
 </div>
 

    
    
          <?php
include 'DB.php';
$table = 'products';
$valuetosearch="";
$search_query="SELECT * FROM `products` WHERE name like '%$valuetosearch%'";
$query="select * from $table order by id asc";
$search_result = mysqli_query($connect, $search_query);
$result=mysqli_query($connect,$query);
$count = mysqli_num_rows($result);
$i = 1;
$d=true;

if(isset($_POST['search']))
{
   ?>

    <form method="post" id="manage_form">
    <label>search
        <input type="text" value="<?php echo $_POST['valuetosearch'] ?>" name="valuetosearch">
    </label>
    
    <input type="submit" id="toggleButton" name="search" value="Filter">
    </form>

<?php
    $d=false;
    if(!$d)
    {
        $valuetosearch=$_POST['valuetosearch'];
        $valuetosearch=preg_replace("#[^0-9a-z]#i","",$valuetosearch);
        echo"<table class='products'>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>";
            
            if ($count != 0) {
                while ($row2 = mysqli_fetch_assoc($search_result)):
                    
                    echo"<tr>
                         <td>"; echo $i; echo"</td>";
                        echo "<td>"; echo $row2['id'];echo "</td>";
                        echo"<td>"; echo $row2['name']; echo"</td>";
                        echo"<td>"; echo $row2['price']; echo"</td>";
                        echo"<td>";
                            
                            echo "<a href='edit.php?id="; echo $row2['id']; echo">Modify</a> |"; 
                            echo"<a href='deleteform.php?id="; echo $row2['id'];echo">Delete</a>";
                       echo "</td>
                    </tr>";
                    
                    $i++;
                endwhile;
            } else {
                
                echo"<tr>
                    <td colspan='5' style='text-align: center; color: #f00'>Data not found</td>
                </tr>";
                
            }
            
        echo"</tbody>
        </table>";
    
    }
   }
   else{
    echo"<section>
 <h2>Data of products: Select</h2>
 
<div class='f'>
 <form method='post' id='manage_form'>
         <label>search
             <input type='text' name='valuetosearch'>
         </label>
         
         <input type='submit' id='toggleButton'  name='search' value='Filter'>
     </form>
     <a href='add.php' id='add_link'>Add</a>
     </div>
 <table class='products' id='mytable'>
     <thead>
         <tr>
             <th>No.</th>
             <th>ID</th>
             <th>Name</th>
             <th>Price</th>
             <th>image</th>
             <th>Action</th>
         </tr>
     </thead>
     <tbody>";
         
         if ($count != 0) {
             while ($row = mysqli_fetch_assoc($result)):
                 
                echo"<tr>
                <td>"; echo $i; echo"</td>";
               echo "<td>"; echo $row['id'];echo "</td>";
               echo"<td>"; echo $row['name']; echo"</td>";
               echo"<td>"; echo $row['price']; echo"</td>";
               echo"<td align ='center'><img src='upload/".$row['image']."' width='100px'
                height='100px'/></td>";
               echo"<td>";
               echo"<a href='edit.php?id=";echo $row['id'];echo"'>Modify</a>|";
                   echo"<a href='deleteform.php'>Delete</a>";
              echo "</td>
           </tr>";
                 $i++;
             endwhile;
         } else {
             
             echo"<tr>
                 <td colspan='5' style='text-align: center; color: #f00'>Data not found</td>
             </tr>";
             
         }
         
     echo"</tbody>
 </table>
</section>";
    

   }

?>

         

    </body>

</html>