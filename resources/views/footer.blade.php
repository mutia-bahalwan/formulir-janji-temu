<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Footer</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif; 
            margin: 0;
            padding: 0;
            
        }

        .all{
            background: #0B62B2;
            margin: 0;
        }

        .footer{
            display: flex;
            justify-content: space-between;
            padding: 20px 50px 0 20px;
        }

        .footer ul li{
            color: white;
            list-style-type: none;
            margin-bottom: 5px;
        }

        .title{
            font-weight: 600;
            font-size: 18px;
        }

        .sosmed i{
            font-size: 30px;
            margin: 0 5px;
        }

        .cr {
            display: flex;
            text-align: center;
            align-items: center;
        }

        .cr li{
            list-style-type: none;
            color: white;
            align-items: center;
        }

        .cr img{
            width: 120px;
            height: 50px;
            margin-right: 300px;
            margin-left: 10px;
        }

        
    </style>
</head>
<body>
    <ul class="all">
        <div class="footer">
            <ul class="sosmed">
                <li class="title">Connect with Us</li>
                <hr>
                <br>
                <li>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-youtube"></i>
                </li>
            </ul>
            <ul class="lokasi">
                <li class="title">Lokasi</li>
                <hr>
                <br>
                <li>Jl. Nginden Intan Barat Blok B Surabaya 60118, Indonesia</li>
                <li>
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.438896965167!2d112.7626740753513!3d-7.304487892703252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa55753d8395%3A0xc42611f831b617e6!2sRS%20Premier%20Surabaya!5e0!3m2!1sid!2sid!4v1729430034455!5m2!1sid!2sid" 
                    height="200" 
                    width="480"></iframe>
                </li>
            </ul>
            <ul>
                <li class="title">Kontak Kami</li>
                <hr>
                <br>
                <li>Tel. : (031) 5993 211</li>
                <li>RS Premier Careline 1 500 908</li>
                <li>WA Appointment: +62 8122 2309 911</li>
                <li>Swab Test: +62 811 322 00033</li>
                <li>Emergency: (031) 599 2992 / 3300 2992</li>
                <li>Hotline Keluhan Pasien : +62 811 3222 2008</li>
            </ul>
        </div>
        <div class="cr">
            <li><img src="{{ asset('images/logo2.png') }}" alt="logo"></li>
            <li>Copyright © 2022 RS Premier Hospitals - Hak Cipta Dilindungi</li>
        </div>

    </ul>

    
</body>
</html>