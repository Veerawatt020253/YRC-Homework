<?php

$sql = "SELECT COUNT(id) as id FROM member";
$result = $connect->query($sql);

?>
<div class="small-box bg-info">
    <div class="inner">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <h3><?php echo $row['id'] ?></h3>
            <p>Member</p>
        <?php endwhile ?>
    </div>
    <div class="icon">
        <i class="fa-solid fa-user"></i>
    </div>
    <a href="./member.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>