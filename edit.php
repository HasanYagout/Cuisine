<?php
include 'DB.php';
$id = $_GET['id'];
$table = 'products';
if(isset($_POST['update'])) {
    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    

    $query_update = "UPDATE $table SET name='$name', price='$price' WHERE id=$id";
    $result_update = mysqli_query($connect, $query_update);
    
    $query = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($connect, $query);
    
    echo '<meta http-equiv="refresh" content="3;url=manage.php">';
} else {
    $query = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($connect, $query);
}
$row = mysqli_fetch_assoc($result);
isset($result_update) ? $message = '<p class="message">Update success</p>' : $message = '';
?>
<section>
    <div class="has-form">
        <h2>Data of Books: Update</h2>
        <?php echo $message; ?>
        <form method="post" action="edit.php?id=<?php echo $id; ?>">
            <label>Name
                <input type="text" name="productName" value="<?php echo $row['name']; ?>" required>
            </label>
            <br>
            <label>Price
                <input type="text" name="productPrice" value="<?php echo $row['price']; ?>" required>
            </label>
            <br>
            <br>
            <input type="submit" name="update" value="Update" class="link">
        </form>
    </div>
</section>
