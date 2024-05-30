<?php
include ("inc/header.php")
?>
<div class="container">

    <h3 class="text-center">Pengunjung</h3><br />

    <div class="row">
        <aside>
            <section class="content">

                <!-- Main row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            
                            <!--<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">-->
                            <h5><b>Selamat Datang di Perpustakaan SMKN 24 Jakarta, Untuk Login silahkan klik Etc</b></h5>

                        </div>
                    </div>

                </div>
            </section>

            <!-- Main content -->
        </aside>
        <div class="col-md-7" id="pengunjung">
            <section class="panel">
                <header class="panel-heading">
                    <b>Buku Pengunjung</b>
                </header>
                <div class="panel-body">
                    <div class="twt-area">
                        <form class="form-horizontal style-form" style="margin-top: 20px;"
                            action="insert-pengunjung.php" method="post" enctype="multipart/form-data" name="form1"
                            id="form1">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">No </label>
                                <div class="col-sm-10">
                                    <input name="id" type="text" id="id" class="form-control"
                                        placeholder="Tidak perlu di isi" autofocus="on" readonly="readonly" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nama" type="text" id="nama" class="form-control"
                                        placeholder="Nama Anda" required />
                                    <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Jenis kelamin</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="jk" id="jk">
                                        <option> -- Pilih Salah Satu --</option>
                                        <option value="L"> Laki - Laki</option>
                                        <option value="P"> Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Usia</label>
                                <div class="col-sm-6">
                                    <input name="kelas" type="text" id="kelas" class="form-control"
                                        placeholder="Usia Anda" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Perlu</label>
                                <div class="col-sm-10">
                                    <input name="perlu1" type="text" id="perlu1" class="form-control"
                                        placeholder="Keperluan" required />
                                    <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Cari?</label>
                                <div class="col-sm-10">
                                    <input name="cari" type="text" id="cari" class="form-control"
                                        placeholder="Apa yang anda cari.?" required />
                                    <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Saran</label>
                                <div class="col-sm-10">
                                    <textarea rows="4" name="saran" id="saran" class="form-control"
                                        placeholder="Saran Anda untuk PerpustakaanKU" cols="25"></textarea>
                                    <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input name="tgl_kunjung" type="text" class="form-control" id="tgl_kunjung"
                                        value="<?php echo "" . date("Y/m/d") . ""; ?>" readonly="readonly" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Jam</label>
                                <div class="col-sm-10">
                                    <input name="jam_kunjung" type="text" class="form-control" id="jam_kunjung"
                                        value="<?php echo "" . date("H:i:s") . "" ?>" readonly="readonly" />
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                    <input type="submit" value="Simpan" name="simpan"
                                        class="btn btn-sm btn-primary" />&nbsp;
                                    <a href="#" class="btn btn-sm btn-danger">Batal </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>


        <div class="col-md-4">
            <b>Customer service:</b> <br />
            Phone: +62 895 487 111<br />
            E-mail: <a href="mailto:support@mysite.com">support@perpus24.com</a><br />
            <br /><br />
            <b>Headquarter:</b><br />
            Company Inc, <br />
            Balai Kota, JakPus street 062<br />
            13480, Jakarta, Indonesia<br />
            Phone: +62 895 000 101<br />
            <a href="mailto:usa@mysite.com">idn@perpusnas24.com</a><br />


            <br /><br />
            <b>Indonesia:</b><br />
            Company MAS Dianxz Litd, <br />
            062/A.888 Queen<br />
            Head Mers, Jaksel street 011<br />
            13888, Jakarta, Indonesia<br />
            Phone: +62 895 000 161<br />
            <a href="mailto:usa@mysite.com">idn@perpusnas24.com</a><br />


        </div>
    </div>

</div>

<?php
include ("inc/footer.php")
?>