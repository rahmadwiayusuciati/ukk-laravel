<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - To Do List</title>
    <style>
        /* Mengatur background dengan gambar */
        body {
            background: url('/images/bgrahma2.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        /* Container untuk form */
            .container {
            width: 280px; /* Ukuran lebih kecil */
            background: rgba(255, 255, 255, 0.977); /* Transparan */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 35%; /* Menyesuaikan dengan area kosong */
            backdrop-filter: blur(10px); /* Efek blur */
            
            h1 {
            font-size: 20px; /* Ukuran lebih kecil */
            text-align: center;
            color: #003366;
            margin-bottom: 12px
        }

        input {
            width: 90%; /* Lebar input tetap proporsional */
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Menengahkan tombol Signup */
        .btn {
            width: 100px;
            padding: 10px;
            background-color: #0044cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            display: block; /* Agar tombol bisa diposisikan tengah */
            margin: 10px auto; /* Membuatnya di tengah */
            text-align: center;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .link {
            color:rgb(43, 184, 219);
            margin-top: 10px;
            display: block;
            text-align: center;
            font-size: 14px;
    
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Username" required>
            <input type="email" name="email" placeholder="E-Mail" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Re-Type Password" required>
            <button type="submit" class="btn">SIGN UP</button>
        </form>
        <a href="{{ route('login') }}" class="link">You have an account? <b>Sign In</b></a>
    </div>
</body>
</html>
