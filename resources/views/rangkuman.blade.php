<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rangkuman Janji Temu</title>

    <style>
        .container {
            background-color: white;
            border: 1px solid #0B62B2;
            border-radius: 10px;
            width: 100%;
            max-width: 900px;
            padding: 20px;
            margin: 20px auto; /* Center the container within the page */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        hr{
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }

        h3 {
            font-weight: 500;
        }
        .patient-info, .appointment-info, .qr-code, .notes {
            border: 1px solid #0B62B2;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .patient-info{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .patient-info, .notes, .warning{
            width: 500px;
        }

        .patient-info table {
            width: 80%;
        }

        .patient-info table td {
            padding: 10px;
            vertical-align: top;
        }

        .patient-info table td:first-child {
            width: 40%;
            font-weight: bold;
            color: black;
        }

        .patient-info table td:last-child {
            width: 70%;
            color: black;
        }

        .appointment-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .appointment-info .doctor {
            flex: 1;
        }

        .appointment-info .appointment-dates {
            text-align: right;
            flex: 1;
        }

        .qr-code {
            text-align: center;
        }

        .qr-code img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .notes {
            text-align: center;
        }

        .notes p {
            color: black;
        }

        .wrap-grid{
            justify-content: center;
            display: flex;
            gap: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0B62B2; 
            color: white; 
            text-align: center;
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 16px;
            cursor: pointer; 
            transition: background-color 0.3s ease;
        }

        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 10px;
        }



    </style>
</head>
<body>
    @include('header')

    <div class="container">
        <h2>Rangkuman Janji Temu</h1>
        <div class="wrap-grid">
            <div class="grid">
                <div class="patient-info">
                    <h3>Identitas Pasien</h2>
                    <hr>
                    <table>
                        <tr>
                            <td><strong>Nama:</strong></td>
                            <td>Mutia Bahalwan</td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Lahir:</strong></td>
                            <td>28/12/2003</td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin:</strong></td>
                            <td>Wanita</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>bahalwanmutia@gmail.com</td>
                        </tr>
                        <tr>
                            <td><strong>No. Telepon:</strong></td>
                            <td>+6281235650928</td>
                        </tr>
                        <tr>
                            <td><strong>Negara:</strong></td>
                            <td>Indonesia</td>
                        </tr>
                        <tr>
                            <td><strong>Kebangsaan:</strong></td>
                            <td>Indonesia</td>
                        </tr>
                        <tr>
                            <td><strong>No. MRN:</strong></td>
                            <td>187221019</td>
                        </tr>
                    </table>
                </div>

                <div class="notes">
                    <h3>Catatan</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="warning">
                    <i>*Harap datang ke RS. Premier Surabaya sesuai dengan jadwal Janji Temu. Jika melebihi waktu, maka dianggap tidak hadir dan harus mengatur Janji Temu lagi.</i>
                </div>
            </div>

            <div class="grid">
                <div class="appointment-info">
                    <h3>Janji Temu</h2>
                    <hr>
                    <div class="doctor">
                        <img src="{{ asset('images/dokter.png') }}" alt="dokter">
                        <p>Anestesi - Spesialis Anestesi</p>
                        <p><strong>dr. Edward Kusuma, Sp.An, M.Kes, KIC</strong></p>
                    </div>
                    <hr>
                    <div class="appointment-dates">
                        <p><strong>Tanggal:</strong> 30/10/2024</p>
                        <p><strong>Tanggal Alternatif:</strong> 10/11/2024</p>
                    </div>
                </div>
        
                <div class="qr-code">
                    <h3>QR Code</h2>
                    <hr>
                    <img src="{{ asset('images/qr.png') }}" alt="QR Code">
                    <p>187221019</p>
                </div>
            </div>
        </div>
        <div class="center">
            <a href="/rangkuman" class="btn">Cetak</a>
        </div> 
    </div>

    @include('footer')
</body>
</html>