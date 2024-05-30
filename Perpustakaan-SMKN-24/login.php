<?php include("inc/koneksi.php") ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login 24</title>
    <link rel="stylesheet" type="text/css" href="boostrap/log.css" />
    <link rel="stylesheet" type="text/css" href="log2.css" />
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <div class="container">
        <section id="content">
            <form action="check-login.php" method="post">
                <h1>Login - 24</h1>
                <div>
                    <input type="text" name="username" placeholder="Username" required="" id="username" />
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" required="" id="password" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                    <a href="index.php">Back Home?..</a>
                    <a href="#">Register</a>
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div>


</body>

</html>