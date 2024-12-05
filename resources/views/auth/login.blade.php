<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Novan Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    /* Reset */
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: linear-gradient(135deg, #130e0e, #e80c0c);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .container {
      width: 850px;
      display: flex;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      animation: fadeIn 1.2s ease-out;
    }

    /* Animasi saat halaman dimuat */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Animasi gambar */
    .image-section img {
      animation: zoomIn 1s ease-out;
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.8);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    /* Bagian kiri (form) */
    .form-section {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      animation: slideInLeft 1.5s ease-out;
    }

    @keyframes slideInLeft {
      from {
        transform: translateX(-50px);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .form-section h1 {
      font-size: 30px;
      color: #333;
      margin-bottom: 20px;
      position: relative;
    }

    /* Garis bawah pada judul */
    .form-section h1::after {
      content: '';
      position: absolute;
      width: 60%;
      height: 3px;
      background-color: #f80000;
      bottom: -10px;
      left: 20%;
    }

    .form-section p {
      font-size: 16px;
      color: #777;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      font-size: 14px;
      border: 1px solid #ddd;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .form-group input:focus {
      border-color: #f8b400;
      outline: none;
      box-shadow: 0 0 8px rgba(248, 180, 0, 0.5);
    }

    .btn {
      background: linear-gradient(135deg, #131210, #ef0707);
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(135deg, #090909, #ff1a1a);
      transform: scale(1.05);
    }

    .text-center a {
      color: #e30f0f;
      text-decoration: none;
    }

    .text-center a:hover {
      text-decoration: underline;
    }

    /* Bagian kanan (gambar) */
    .image-section {
      flex: 1;
      background: linear-gradient(135deg, #090909, #ff1a1a);
      display: flex;
      justify-content: center;
      align-items: center;
      animation: slideInRight 1.5s ease-out;
    }

    @keyframes slideInRight {
      from {
        transform: translateX(50px);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .image-section img {
      max-width: 145%;
      height: auto;
    }

    /* Responsif */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        width: 90%;
      }
      .image-section {
        order: -1;
        padding: 20px;
      }
      .form-section {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Bagian Form -->
    <div class="form-section">
      <h1 style="text-align: center">LOGIN</h1>
      <p style="text-align: center">Please enter your credentials to log in.</p>
      <form action="{{ route('login.action') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="email" name="email" placeholder="Masukan Alamat email..." required>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
      <div class="text-center">
        <a href="{{ route('register') }}">Create an Account!</a>
      </div>
    </div>
    <!-- Bagian Gambar -->
    <div class="image-section">
      <img src="{{ asset('admin_assets/img/messi.png') }}" alt="handphone">
    </div>
  </div>
</body>
</html>
