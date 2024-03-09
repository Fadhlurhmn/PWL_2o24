<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER TAMBAH</title>
</head>
<body>
    <h1>FORM TAMBAH DATA USER</h1>
    <form action="{{ route('user.simpan') }}" method="POST">
        {{ csrf_field()}}

        <label for="">Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label for="">Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>