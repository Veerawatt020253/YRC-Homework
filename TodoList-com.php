<?php

require_once "config/conn-mysqli.php";

$sql = "SELECT * FROM todo WHERE owner = $user_id";
$result = $connect->query($sql);

?>
<div class="mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">สิ่งที่ต้องทำ</th>
                <th scope="col">สถานะ</th>
                <th scope="col">เวลา</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <th scope="row"><?php echo $row['content']; ?></th>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</div>