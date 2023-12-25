<?php

require_once "config/conn-mysqli.php";

$sql = "SELECT * FROM homework ORDER BY id DESC";
$result = $connect->query($sql);

?>
<div class="mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">วิชา</th>
                <th scope="col">ครู</th>
                <th scope="col">เรื่อง</th>
                <th scope="col">คะแนน *</th>
                <th scope="col">วันที่</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <th scope="row"><?php echo $row['subject']; ?></th>
                    <td><?php echo $row['teacher']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['point']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</div>

<!--  -->