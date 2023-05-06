<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = " Not Found";
} ?>

<?php if (isset($_POST["edit"])) {
    $con = mysqli_connect("localhost:3308", "root", "", "officesinformations");
    if (!$con) {
        die(" Connection Error ");
    }
    $name = $_POST["name"];
    $fnumber = $_POST["floornumber"];
    $ronumber = $_POST["rotornumber"];
    $onumber = $_POST["officenumber"];
    $major = $_POST["major"];
    $in = mysqli_query(
        $con,
        "update `posts` set name='$name', floornumber='$fnumber', rotornumber='$ronumber', officenumber='$onumber', major='$major' where id=$id"
    );
    if ($in) {
        header("location:index.php");
    } else {
        die("error" . mysqli_error($con));
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial- scale=1.0">
    <title>درب</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
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


        <div class="box11">
            <div class="result">
                <?php
                $con = mysqli_connect("localhost:3308", "root", "", "officesinformations");
                if (!$con) {
                    die(" Connection Error ");
                }
                $sh = mysqli_query($con, "SELECT * FROM `posts` where id = $id");
                while ($row = mysqli_fetch_array($sh)) { ?>

                    <form method="post" action="">

                        <div class="p5">
                            <p5>الاسم</p5><br>
                            <input type='text' value="<?php echo $row[
                                "name"
                            ]; ?>" name='name'>
                        </div>

                        <div class="p1">
                            <p1>الدور</p1><br>
                            <input type='text' value="<?php echo $row[
                                "floornumber"
                            ]; ?>" name='floornumber'>
                        </div>


                        <div class="p2">
                            <p2>الدوار</p2><br>
                            <input type='text' id='tnumber' value="<?php echo $row[
                                "rotornumber"
                            ]; ?>" name='rotornumber'>
                        </div>


                        <div class="p3">
                            <p3>رقم المكتب</p3><br>
                            <input type='text' value="<?php echo $row[
                                "officenumber"
                            ]; ?>" name='officenumber'>
                        </div>


                        <div class="p4">
                            <p4>القسم</p4><br>
                            <input type='text' value="<?php echo $row[
                                "major"
                            ]; ?>" name='major'>
                        </div>

                        <div class="editbutn">
                            <input type='submit' name='edit' value='تعديل'>
                        </div>

                    </form>
                <?php }
                ?>

            </div>
        </div>

    </section>
</body>

</html>