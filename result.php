<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial- scale=1.0">
    <title>درب</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">

</head>

<body>
    <nav>
        <div class="img">
            <a href="index.php"><img src="images/darbb.jpeg"></a>
        </div>
        <div class="nav-links" id="navLinks">

            <ul>
                <div class="dropdown">
                    <button class="dropbtn">المزيد</button>
                    <div class="dropdown-content">
                        <a href="#">من نحن؟</a>
                        <a href="add.php">اضافة مكتب</a>
                        <a href="#">الخرائط التوضيحية</a>
                    </div>
                </div>
                <li><a href="login.html">تسجيل دخول</a></li>
                <li><a href="index.php">الصفحة الرئيسية</a></li>
            </ul>

        </div>

        

    </nav>

    
    <section class="header">

        <div class="search">
            <form action="" method = "POST">
                <input type="text" placeholder="ادخل اسم او رقم المكتب" name="search">
                <button class="btn" name="submit" value ="search">ابحث</button>
        </div>
        </form>
<?php

if(isset($_POST['submit'])){

?>
  <div class="box1">
        <table border = '2'>
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
    $search = $_POST['search'];
    $con=mysqli_connect("localhost:3308","root","","officesinformations"); 
    if(!$con) { die(" Connection Error "); } 
    $sh = mysqli_query($con, "SELECT * FROM `posts` where name like '%$search%' or officenumber = '$search'");
    while ($row = mysqli_fetch_array($sh)) {
         ?>
    <tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["major"]; ?></td>
<td><?php echo $row["officenumber"]; ?></td>
<td><?php echo $row["rotornumber"]; ?></td>
<td><?php echo $row["floornumber"]; ?></td>

<td><a href ="edit.php"?id=<?php echo $row["id"]; ?>"> Edit </a></td>
<td><a href ="delete.php"?id=<?php echo $row["id"]; ?>"> Delete </a></td>
    </tr>
    <?php 
    }
}
    ?>
    </table>
      </div>


    </section>

</body>


</html>