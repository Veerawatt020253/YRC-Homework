<?php

$sql = "SELECT COUNT(id) as id FROM homework";
$result = $connect->query($sql);

?>
<div class="small-box bg-warning">
    <div class="inner">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <h3><?php echo $row['id'] ?></h3>
            <p>Homework</p>
        <?php endwhile ?>
    </div>
    <div class="icon">
        <i class="fa-solid fa-book"></i>
    </div>
    <a href="./homework.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>