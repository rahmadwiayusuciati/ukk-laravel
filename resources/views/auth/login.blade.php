<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - To Do List</title>
    <style>
        /* Styling Background */
        body {
            background: url('/images/yuju.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        /* Container untuk kotak login */
        .container {
            width: 280px; /* Ukuran lebih kecil */
            background: rgba(255, 255, 255, 0.1); /* Transparan */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 10%; /* Menyesuaikan dengan area kosong */
            backdrop-filter: blur(10px); /* Efek blur */
        }

        /* Style untuk teks judul */
        h1 {
            font-size: 20px; /* Ukuran lebih kecil */
            text-align: center;
            color: #003366;
            margin-bottom: 12px;
        }

        /* Styling input */
        input {
            width: 90%;
            padding: 8px;
            margin: 6px 0;
            border: none;
            border-radius: 5px;
            font-size: 12px; /* Ukuran lebih kecil */
            display: block;
            margin-left: auto;
            margin-right: auto;
            background: rgba(255, 255, 255, 0.5); /* Transparan */
            border: 1px solid #ccc;
            color: #000;
        }

        input::placeholder {
            color: #333;
            font-size: 12px;
        }

        /* Styling tombol LOGIN */
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #0044cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            text-align: center;
            margin-top: 8px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #002b80;
        }

        /* Link Signup */
        .link {
            margin-top: 8px;
            display: block;
            text-align: center;
            font-size: 12px;
            color: #000;
        }

        .link a {
            color: #ffcc00;
            font-weight: bold;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Now</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email or Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">LOGIN</button>
        </form>
        <span class="link">Not a member? <a href="{{ route('register') }}">Signup now</a></span>
    </div>
</body>
</html>
