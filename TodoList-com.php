<?php

require_once "config/conn-mysqli.php";

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

$sql = "SELECT * FROM todo WHERE owner = $user_id";
$result = $connect->query($sql);

$owner = $_SESSION['id'];

?>
<div class="mt-3">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">สิ่งที่ต้องทำ</th>
                <th scope="col">สถานะ</th>
                <th scope="col">วันที่</th>
                <th scope="col">option</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <?php



                ?>
                <tr>
                    <th scope="row"><?php echo $row['content']; ?></th>
                    <td class="text-center">
                        
                            <a class="btn <?php echo ($row['status'] == "true" ? "btn-outline-success" : "btn-outline-danger") ?> btn-sm m-auto" href="./check-todo.php?id=<?php echo $row['id'] ?>&owner=<?php echo $owner ;?>&page=<?php echo "index.php" ?>" role="button"><?php echo ($row['status'] == "true" ? "ทำเครื่องหมายว่าทำแล้ว" : "ทำเครื่องหมายว่ายังไม่ได้ทำ") ?></a>
                        
                    </td>
                    <td><?php echo $row['time']; ?></td>
                    <td><a class="btn btn-outline-danger btn-sm" href="del-todo.php?id=<?php echo $row['id'] ?>&owner=<?php echo $_SESSION['id']; ?>" role="button">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>