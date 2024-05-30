<?php include("../inc/koneksi.php") ?>
<?php
include ("../boostrap/link.php")
?>
<link rel="stylesheet" href="../boostrap/nav.css">
<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=gagal");
}

?>

<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Perpusnas 24</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Data Buku
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambahB.php">Tambah Buku</a></li>
                        <li><a class="dropdown-item" href="#buku">Data Buku</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Data Admin & User
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambahAU.php">Tambah Anggota & User</a></li>
                        <li><a class="dropdown-item" href="#admin">Data Semua</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Laporan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="#lapadmin">Laporan Anggota & User</a></li>
                        <li><a class="dropdown-item" href="#lapbuku">Laporan Buku</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Backup Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">Tentang Perpustakaan 24</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
                <span class="navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-danger" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><strong>
                                <strong><?php echo $_SESSION['username']; ?></strong>
                            </strong>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <!-- <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span><?php echo $_SESSION['username']; ?> <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>
    
                            <li>
                                <a href="detail-anggota.php?hal=edit&kd=<?php echo $_SESSION['id']; ?>">
                                    <i class="fa fa-user fa-fw pull-right"></i>
                                    Profile
                                </a>
                            </li>
    
                            <li class="divider"></li>
    
                            <li>
                                <a href="../logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li> -->
                </span>
            </ul>
        </div>
    </div>
</nav>

<div class="center" id="home">
    <div class="property-card">
        <a href="#">
            <div class="property-image">
                <div class="property-image-title">
                    <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                </div>
            </div>
        </a>
        <div class="property-description">
            <h5> Total Admin & User </h5>
            <p><?php 
                    $query = "SELECT * FROM user ORDER BY iduser ASC";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    ?>
                <?php
                    }
                    ?>
                <span>
                    <h2><?php echo mysqli_num_rows($result) ?></h2>
                </span>
            </p>
        </div>
        <a href="#">
            <div class="property-social-icons">
                <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
            </div>
        </a>
    </div>
    <div class="property-card">
        <a href="#">
            <div class="property-image">
                <div class="property-image-title">
                    <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                </div>
            </div>
        </a>
        <div class="property-description">
            <h5> Total Buku </h5>
            <p><?php 
                    $query = "SELECT * FROM buku ORDER BY idbuku ASC";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    ?>
                <?php
                    }
                    ?>
                <span>
                    <h2><?php echo mysqli_num_rows($result) ?></h2>
                </span>
            </p>
        </div>
        <a href="#">
            <div class="property-social-icons">
                <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
            </div>
        </a>
    </div>
    <div class="property-card">
        <a href="#">
            <div class="property-image">
                <div class="property-image-title">
                    <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                </div>
            </div>
        </a>
        <div class="property-description">
            <h5> Total Contact </h5>
            <p><?php 
                    $query = "SELECT * FROM contact ORDER BY idcontact ASC";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    ?>
                <?php
                    }
                    ?>
                <span>
                    <h2><?php echo mysqli_num_rows($result) ?></h2>
                </span>
            </p>
        </div>
        <a href="#">
            <div class="property-social-icons">
                <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
            </div>
        </a>
    </div>
</div>

<div class="container" id="buku">
    <table class="table">
        <thead>
            <tr class="table table-dark">
                <th class="col-1">#</th>
                <th>Judul</th>
                <th>Tema</th>
                <th>Kutipan</th>
                <th>isi</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $batas = 5;
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1 ;
            $halaman_awal = ($halaman-1) ? ($halaman * $batas) - $batas : 0;
    
            $previous = $halaman - 1;
            $next = $halaman + 1;
    
            //untuk menyambungkan dengan file koneksi.php
            //jika kita klik cari, maka yang tampil query cari ini
            if (isset($_GET['kata_cari'])) {
                //menampung variabel kata_cari dari form pencarian
                $kata_cari = $_GET['kata_cari'];
                // mencari data dengan query
                $query = "SELECT * FROM buku WHERE judul like '%" . $kata_cari . "%' OR kutipan like '%" . $kata_cari . "%'OR isi like '%" . $kata_cari . "%' ORDER BY iduser ASC";
            } else {
                //jika tidak ada pencarian, default yang dijalankan query ini
                $query = "SELECT * FROM buku ORDER BY idbuku ASC";
                $result = mysqli_query($koneksi, $query);
            }
            $jumlah_data = mysqli_num_rows($result);
            $total_halaman = ceil($jumlah_data / $batas);
            $data_buku = mysqli_query($koneksi,"SELECT * FROM buku limit $halaman_awal, $batas");
    
            if (!$result) {
                die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
            }
    
            $nomor = $halaman_awal + 1;
            //kalau ini melakukan foreach atau perulangan
            while ($row = mysqli_fetch_assoc($data_buku)) {
            ?>
            <tr class="table-secondary">
                <td>
                    <?php echo $nomor++ ?>
                </td>
                <td>
                    <?php echo $row['judul']; ?>
                </td>
                <td>
                    <?php echo $row['tema']; ?>
                </td>
                <td>
                    <?php echo $row['kutipan']; ?>
                </td>
                <td>
                    <?php echo $row['isi']; ?>
                </td>
                <td>
                    <a href="updateB.php?idbuku=<?php echo $row['idbuku'] ?>" class="btn btn-danger">Edit</a>
                    <a href="../inc/delete1.php?idbuku=<?php echo $row['idbuku']; ?>" class="btn btn-warning"
                        onclick="return confirm('anda yakin ingin hapus?');">Delete</a>
                </td>
            </tr>
            <div class="row" id="load_data">
                <?php
            }
            ?>

            </div>

            <!-- <tr>
           <td colspan="3" rowspan="1" headers="">No Data Found!</td>
       </tr> -->

        </tbody>
    </table>
</div>
<p>Total:
    <?php echo mysqli_num_rows($result) ?>
</p>
<div id="lapbuku">
    <button class="p-2 btn btn-info" style="margin-left:5%" onclick="print_b()">Print
        Buku</button>
    <script>
    function print_b() {
        window.open("print/bprint.php", "_blank");
    }
    </script>
</div>
<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
        </li>
        <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?>
        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
        <?php
				}
				?>
        <li class="page-item">
            <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
    </ul>
</nav>
<div class="container" id="admin">

    <table class="table">
        <thead>
            <tr class="table table-dark">
                <th class="col-1">#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Level</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $batas = 5;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1 ;
        $halaman_awal = ($halaman-1) ? ($halaman * $batas) - $batas : 0;

        $previous = $halaman - 1;
        $next = $halaman + 1;

        //untuk menyambungkan dengan file koneksi.php
        //jika kita klik cari, maka yang tampil query cari ini
        if (isset($_GET['kata_cari'])) {
            //menampung variabel kata_cari dari form pencarian
            $kata_cari = $_GET['kata_cari'];
            // mencari data dengan query
            $query = "SELECT * FROM buku WHERE judul like '%" . $kata_cari . "%' OR kutipan like '%" . $kata_cari . "%'OR isi like '%" . $kata_cari . "%' ORDER BY kodebuku ASC";
        } else {
            //jika tidak ada pencarian, default yang dijalankan query ini
            $query = "SELECT * FROM user ORDER BY iduser ASC";
            $result = mysqli_query($koneksi, $query);
        }
        $jumlah_data = mysqli_num_rows($result);
        $total_halaman = ceil($jumlah_data / $batas);
        $data_buku = mysqli_query($koneksi,"SELECT * FROM user limit $halaman_awal, $batas");

        if (!$result) {
            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

        $nomor = $halaman_awal + 1;
        //kalau ini melakukan foreach atau perulangan
        while ($row = mysqli_fetch_assoc($data_buku)) {
        ?>
            <tr class="table-secondary">
                <td>
                    <?php echo $nomor++ ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['username']; ?>
                </td>
                <td>
                    <?php echo $row['gender']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['phone']; ?>
                </td>
                <td>
                    <?php echo $row['status']; ?>
                </td>
                <td>
                    <?php echo $row['level']; ?>
                </td>
                <td>
                    <a href="updateAU.php?iduser=<?php echo $row['iduser'] ?>" class="btn btn-danger">Edit</a>
                    <a href="../inc/delete.php?iduser=<?php echo $row['iduser']; ?>" class="btn btn-warning"
                        onclick="return confirm('anda yakin ingin hapus?');">Delete</a>
                </td>
            </tr>
            <div class="row" id="load_data">
                <?php
        }
        ?>

            </div>
            <!-- <tr>
                <td colspan="3" rowspan="1" headers="">No Data Found!</td>
            </tr> -->

        </tbody>
    </table>
</div>
<p>Total:
    <?php echo mysqli_num_rows($result) ?>
</p>

<div id="lapadmin">
    <button class="p-2 btn btn-info" style="margin-left:5%" onclick="print_au()">Print
        Admin & User</button>
    <script>
    function print_au() {
        window.open("print/auprint.php", "_blank");
    }
    </script>
</div>
<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
        </li>
        <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?>
        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
        <?php
				}
				?>
        <li class="page-item">
            <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
    </ul>
</nav>
</div>
<?php include ("about.php") ?>
<?php
include ("../inc/footer.php")
?>