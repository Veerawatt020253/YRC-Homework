<?php

$sql = "SELECT COUNT(id) as id FROM news";
$result = $connect->query($sql);

?>
<div class="small-box bg-success">
    <div class="inner">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <h3><?php echo $row['id'] ?></h3>
            <p>NEWS</p>
        <?php endwhile ?>
    </div>
    <div class="icon">
        <i class="fa-solid fa-newspaper"></i>
    </div>
    <a href="./news.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>