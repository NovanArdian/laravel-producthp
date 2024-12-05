<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My App</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #ff9900, #ffc772); /* Gradasi oranye */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            overflow: hidden;
            position: relative;
        }
        .container {
            text-align: center;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px); /* Efek blur untuk background */
            animation: fadeIn 1.5s ease-in-out;
        }
        .logo {
            width: 110px;
            height: 110px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            animation: bounce 2s infinite;
        }
        .logo img {
            width: 70%;
        }
        h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.8;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        .btn {
            padding: 14px 35px;
            background: #ff6f00; /* Warna oranye lebih gelap untuk tombol */
            color: #fff;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
            border: 2px solid transparent;
            position: relative;
        }
        .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            border-radius: 50px;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            background-color: #e65100;
        }
        .btn:hover::after {
            opacity: 0.1;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.9;
        }
        .footer p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
        }
        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            animation: float 6s infinite ease-in-out;
            z-index: -1;
        }
        .circle:nth-child(1) {
            width: 250px;
            height: 250px;
            top: 15%;
            left: 20%;
        }
        .circle:nth-child(2) {
            width: 350px;
            height: 350px;
            top: 75%;
            right: 20%;
            animation-delay: 2s;
        }
        .circle:nth-child(3) {
            width: 200px;
            height: 200px;
            bottom: 15%;
            left: 50%;
            animation-delay: 4s;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }
    </style>
</head>
<body>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    
    <div class="container">
        <div class="logo">
            <!-- Ganti logo sesuai aplikasi Anda -->
            <img src="{{ asset('admin_assets/img/user.png') }}" alt="Logo">
        </div>
        <h1>Selamat Datang!</h1>
        <p>Ayo login dan mulai belanja sekarang!</p>
        <div class="btn-group">
            <a href="{{ route('login') }}" class="btn">Login</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
        <div class="footer">
            <p>© 2024 Novan Ardian. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
