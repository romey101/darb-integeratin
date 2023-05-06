<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial- scale=1.0">
    <title>درب</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
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
        <div class="box">
            <form method="post" action="">
            <h1>إضافة مكتب</h1>
            <div class="add">
                <input type="text" placeholder="الاسم"  name="Oname">
                <input type="text" placeholder="القسم" name = "Omajor">
                <input type="text" placeholder="رقم المكتب" name="Onumber">
                <input type="text" placeholder="الدوار"  name="A">
                <input type="text" placeholder="الدور"  name="Ofloor">
                <div class="oadd">
                    <input  type="submit" name="add" value ="إضافة">
                    </div>
                </div>
</div>
                
                </form>

             <!-- for testing -->
             <!--   <script src="add.js"></script> --> 
    </section>

</body>

<?php if (isset($_POST["add"])) {
    $con = mysqli_connect("localhost:3308", "root", "", "officesinformations");
    if (!$con) {
        die(" Connection Error ");
    }
    $name = $_POST["Oname"];
    $floor = $_POST["Ofloor"];
    $A = $_POST["A"];
    $number = $_POST["Onumber"];
    $major = $_POST["Omajor"];

    $in = mysqli_query(
        $con,
        "INSERT INTO `posts` (name,major,officenumber,rotornumber,floornumber) VALUES ('$name','$major','$number','$A','$floor')"
    );

    if ($in) {
        echo " تم إضافة المكتب بنجاح";
    } else {
        die("error" . mysqli_error($con));
    }
    mysqli_close($con);
} ?>


</html>