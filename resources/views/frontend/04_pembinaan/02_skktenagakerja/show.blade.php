<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            padding: 20px;
            border: 1px solid #000;
            max-width: 600px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Form Pendaftaran</h2>
    <form action="#" method="POST">
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="namalengkap" required>
        </div>
        <div class="form-group">
            <label>Tempat, Tanggal Lahir:</label>
            <input type="text" name="ttl" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select name="jeniskelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>NIK:</label>
            <input type="text" name="nik" required>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label>Nomor Telepon:</label>
            <input type="text" name="notelepon" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Jenjang Pendidikan Terakhir:</label>
            <input type="text" name="jenjangpendidikan" required>
        </div>
        <div class="form-group">
            <label>Nama Sekolah/Universitas:</label>
            <input type="text" name="namasekolah" required>
        </div>
        <div class="form-group">
            <label>Tahun Lulus:</label>
            <input type="text" name="tahunlulus" required>
        </div>
        <div class="form-group">
            <label>Dokumen Pendukung:</label>
            <input type="file" name="uploadfile" multiple>
        </div>
        <div class="form-group">
            <label>Nama Asosiasi (Jika Ada):</label>
            <input type="text" name="namaasosiasi">
        </div>
        <div class="form-group">
            <label>Memiliki SKK?</label>
            <select name="punyaskk">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
        </div>
        <div class="form-group">
            <label>Memiliki SIKI?</label>
            <select name="punyasiki">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
        </div>
        <div class="form-group">
            <label>Siap Mematuhi Aturan?</label>
            <select name="siappatuh">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
        </div>
        <button type="submit">Kirim Pendaftaran</button>
    </form>
</body>
</html>
