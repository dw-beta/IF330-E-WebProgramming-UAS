<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        /* warna handle (bagian yang dapat di-drag) scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #ffa123;
            border-radius: 6px;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
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
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
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
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
        }

        .gambaralur {
            display: flex;
            justify-content: center;
        }

        .cd-container {
  width: 90%;
  max-width: 1080px;
  margin: 0 auto;
  padding: 0 10%;
  border-radius: 2px;
}
.cd-container::after {
  content: '';
  display: table;
  clear: both;
}

/* -------------------------------- 

Main components 

-------------------------------- */


#cd-timeline {
  position: relative;
  padding: 2em 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
#cd-timeline::before {
  content: '';
  position: absolute;
  top: 0;
  left: 25px;
  height: 100%;
  width: 4px;
  background: #ffa123;
}
@media only screen and (min-width: 1170px) {
  #cd-timeline {
    margin-top: 3em;
    margin-bottom: 3em;
  }
  #cd-timeline::before {
    left: 50%;
    margin-left: -2px;
  }
}

.cd-timeline-block {
  position: relative;
  margin: 2em 0;
}
.cd-timeline-block:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-block:first-child {
  margin-top: 0;
}
.cd-timeline-block:last-child {
  margin-bottom: 0;
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-block {
    margin: 4em 0;
  }
  .cd-timeline-block:first-child {
    margin-top: 0;
  }
  .cd-timeline-block:last-child {
    margin-bottom: 0;
  }
}

.cd-timeline-img {
  position: absolute;
  top: 8px;
  left: 12px;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  box-shadow: 0 0 0 4px #ffa123, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
}
.cd-timeline-img {
  background: #e8bc64;
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-img {
    width: 30px;
    height: 30px;
    left: 50%;
    margin-left: -15px;
    margin-top: 15px;
    /* Force Hardware Acceleration in WebKit */
    
  }
}

.cd-timeline-content {
  position: relative;
  margin-left: 60px;
  margin-right: 30px;
  background: #e8bc64;
  border-radius: 2px;
  padding: 1em;
  .timeline-content-info {
    background: #2B343A;
    padding: 5px 10px;
    color: rgba(255,255,255,0.7);
    font-size: 12px;
    box-shadow:  inset 0 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    i {
      margin-right: 5px;
    }
    .timeline-content-info-title, .timeline-content-info-date {  
      width: calc(50% - 2px);
      display: inline-block;
    }
    @media (max-width: 500px) {
      .timeline-content-info-title, .timeline-content-info-date {  
        display: block;
        width:100%;
      } 
    }
  }
  .content-skills {
    font-size: 12px;
    padding:0;
    margin-bottom: 0;
    display:flex;
    flex-wrap: wrap;
    justify-content: center;
    li {
      background: #40484D;
      border-radius: 2px;
      display: inline-block;
      padding: 2px 10px;
      color: rgba(255,255,255,0.7);
      margin: 3px 2px;
      text-align: center;
      flex-grow: 1;
    }
  }
}
.cd-timeline-content:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-content h2 {
  color: black;
  font-family: 'Poetsen One', sans-serif;
  margin-top:0;
  margin-bottom: 5px;
}
.cd-timeline-content p, .cd-timeline-content .cd-date {
  color: black;
  font-family: 'Poppins', sans-serif;
  font-size: 13px;
  font-size: 0.8125rem;
}
.cd-timeline-content p {
  margin: 1em 0;
  line-height: 1.6;
}

.cd-timeline-content::before {
  content: '';
  position: absolute;
  top: 16px;
  right: 100%;
  height: 0;
  width: 0;
  border: 7px solid transparent;
  border-right: 7px solid #333C42;
}

@media only screen and (min-width: 768px) {
  .cd-timeline-content h2 {
    font-size: 20px;
    font-size: 1.25rem;
  }
  .cd-timeline-content p {
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
    font-size: 14px;
    font-size: 0.875rem;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-content {
    color: white;
    margin-left: 0;
    padding: 1.6em;
    width: 36%;
    margin: 0 5%
  }
  .cd-timeline-content::before {
    top: 24px;
    left: 100%;
    border-color: transparent;
    border-left-color: #333C42;
  }
  .cd-timeline-content .cd-date {
    position: absolute;
    width: 100%;
    left: 122%;
    top: 6px;
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
    top: 24px;
    left: auto;
    right: 100%;
    border-color: transparent;
    border-right-color: #333C42;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-read-more {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
    left: auto;
    right: 122%;
    text-align: right;
  }
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
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
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

        input[type=text],
        input[type=email],
        input[type=file],
        select {
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

        input[type=submit]:hover {
            background-color: rgba(98, 139, 76, 0.75);
            color: white;
        }

        /* RESPONSIVE HANDPHONE */

        @media (max-width: 767px) and (min-width: 280px) {
            .syarat .title {
                font-family: 'Poetsen One', sans-serif;
                font-size: 16px;
                margin-bottom: 60px;
            }

            .kategorisyarat {
                display: grid;
                justify-content: center;
                padding: 20px;
            }

            .kategorisyarat .syaratumum {
                padding: 50px;
                border-radius: 60px;
                background-color: rgba(255, 216, 117, 0.60);
                box-shadow: 10px 4px 4px rgba(0, 0, 0, 0.25);
                margin-left: 0px;
                margin-bottom: 20px;
            }

            .kategorisyarat .syaratumum h4 {
                font-family: 'Poetsen One', sans-serif;
                text-align: center;
                margin-bottom: 30px;
                font-size: 14px;
            }

            .kategorisyarat .syaratumum p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
            }

            .kategorisyarat .syaratkhusus {
                padding: 50px;
                border-radius: 60px;
                background-color: rgba(255, 216, 117, 0.60);
                box-shadow: 10px 4px 4px rgba(0, 0, 0, 0.25);
                margin-right: 0px;
            }

            .kategorisyarat .syaratkhusus h4 {
                font-family: 'Poetsen One', sans-serif;
                text-align: center;
                margin-bottom: 30px;
                font-size: 14px;
            }

            .kategorisyarat .syaratkhusus p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
            }

            .alur .title {
                font-family: 'Poetsen One', sans-serif;
                font-size: 16px;
                margin-bottom: 60px;
            }

            .gambaralur {
                display: flex;
                justify-content: center;
            }

            .gambaralur img {
                width: 75%;
            }

            .ppdb .title {
                font-family: 'Poetsen One', sans-serif;
                font-size: 16px;
                margin-bottom: 60px;
                text-align: center;
            }

            form {
                flex-direction: column;
                margin-left: 20px;
                margin-right: 20px;
                padding: 30px;
            }

            .daftar .form-group select {
                width: 100%;
                height: 50px;
            }

            .daftar .form-group input {
                width: 100%;
                height: 50px;
            }

            .daftar .form-group select option {
                color: grey;
            }

            input[type=text],
            input[type=email],
            input[type=file],
            select {
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
                width: 100%;
                margin-top: 20px;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
            }

            input[type=submit]:hover {
                background-color: rgba(98, 139, 76, 0.75);
                color: white;
            }
        }

        /* RESPONSIVE TABLET */
        @media (max-width: 1270px) and (min-width: 601px) {
            .kategorisyarat .syaratumum {
                padding: 50px;
                border-radius: 60px;
                background-color: rgba(255, 216, 117, 0.60);
                box-shadow: 10px 4px 4px rgba(0, 0, 0, 0.25);
            }

            .kategorisyarat .syaratumum h4 {
                font-family: 'Poetsen One', sans-serif;
                text-align: center;
                margin-bottom: 30px;
                font-size: 16px;
            }

            .kategorisyarat .syaratumum p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 14px;
            }

            .kategorisyarat .syaratkhusus {
                padding: 50px;
                border-radius: 60px;
                background-color: rgba(255, 216, 117, 0.60);
                box-shadow: 10px 4px 4px rgba(0, 0, 0, 0.25);
            }

            .kategorisyarat .syaratkhusus h4 {
                font-family: 'Poetsen One', sans-serif;
                text-align: center;
                margin-bottom: 30px;
                font-size: 16px;
            }

            .kategorisyarat .syaratkhusus p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 14px;
            }

            form {
                flex-direction: column;
                margin-left: 20px;
                margin-right: 20px;
                padding: 30px;
            }

            .daftar .form-group select {
                width: 100%;
                height: 50px;
            }

            .daftar .form-group input {
                width: 100%;
                height: 50px;
            }

            input[type=submit] {
                background: #FFD875;
                padding: 10px 15px;
                color: black;
                border-radius: 20px;
                font-size: 16px;
                border: none;
                width: 100%;
                margin-top: 20px;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
            }
        }

        @media (max-width: 820px) and (min-width: 768px) {
            .kategorisyarat {
            display: flex;
            justify-content: center;
        }

        .kategorisyarat .syaratumum {
                padding: 50px;
                margin-right: 20px;
            }
            .kategorisyarat .syaratkhusus {
                padding: 50px;
                margin-left: 20px;
            }
        }
    </style>
</head>

<body>
    
    @include ('header')
    
    <div class="syarat" data-aos="zoom-in-up">
        <div class="title">PERSYARATAN PENDAFTARAN</div>
    </div>
    <div class="kategorisyarat" data-aos="zoom-in-up">
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
    <section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
			</div>

			<div class="cd-timeline-content" data-aos="fade-right">
				<h2>Pengisisan Form Pendaftaran</h2>
				<p>Calon peserta didik mengisi seluruh data calon siswa dengan benar dan lengkap.</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content" data-aos="fade-left">
				<h2>Melakukan Pembayaran</h2>
				<p>Calon peserta didik melakukan pembayaran.</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content" data-aos="fade-right">
				<h2>Upload & Cetak</h2>
				<p>Mengupload bukti pembayaran dan mencetak bukti registrasi PPDB online.</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content" data-aos="fade-left">
				<h2>Melakukan Pendaftaran Ulang</h2>
				<p>Calon peserta didik melakukan daftar ulang.</p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	</section> <!-- cd-timeline -->
    
        

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
<script>
    AOS.init();
</script>
</html>
