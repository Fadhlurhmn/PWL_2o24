<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORM UBAH DATA USER</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form action="{{ route('user.ubah_simpan', ['id' => $data->user_id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
        <br>
        <label for="">Password</label>
        <input type="text" name="password" placeholder="Masukkan Password" value="{{ $data->password }}">
        <br>
        <label for="">Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan Level ID" value="{{ $data->level_id }}">
        <br>
        <br>
        <input type="submit" class="btn btn-succes" value="ubah">
    </form>
    
    
</body>
</html>