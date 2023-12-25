<?php

$sql = "SELECT COUNT(id) as id FROM viewer";
$result = $connect->query($sql);

?>
<div class="small-box bg-danger">
    <div class="inner">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <h3><?php echo $row['id'] ?></h3>
            <p>Visitors</p>
        <?php endwhile ?>
    </div>
    <div class="icon">
        <i class="fa-solid fa-eye"></i>
    </div>
    <a href="./visitor.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>