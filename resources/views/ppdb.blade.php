<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0;
            padding: 0;
        }

        .syarat {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .syarat .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
        }

        .kategorisyarat {
            display: flex;
            justify-content: space-around;
        }

        .kategorisyarat .syaratumum {
            padding: 80px;
            border-radius: 60px;
            background-color: rgba(255, 216, 117, 0.60);
            box-shadow: 10px 4px 4px rgba(0, 0, 0, 0.25);
            margin-left: 100px;
        }

        .kategorisyarat .syaratumum h4 {
            font-family: 'Poetsen One', sans-serif;
            text-align: center;
            margin-bottom: 30px;
        }

        .kategorisyarat .syaratumum p {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .kategorisyarat .syaratkhusus {
            padding: 80px;
            border-radius: 60px;
            background-color: rgba(255, 216, 117, 0.60);
            box-shadow: 10px 4px 4px rgba(0, 0, 0, 0.25);
            margin-right: 100px;
        }

        .kategorisyarat .syaratkhusus h4 {
            font-family: 'Poetsen One', sans-serif;
            text-align: center;
            margin-bottom: 30px;
        }

        .kategorisyarat .syaratkhusus p {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .alur {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .alur .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
        }

        .gambaralur {
            display: flex;
            justify-content: center;
        }

        .gambaralur img {
            width: 75%;
        }

        .ppdb {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .ppdb .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
            text-align: center;
        }

        form {
            display: flex;
            justify-content: space-between;
            margin-left: 170px;
            margin-right: 170px;
            padding: 60px;
            background-color: rgba(255, 216, 117, 0.60);
            border-radius: 20px;
            margin-bottom: 80px;
        }

        .daftar .form-group {
            display: grid;
            margin-top: 20px;
        }

        .daftar .form-group label {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .daftar .form-group select {
            width: 260%;
            height: 50px;
        }

        .daftar .form-group input {
            width: 260%;
            height: 50px;
        }

        .daftar .form-group select option {
            color: grey;
        }

        input[type=text], input[type=email], input[type=file], select{
            font-family: 'Poppins', sans-serif;
            border-radius: 10px;
        }

        input[type=submit] {
            background: #FFD875;
            padding: 10px 15px;
            color: black;
            border-radius: 20px;
            font-size: 16px;
            border: none;
            width: 260%;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }
        input[type=submit]:hover{
            background-color: rgba(98, 139, 76, 0.75);
            color: white;
        }
    </style>
</head>

<body>
    
    @include ('header')
    
    <div class="syarat">
        <div class="title">PERSYARATAN PENDAFTARAN</div>
    </div>
    <div class="kategorisyarat">
        <div class="syaratumum">
            <h4>SYARAT UMUM</h4>
            <p>1. Usia minimal 6 tahun. <br />2. Pendaftaran dilakukan secara <br />online. <br />3. Membayar biaya pendaftaran Rp.<br />300.000.</p>
        </div>
        <div class="syaratkhusus">
            <h4>SYARAT KHUSUS</h4>
            <p>1. Fotocopy Akte Kelahiran. <br />2. Fotocopy Kartu Keluarga. <br />3. Fotocopy KTP Orang tua (tidak <br />digunting dan dalam 1 lembar A4). <br />4. Pas Foto 3 x 4 3 lembar latar <br />belakang warna merah.</p>
        </div>
    </div>
    <div class="alur">
        <div class="title">ALUR PENDAFTARAN</div>
    </div>
    <div class="gambaralur">
        <img src="{{ asset('images/ppdb/Alur_pendaftaran_ppdb.png') }}">
    </div>
    <div class="ppdb">
        <div class="title">PENDAFTARAN PPDB SDIT AR<br />RIDHO TANGERANG</div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('submit.registration') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="daftar">
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <select placeholder="Tahun Ajaran" name="TahunAjaran" id="TahunAjaran">
                    <option value="2022/2023">2022/2023</option>
                    <option value="2023/2024">2023/2024</option>
                    <option value="2024/2025">2024/2025</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Nama Lengkap" name="NamaLengkap" id="NamaLengkap">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select placeholder="Jenis Kelamin" name="JenisKelamin" id="JenisKelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tempat/Tanggal Lahir</label>
                <input type="text" placeholder="Tempat & Tanggal Lahir" name="Tempat/TanggalLahir" id="Tempat/TanggalLahir">
            </div>
            <div class="form-group">
                <label>Status Dalam Keluarga</label>
                <input type="text" placeholder="Status Dalam Keluarga" name="Status" id="Status">
            </div>
            <div class="form-group">
                <label>Anak Ke-</label>
                <input type="text" placeholder="Anak Ke-" name="AnakKe" id="AnakKe">
            </div>
            <div class="form-group">
                <label>Jumlah Saudara</label>
                <input type="text" placeholder="Jumlah Saudara" name="JumlahSaudara" id="JumlahSaudara">
            </div>
            <div class="form-group">
                <label>Hobi</label>
                <input type="text" placeholder="Hobi" name="Hobi" id="Hobi">
            </div>
            <div class="form-group">
                <label>Cita-cita</label>
                <input type="text" placeholder="Cita-cita" name="Cita-cita" id="Cita-cita">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Email" name="Email" id="Email">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" placeholder="Alamat" name="Alamat" id="Alamat">
            </div>
            <div class="form-group">
                <label>Nomor Telp/WA</label>
                <input type="text" placeholder="Nomor Telp/WA" name="Nomor" id="Nomor">
            </div>
            <div class="form-group">
                <label>Nama Ayah</label>
                <input type="text" placeholder="Nama Ayah" name="NamaAyah" id="NamaAyah">
            </div>
            <div class="form-group">
                <label>Nama Ibu</label>
                <input type="text" placeholder="Nama Ibu" name="NamaIbu" id="NamaIbu">
            </div>
            <div class="form-group">
                <label>Upload Bukti Pembayaran</label>
                <input type="file" name="filepembayaran" id="filepembayaran">
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" value="Daftar" class="btn btn-primary">
            </div>
        </div>
    </form>
        @include ('footer')
</body>
</html>