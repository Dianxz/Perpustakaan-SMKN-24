<?php
include ("../../inc/koneksi.php")
?>
<html>

<head>
    <title>Print Buku</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <table class="table" id="buku">
        <thead>
            <tr class="table table-dark">
                <th class="col-1">#</th>
                <th>Judul</th>
                <th>Tema</th>
                <th>Kutipan</th>
                <th>isi</th>
            </tr>
        </thead>
        <tbody>

            <?php
    
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
    
            if (!$result) {
                die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
            }
    
            $nomor = 1;
            //kalau ini melakukan foreach atau perulangan
            while ($row = mysqli_fetch_assoc($result)) {
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
    window.load = print_b();

    function print_b() {
        window.print();
    }
    </script>
</body>

</html>