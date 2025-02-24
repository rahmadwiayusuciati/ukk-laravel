@extends('layouts.app')

@section('title', 'Edit To-Do List')

@section('content')

<style>
    body {
        background: url('/images/bgrahma2.png') no-repeat center center fixed;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .edit-container {
        background: #b3d1ff;
        padding: 50px 40px 40px;
        border-radius: 20px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        width: 500px;
        position: relative;
        text-align: center;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        left: 300px;
    }

    .edit-title {
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

    .form-control {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid black;
        font-size: 16px;
        background: #b0b3e3;
        text-align: center;
    }

    .button-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
    }

    .btn-simpan {
        background: #9333ea;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        width: 200px;
    }

    .btn-batal {
        background: #5c3b99;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        width: 100px;
    }

    .btn-simpan:hover {
        background: #7b1fa2;
    }

    .btn-batal:hover {
        background: #402080;
    }

</style>

<div class="edit-container">
    <div class="edit-title">Edit To-Do List</div>

    <form action="{{ route('todolist.updateNama', $todolist->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <input type="text" name="nama_tugas" class="form-control" value="{{ $todolist->nama_tugas }}" required>
        </div>

        <div class="button-container">
            <button type="submit" class="btn-simpan">Simpan Perubahan</button>
            <a href="{{ route('dashboard') }}" class="btn-batal">Batal</a>
        </div>
    </form>
</div>

@endsection
