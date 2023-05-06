<table>
    <tr>
        <td>الاسم</td>
        <td>الدور</td>
        <td>الدوار</td>
        <td>رقم المكتب</td>
        <td>القسم</td>
        <td>تعديل</td>
        <td>حذف</td>

    </tr>

    <?php
    include "connection.php";
    $sh = mysqli_query($con, "SELECT * FROM `posts`");
    while ($row = mysqli_fetch_array($sh)) { ?>
    <tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["major"]; ?></td>
<td><?php echo $row["officenumber"]; ?></td>
<td><?php echo $row["rotornumber"]; ?></td>
<td><?php echo $row["floornumber"]; ?></td>

<td><a href ="edit.php"?id=<?php echo $row["id"]; ?>"> Edit </a></td>
<td><a href ="delete.php"?id=<?php echo $row["id"]; ?>"> delete </a></td>
    </tr>
    <?php }
    ?>
    