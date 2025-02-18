<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - To Do List</title>
    <style>
        /* Mengatur background dengan gambar */
        body {
            background: url('/images/yuju.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        /* Container untuk form */
        .container {
            width: 320px; /* Ukuran box tetap proporsional */
            background: rgba(255, 255, 255, 0.7); /* Transparan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 10%; /* Posisi kotak tetap pas di area kosong */
        }

        h1 {
            font-size: 22px;
            margin-bottom: 15px;
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            display: block; /* Agar tombol bisa diposisikan tengah */
            margin: 10px auto; /* Membuatnya di tengah */
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .link {
            margin-top: 10px;
            display: block;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Username" required>
            <input type="email" name="email" placeholder="E-Mail" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Re-Type Password" required>
            <button type="submit" class="btn">Signup</button>
        </form>
        <a href="{{ route('login') }}" class="link">Sudah punya akun? <b>Login</b></a>
    </div>
</body>
</html>
