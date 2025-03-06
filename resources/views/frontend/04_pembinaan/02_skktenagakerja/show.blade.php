<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            background: #fff;
            padding: 20px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-submit {
            background: #007bff;
            color: white;
            border-radius: 5px;
            width: 100%;
        }
        .btn-submit:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Form Pendaftaran</h2>
        <form action="/submit" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="namalengkap" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempatlahir" placeholder="Masukkan Tempat Lahir" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="ttl" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jeniskelamin" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="notelepon" placeholder="Masukkan Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
            </div>
            <button type="submit" class="btn btn-submit">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>
