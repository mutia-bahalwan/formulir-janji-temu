<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janji Temu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/resources/css/janjiTemu.css">
    <style>
         * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif; 
        }

        .main-content{
            display: flex;
            justify-content: center;
            align-items:center;
            flex-direction: column;
            margin: 30px;
        }

        .form-container {
            background-color: #0B62B2;
            margin: 10px;
            padding: 20px;
            border-radius: 20px;
            width: 800px;
            max-width: 100%;
            color: white;
            align-items: center;

        }

        h3, .title {
            text-align: center;
        }

        .p1, .p2 {
            margin: 0;
            padding: 0;
        }

        .p1{
            font-weight: 600;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .p2{
            font-weight: 400;
            font-size: 25px;
            margin-bottom: 20px;
        }

        hr{
            width: 100%;
            color: white;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 10px 30px;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 4px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input, select{
            width: 300px;
            max-width: 400px;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px; 
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        textarea {
            resize: none;
        }

        button {
            background-color: white;
            color: #0B62B2;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #fff7f7;
        }

        .no-identification option{
            width: 100px;
        }

        .fill-identification{
            width: 100px;
        }

        /* Switch styling */
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 20px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #0B62B2;
        }

        input:checked + .slider:before {
            transform: translateX(20px);
        }

        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 10px;
        }

        .center button{
            margin-top: 10px;
        }

        .radio-group{
            display: flex;
            flex-direction: row;
            width: 300px;
        }

        .radio-end{
            display: flex;
            width: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: white; 
            color: #0B62B2; 
            text-align: center;
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 16px;
            cursor: pointer; 
            transition: background-color 0.3s ease;
        }

    </style>
</head>
<body>
    @include('header')
    <div class="main-content">
        <div class="title">
            <p class="p1">Lengkapi Formulir</h1>
            <p class="p2">Janji Temu</h2>
        </div>
        <div class="form-container">
            <form>
                <!-- First Section -->
                <div class="form-section">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="spesialis">Spesialis</label>
                            <select id="spesialis" name="spesialis">
                                <option value="">--Pilih Spesialis Dokter--</option>
                                <option value="tidak">Saya Tidak Yakin</option>
                                <option value="kardiologi">Kardiologi (Dokter Jantung)</option>
                                <option value="neurologi">Neurologi (Dokter Saraf)</option>
                                <option value="pediatri">Pediatri (Dokter Anak)</option>
                                <option value="bedah_umum">Bedah Umum</option>
                                <option value="ginekologi">Ginekologi (Dokter Kandungan)</option>
                                <option value="dermatologi">Dermatologi (Dokter Kulit)</option>
                                <option value="psikiatri">Psikiatri (Dokter Kejiwaan)</option>
                                <option value="onkologi">Onkologi (Dokter Kanker)</option>
                                <option value="ortopedi">Ortopedi (Dokter Tulang)</option>
                                <option value="endokrinologi">Endokrinologi (Dokter Hormon dan Metabolisme)</option>
                            </select>
                        </div>
        
                        <div class="form-group">
                            <label for="nama-dokter">Nama Dokter</label>
                            <select id="nama-dokter" name="nama-dokter">
                                <option value="">--Pilih Nama Dokter--</option>
                                <option value="dokter-manapun">Dokter manapun</option>
                                <option value="dr_andika">Dr. Andika Wijaya</option>
                                <option value="dr_melati">Dr. Melati Kusuma</option>
                                <option value="dr_farhan">Dr. Farhan Saputra</option>
                                <option value="dr_nina">Dr. Nina Permata</option>
                                <option value="dr_yusuf">Dr. Yusuf Haryadi</option>
                                <option value="dr_tania">Dr. Tania Widjaja</option>
                                <option value="dr_budi">Dr. Budi Santoso</option>
                                <option value="dr_siti">Dr. Siti Rahmawati</option>
                                <option value="dr_hasan">Dr. Hasan Pratama</option>
                                <option value="dr_lisa">Dr. Lisa Amalia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="mrn">Nomor MRN</label>
                            <input type="text" id="mrn" name="mrn" placeholder="Masukkan no MRN">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal">
                        </div>
        
                        <div class="form-group">
                            <label for="tanggal-alternatif">Tanggal Alternatif</label>
                            <input type="date" id="tanggal-alternatif" name="tanggal-alternatif">
                        </div>

                    </div>
    
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="4"></textarea>
                    </div>
                </div>
    
                <!-- Second Section: Data Diri -->
                <hr>
                <h3>Lengkapi Data Diri</h3>
                <div class="form-section">
                    <div class="form-group">
                        <label>Apakah Anda mengajukan formulir untuk Anda sendiri?</label>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama">
                        </div>
        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="identifikasi">Nomor Identifikasi</label>
                            <select id="identifikasi" class="no-identification">
                                <option value="ktp" >KTP</option>
                               <option value="ktp">Passport</option>
                            </select>
                            <input type="text" placeholder="Masukkan no identifikasi">
                        </div>
        
                        <div class="form-group">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor telepon">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="tanggal-lahir">Tanggal Lahir</label>
                            <input type="date" id="tanggal-lahir" name="tanggal-lahir">
                        </div>
        
                        <div class="form-group">
                            <label for="jenis-kelamin">Jenis Kelamin</label>
                            <div class="radio-group">
                                <input type="radio" id="pria" name="jenis-kelamin" value="pria">
                                <label for="pria">Pria</label>
                        
                                <input type="radio" id="wanita" name="jenis-kelamin" value="wanita">
                                <label for="wanita">Wanita</label>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="kebangsaan">Kebangsaan</label>
                            <input type="text" id="kebangsaan" name="kebangsaan" placeholder="Masukkan kebangsaan">
                        </div>
        
                        <div class="form-group">
                            <label for="negara">Negara</label>
                            <select id="negara" name="negara">
                                <option value="indonesia">Indonesia</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="singapura">Singapura</option>
                                <option value="thailand">Thailand</option>
                                <option value="filipina">Filipina</option>
                                <option value="vietnam">Vietnam</option>
                                <option value="jepang">Jepang</option>
                                <option value="korea_selatan">Korea Selatan</option>
                                <option value="australia">Australia</option>
                                <option value="amerika_serikat">Amerika Serikat</option>
                            </select>                      
                        </div>
                    </div>
    
                    <div class="form-group center">
                        <label>Apakah formulirnya sudah terisi dengan benar?</label>
                        <div class="radio-end">
                            <input type="radio" id="ya" name="ya" value="ya">
                            <label for="ya">Ya</label>
                        </div>
                    </div>
                    
                    <div class="center">
                        <a href="/rangkuman" class="btn">Submit</a>
                    </div>                
                </div>
            </form>
        </div>
    </div>

    @include('footer')
</body>
</html>