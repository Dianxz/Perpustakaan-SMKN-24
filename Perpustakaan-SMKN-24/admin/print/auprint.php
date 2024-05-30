<?php
include ("../../inc/koneksi.php")
?>
<html>
<head>
	<title>Print Admin & User</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<table class="table mt-2" id="admin">
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
    <script>
		window.load = print_au();
		function print_au(){
			window.print();
		}
	</script>
</body>
</html>