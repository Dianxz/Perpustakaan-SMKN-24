<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include ("boostrap/link.php")
    ?>
    <?php
    include ("boostrap/time.php")
    ?>

    <title>Perpus SMKN 24 Jakarta</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpustakaan 24</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pengunjung">Pengunjung</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Etc
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://wa.me/6289516317252?text=Pengaduan tentang apa?.">Message</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="messages-menu">
                            <table width="490">
                                <tr>
                                    <td width="1000">
                                        <div class="Tanggal">
                                            <h5>
                                                <script language="JavaScript">
                                                document.write(tanggallengkap);
                                                </script>
                                        </div>
                                        </h5>
                                    </td>
                                    <td align="left" width="50"> - </td>
                                    <td align="left" width="620">
                                        <h5>
                                            <div id="output" class="jam"></div>
                                        </h5>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="#" data-toggle="modal" data-target="#contact">
                                <i class="fa fa-envelope"></i>
                                <!--<span class="label label-success">4</span>-->
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="login.html" data-placement="bottom" data-toggle="tooltip" title="Login">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>