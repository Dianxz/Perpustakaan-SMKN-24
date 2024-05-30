<?php
include ("../inc/koneksi.php")
?>
<?php
include ("../boostrap/link.php")
?>
<?php
$id = $_GET["iduser"];
if (isset($_POST["update"])) {
	
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    $level = $_POST['level'];

  	$sql = "UPDATE user SET `username`='$username',`name`='$name',`password`='$password',`gender`='$gender',`email`='$email',`phone`='$phone',`status`='$status',`level`='$level' WHERE iduser ='$id'";

  	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		echo "<script>
			alert('Data Berhasil Disimpan!!!');
			document.location.href = '../admin/index.php';
			</script>";
	} else {
		echo "Failed: " . mysqli_error($koneksi);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Admin & User</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../boostrap/tau.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Update Admin & User Perpus</h2>
                        <form method="POST" action="" class="register-form" id="register-form">
                            <?php
                            $sql = "SELECT * FROM user WHERE iduser = '$id' LIMIT  1";
                            $result = mysqli_query($koneksi, $sql);
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <div class="form-group">
                                <label for="iduser"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="iduser" required="required" id="iduser" value="<?php echo $row['iduser']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="password" id="password" value="<?php echo $row['password']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="Level sebelumnya *<?php echo $row['gender']; ?>*" disabled/>
                            </div>
                            <select class="form-group form-select" name="gender" aria-label="Default select example">
                                <option  selected>Pilih Jenis Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="phone" id="pass" value="<?php echo $row['phone']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="Status sebelumnya *<?php echo $row['status']; ?>*" disabled/>
                            </div>
                            <select class="form-group form-select" name="status" aria-label="Default select example">
                                <option selected>Pilih Jenis Status</option>
                                <option value="active">Active</option>
                                <option value="deactivate">Deactivate</option>
                            </select>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="Level sebelumnya *<?php echo $row['level']; ?>*" disabled/>
                            </div>
                            <select class="form-group form-select" name="level" aria-label="Default select example">
                                <option selected>Pilih Jenis Level</option>
                                <option value="admin">Admin</option>
                                <option value="user">user</option>
                            </select>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="update" id="signup" class="form-submit" value="Kirim Data" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Kembali Ke-Index</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>