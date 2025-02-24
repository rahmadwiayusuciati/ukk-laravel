@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<style>
    /* Background dengan gradien dan bentuk melengkung */
    body {
        background: url('/images/bgrahma2.png') no-repeat center center fixed;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, sans-serif;
        
    }

    /* Container utama */
    .dashboard-container {
        background: #b0d0ff;
        padding: 30px;
        border-radius: 20px;
        width: 80%;
        max-width: 800px;
        text-align: center;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        left: 150px;
        
    }

    /* Header Dashboard */
    .dashboard-header {
        background: #0a1f63;
        color: white;
        padding: 15px;
        border-radius: 15px;
        font-size: 24px;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 20px;
        margin-top: -20px;

    }

    /* Form input tugas */
    .input-container {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .form-control {
        width: 60%;
        padding: 10px;
        border: 2px solid black;
        border-radius: 10px;
        background: #b19cd9;
        color: white;
        text-align: center;
        font-weight: bold;
    }

    .form-control::placeholder {
        color: white;
        font-weight: bold;
    }

    .btn-tambah {
        background: #0a1f63;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
    }

    /* Tabel daftar tugas */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table th {
        background: #0a1f63;
        color: white;
        padding: 10px;
        font-weight: bold;
        text-align: center;
    }

    .table td {
        padding: 10px;
        background: #d6e4ff;
        border-bottom: 2px solid #0a1f63;
        text-align: center;
    }
    /* Tombol aksi */
    .btn-edit {
        background: #2a5cad;
        color: white;
        border: none;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 15px;
    }

    .btn-delete {
        background: #a61c1c;
        color: white;
        border: none;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 12px;
    }

    /* Tombol Logout & Riwayat */
    .btn-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .btn-rwyt, .btn-logout {
        background: #9333ea;
        color: white;
        border: 2px solid black;
        padding: 12px;
        border-radius: 10px;
        font-weight: bold;
        width: 150px;
        text-align: center;
        cursor: pointer;
        margin-top: 100px; /* Sesuaikan jaraknya */
}

    }
</style>

<div class="dashboard-container">
    <h1 class="dashboard-header">Dashboard</h1>

    <form action="{{ route('todolist.store') }}" method="POST">
        @csrf
        <div class="input-container">
            <input type="text" name="nama_tugas" class="form-control" placeholder="Tambahkan tugas anda" required>
            <button type="submit" class="btn-tambah">Tambah</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todolists as $index => $todolist)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $todolist->nama_tugas }}</td>
                <td>
                    <form action="{{ route('todolist.update', $todolist->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status_tugas" class="form-control" onchange="this.form.submit()">
                            <option value="pending" {{ $todolist->status_tugas == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{ $todolist->status_tugas == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </form>
                </td>
                <td>
                    <a href="{{ route ('todolist.edit', $todolist->id )}}" class="btn-edit">Edit</a>
                    <form action="{{ route('todolist.destroy', $todolist->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="btn-container">
        <a href="{{ route ('todolist.history')}}" class="btn-rwyt">Riwayat Tugas</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
</div>

@endsection
