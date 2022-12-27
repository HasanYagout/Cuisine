<?php
include 'DB.php';
$id = $_GET['id'];
$table = 'products';

if(isset($_POST['delete'])) {
    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    $query = "DELETE FROM $table WHERE id=$id";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    
    echo '<meta http-equiv="refresh" content="3;url=manage.php">';
} else {
    $query = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($connect, $query);
}
$row = mysqli_fetch_assoc($result);
isset($result_update) ? $message = '<p class="message">Delete success</p>' : $message = '';
?>
<section>
    <div class="has-form">
        <h2>Data of Books: DELETE</h2>
        <?php echo $message; ?>
        <form method="post" action="deleteform.php?id=<?php echo $id; ?>">
            <label>Name
                <input type="text" name="productName" value="<?php echo $row['name']; ?>" required>
            </label>
            <br>
            <label>Price
                <input type="text" name="productPrice" value="<?php echo $row['price']; ?>" required>
            </label>
            <br>
            <br>
            <input type="submit" name="delete" value="delete" class="link">
        </form>
    </div>
</section>