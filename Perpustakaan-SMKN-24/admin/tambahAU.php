<?php
include ("../inc/koneksi.php")
?>
<?php
include ("../boostrap/link.php")
?>

<?php
$query = mysqli_query($koneksi, "SELECT max(iduser) as kodeTerbesar FROM user");
$data = mysqli_fetch_array($query);
$kodeUser = $data['kodeTerbesar'];

$urutan = (int) substr($kodeUser, 3, 3);

$urutan++;

$huruf = "AUP";
$kodeUser = $huruf . sprintf("%03s", $urutan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Admin & User</title>

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
                        <h2 class="form-title">Tambah Admin & User Perpus</h2>
                        <form method="POST" action="../inc/asadmin.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="iduser"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="iduser" required="required" id="iduser"
                                    value="<?php echo $kodeUser ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="password" id="password" placeholder="Your Password" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <select class="form-group form-select" name="gender" aria-label="Default select example">
                                <option selected>Pilih Jenis Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="phone" id="pass" placeholder="Phone" />
                            </div>
                            <select class="form-group form-select" name="status" aria-label="Default select example">
                                <option selected>Pilih Jenis Status</option>
                                <option value="active">Active</option>
                                <option value="deactivate">Deactivate</option>
                            </select>
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
                                <input type="submit" name="simpan" id="signup" class="form-submit" value="Kirim Data" />
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

        <!-- Sing in  Form
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>