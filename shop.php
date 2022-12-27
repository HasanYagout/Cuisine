<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="../Cuisine/stylesheet.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .col-md-3{
            width:33%;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>


<?php
    
    include 'DB.php';
    if($_SESSION['type']==0)
    {
       echo"<div class='navbar' id='dropdownclick'>
       <ul class='first_ul'>
         
          <li class='navbar_links' ><a href='user_index.php'>home</a> </li>
          <li class='navbar_links' ><a href='#'>news</a> </li>
          <li class='navbar_links' ><a  href='#'>contact</a> </li>
          
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
         <li><h1 class='name'>";echo $_SESSION['firstname']; echo"</h1></li>

        </ul>
     </div>
     ";
    }
    else if($_SESSION['type']==1){
     echo"<div class='navbar' id='dropdownclick'>
       <ul class='first_ul'>
         
          <li class='navbar_links' ><a href='admin_index.php'>home</a> </li>
          <li class='navbar_links' ><a href='#'>news</a> </li>
          <li class='navbar_links' ><a  href='../Cuisine/contact_us.php'>contact</a> </li>
          
        </ul>
        <img id='navbar_logo'src='logo.png'>
        <ul class='second_ul'>
           <li class='navbar_links' ><a href='#'>about</a> </li>
           <li class='navbar_links'><a href='../Cuisine/manage.php'>manage</a></li>
           <li class='dropdownicon'><a href='javascript:void(0);' onclick='list_button()'>&#9776;</a></li>
           <li class='account_icon' ><a href='../Cuisine/login.php' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
            <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
          </svg></a></li>
          <li class='cart_icon'><a href='#'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
           <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
         </svg></a></li>
         <li class='name'><h1 class='name'>";echo $_SESSION['firstname']; echo"</h1></li>

        </ul>
        
     </div>
     
     ";
    }
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="shop.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="shop.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if(isset($_POST["order"])){
        $firstname=$_SESSION['firstname'];
        $lastname=$_SESSION['lastname'];
        $ordername=$_POST['name'];
        echo $ordername;
        $quantity=$_POST['quantity'];
        $price=$_POST['hidden_price'];
        // $totalPrice=$_POST[''];
        // $query="insert into $table values(null,'$firstname','$lastname','$email','$password',0)";
        // $result=mysqli_query($connect,$query);
        
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="shop.php"</script>';
                }
            }
        }
    }
?>



    <div class="container" style="width: 65%">
        <h2 class="shop_head">Shopping Cart</h2>
        <?php
        include 'DB.php';
            $query = "SELECT * FROM products ORDER BY id ASC ";
            $result = mysqli_query($connect,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                
                                <h5 class="text-info"><?php echo $row["name"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="number" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                                
                            </div>
                            
                        </form>
                    </div>
                    <?php
                }
                
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <input type="submit" value="order" name="order">
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            

            <?php
             
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>ريال <?php echo $value["product_price"]; ?></td>
                            <td>
                                ريال <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="shop.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">ريال <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        
                        
                         
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>



</body>
</html>