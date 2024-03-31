<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mata Kuliah</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Tampil Form Mata Kuliah
                    </div>
                    <div class="card-body">
                       
                            <div class="form-group">
                                <label for="kode_mtk">Kode MTK</label>
                                <input type="text" name="kode_mtk" id="kode_mtk" class="form-control" placeholder="Masukkan Kode MTK" value="<?= $kode ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_mtk">Nama MTK</label>
                                <input type="text" name="nama_mtk" id="nama_mtk" class="form-control" placeholder="Masukkan Nama MTK" value="<?= $nama ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="sks">SKS</label>
                                 <input type="text" name="nama_mtk" id="nama_mtk" class="form-control" placeholder="Masukkan Nama MTK" value="<?= $sks ?>" readonly>
                                 
                                </select>
                            </div>
                            <a href="<?= base_url('matakuliah') ?>" class="btn btn-primary">Kembali</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
