<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Novan Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;600;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #ff8b07, #f8230b);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }
    .container {
      display: flex;
      width: 85%;
      max-width: 1000px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      opacity: 0;
      transform: scale(0.8);
      animation: fadeInScale 1s ease-out forwards;
    }
    @keyframes fadeInScale {
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
    .left {
      flex: 1;
      background: linear-gradient(to bottom, #f80404, #ff9a02);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 15px;
    }
    .left img {
      max-width: 155%;
      height: auto;
      transform: translateY(-20px);
      animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
      0%, 100% {
        transform: translateY(-20px);
      }
      50% {
        transform: translateY(0);
      }
    }
    .left p {
      font-size: 18px;
      color: #ff8c00;
      font-weight: 600;
      margin-top: 20px;
      animation: slideInLeft 1s ease-out forwards;
    }
    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50%);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    .right {
      flex: 1.2;
      padding: 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .right h1 {
      font-size: 32px;
      color: #4a4a4a;
      margin-bottom: 25px;
      text-align: center;
      font-weight: 700;
      animation: fadeIn 1.5s ease-out forwards;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      transition: border-color 0.3s ease, transform 0.3s ease;
    }
    .form-group input:focus {
      outline: none;
      border-color: #ff8c00;
      transform: scale(1.05);
    }
    .btn {
      display: block;
      width: 100%;
      padding: 12px;
      background: linear-gradient(to right, #ff8b07, #f8230b);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.3s ease;
      animation: slideInUp 1.5s ease-out forwards;
    }
    .btn:hover {
      background: #e67300;
      transform: translateY(-2px);
    }
    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .text-center {
      text-align: center;
      margin-top: 15px;
    }
    .text-center a {
      text-decoration: none;
      color: #ff8c00;
      font-size: 14px;
      transition: color 0.3s ease;
    }
    .text-center a:hover {
      color: #e67300;
    }
    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
      }
      .left {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <img src="{{ asset('admin_assets/img/dodo.png') }}" alt="Illustration">
      
    </div>
    <div class="right">
      <h1>Register <span style="color: #ff8c00">Account</span></h1>
      <form action="{{ route('register.save') }}" method="POST">
        @csrf
        <div class="form-group">
          <input name="name" type="text" placeholder="Your name" required>
        </div>
        <div class="form-group">
          <input name="email" type="email" placeholder="Your email" required>
        </div>
        <div class="form-group">
          <input name="password" type="password" placeholder="Create password" required>
        </div>
        <div class="form-group">
          <input name="password_confirmation" type="password" placeholder="Confirm password" required>
        </div>
        <button type="submit" class="btn">Create Account</button>
      </form>
      <div class="text-center">
        <a href="{{ route('login') }}">Already have an account? Sign in</a>
      </div>
    </div>
  </div>
</body>
</html>
