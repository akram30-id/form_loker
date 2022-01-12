<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Register | PT. NIPPISUN INDONESIA</title>
</head>

<body>
    <div class="container mt-3">
        <h1><b>Form Registrasi</b></h1>
        <h4>Mohon Isi Dengan Cermat dan Teliti</h4>
        <br>
        <div class="container mt-5">
            <!-- Nama Lengkap -->
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h4><b>Nama Lengkap</b></h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 offset-sm-3">
                    <input class="form-control" type="text" placeholder="Contoh: Sayyid Cahyadi Wiguna">
                </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="row mt-5">
                <div class="col-sm-6 offset-sm-3">
                    <h4><b>Tanggal Lahir</b></h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-1 offset-sm-3">
                    <!-- <input class="form-control" type="text" placeholder="Tgl"> -->
                    <select name="tgl" id="tgl" class="form-control">
                        <option value="">Tgl</option>
                        <?php for ($i = 1; $i <= 31; $i++) {
                            echo "<option value=$i>$i</option>";
                        }
                        ?>
                    </select>
                </div>
                <h5> / </h5>
                <div class="col-sm-3">
                    <select name="bulan" id="bulan" class="form-control">
                        <option value="">Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                    </select>
                </div>
                <h5> / </h5>
                <div class="col-sm-2">
                    <!-- <input class="form-control" type="text" placeholder="Tahun"> -->
                    <select name="tahun" id="tahun" class="form-control">
                        <option value="">Tahun</option>
                        <?php for ($t = 1980; $t <= 2022; $t++) {
                            echo "<option value=$t>$t</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="row mt-5">
                <div class="col-sm-6 offset-sm-3">
                    <h4><b>Jenis Kelamin</b></h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 offset-sm-3">
                    <!-- <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin">
                        <label for="jenis_kelamin" class="form-check-label">Laki-Laki</label>
                    </div> -->
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin">
                        <label for="jenis_kelamin" class="form-check-label">Perempuan</label>
                    </div>
                </div>
            </div>

            <!-- Pendidikan Terakhir -->
            <div class="row mt-5">
                <div class="col-sm-6 offset-sm-3">
                    <h4><b>Pendidikan Terakhir</b></h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 offset-sm-3">
                    <select name="bulan" id="bulan" class="form-control">
                        <option value="">Pilih Pendidikan Terakhir</option>
                        <option value="smk">SMA/SMK Sederajat </option>
                        <option value="s1">S1</option>
                        <option value="s2">S2</option>
                        <option value="s3">S3</option>
                    </select>
                </div>
            </div>

            <!-- Upload Ijazah -->
            <div class="row mt-5">
                <div class="col-sm-6 offset-sm-3">
                    <h4><b>Upload Ijazah</b></h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 offset-sm-3">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upload Sertifikat -->
            <div class="row mt-5">
                <div class="col-sm-6 offset-sm-3">
                    <h4><b>Upload Sertifikat</b></h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3 offset-sm-3">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                            <label class="custom-file-label" for="inputGroupFile04">Sertifikat N1</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                            <label class="custom-file-label" for="inputGroupFile04">Sertifikat N2</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-6 offset-sm-3">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="approve" name="approve">
                        <label for="approve" class="form-check-label">Dengan ini, saya mengakui bahwa data diatas adalah benar dan dapat dipertanggung-jawabkan</label>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mb-3">
                <div class="col-sm-6 offset-sm-3">
                    <button type="submit" class="btn btn-primary btn-user btn-block"><b>Submit</b></button>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>