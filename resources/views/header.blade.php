<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Header</title>
    <style>
        
        body {
            font-family: 'Poppins', sans-serif; 
            margin: 0;
            padding: 0;
        }
        .top-header{
            background-color: #0B62B2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            padding: 10px;
            position: relative;
        }
        .top-header li{
            list-style: none;
            color: white;
        }

        .kontak{
            display: flex;
            justify-content: space-between;  
            gap: 10px;    
        }

        .username{
            margin-right: 40px;
            position: relative;
        }

        .uname-detail{
            margin-right: 5px;
        }

        .username li{
            gap: 10px;
        }

        .dropdown{
            display: none;
            margin-top: 10px;
            padding: 10px;
            background-color: white;
            position: absolute;
            border: 1px solid #0B62B2
        }

        .dropdown li{
            list-style-type: none;
            padding: 5px;
            cursor: pointer;
            border-bottom: 1px solid #0B62B2;
            margin-top: 5px;
        }

        .dropdown li a{
            text-decoration: none;
            color: #0B62B2;
            display: block;
        }

        .username li:hover .dropdown{
            display: block;
            
        }

        .navbar{
            margin: 0 ;
            border-bottom: 2px solid #0B62B2;
            display: flex;
            justify-content: space-between;
            align-items: center;           
        }

        .navbar li{
            list-style-type: none;
            padding: 20px;
        }

        .navbar li a{
            color: #0B62B2;
            text-decoration: none;
        }
        .search{
            border: 1px solid #0B62B2;
            border-radius: 30px;
            padding: 8px 40px;
            align-items: center;
        }

        .search i{
            margin-right:5px;
        }

        .search, .search i{
            color: grey;
        }

        .search input {
            border: none;
            outline: none;
            flex: 1;
        }

    </style>
</head>
<body>
    <ul class="top-header">
        <ul class="kontak">
            <li><i class="fas fa-phone"></i> Emergensi (031) 599 2992</li>
            <li>|</li>
            <li>WhatsApp +62 8122 2309 911</li>
        </ul>
        <ul class="username">
            <li>
                <div class="uname-detail">
                    <i class="fas fa-user-circle profile-icon"></i>
                    &nbsp;Mutia Bahalwan &nbsp;
                    <i class="fas fa-chevron-down"></i>
                </div>
                <!-- Dropdown content -->
                <ul class="dropdown">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Riwayat Pemesanan</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </ul>
    <ul class="navbar">
        <li><img src="{{ asset('images/logo.png') }}" alt="logo"></li>
        <li><a href="/patien-care">Patient Care &nbsp;<i class="fas fa-chevron-down"></i></a></li>
        <li><a href="/layanan-unggulan">Layanan Unggulan&nbsp;</a><i class="fas fa-chevron-down"></i></li>
        <li><a href="/cari-dokter">Cari Dokter&nbsp;</a><i class="fas fa-chevron-down"></i></li>
        <li><a href="/previlage-club">Previlage Club&nbsp;</a><i class="fas fa-chevron-down"></i></li>
        <li><a href="/pusat-informasi">Pusat Informasi &nbsp;</a><i class="fas fa-chevron-down"></i></li>
        <li>
            <div class="search">
                <i class="fas fa-search"></i> 
                <input type="text" placeholder="Cari Sesuatu">
            </div>
        </li>
    </ul>
</body>
</html>