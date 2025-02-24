@extends('layouts.app')

@section('title', 'Riwayat To-Do List')

@section('content')

<style>
    body {
        background: linear-gradient(to right, #3a7bd5, #784ba0);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .history-container {
        background: #b3d1ff;
        padding: 50px 40px 40px;
        border-radius: 20px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        width: 80%;
        max-width: 800px;
        position: relative;
        text-align: center;
        left: 170px;
    }

    .history-title {
        background: #0a1f63;
        color: white;
        padding: 12px 20px;
        border-radius: 12px;
        font-size: 22px;
        font-weight: bold;
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
    }

    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
    }

    .table th {
        background: #0a1f63;
        color: white;
        padding: 12px;
        text-align: center;
    }

    .table td {
        padding: 10px;
        text-align: center;
    }

    .btn-dashboard {
        background: #9333ea;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 15px;
        font-size: 16px;
        cursor: pointer;
        width: 180px;
        margin-top: 20px;
        display: inline-block;
    }

    .btn-dashboard:hover {
        background: #7b1fa2;
    }
</style>

<div class="history-container">
    <div class="history-title">Riwayat To-Do List</div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Tanggal Waktu Tugas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todolists as $index => $todolist)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $todolist->nama_tugas }}</td>
                <td>
                    @if ($todolist->status_tugas == 'pending')
                        <span class="badge bg-warning">Pending</span>
                    @else
                        <span class="badge bg-success">Completed</span>
                    @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($todolist->created_at)->translatedFormat('l, d F Y H:i:s') }} WIB</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('dashboard') }}" class="btn-dashboard">Dashboard</a>
</div>

@endsection
