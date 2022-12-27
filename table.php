<?php session_start(); ?>
<?php 

include 'DB.php';
$table = 'users';
$query = "SELECT * FROM $table";
$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
$i = 1;
?>
<section>
    <h2>Data of Books: Select</h2>
    <table style="border-collapse:collapse">
        <thead>
            <tr>
                <th>No.</th>
                <th>id</th>
                <th>firstname</th>
                <th>Lastname</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($count != 0) {
                while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                    
                        <td><?php echo $row['password']; ?></td>
                        
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>">Modify</a> | 
                            <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                endwhile;
            } else {
                ?>
                <tr>
                    <td colspan="5" style="text-align: center; color: #f00">Data not found</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</section>
