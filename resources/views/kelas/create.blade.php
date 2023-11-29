<!DOCTYPE html>
<html>
<head>
    <title>Test Data Tambah Kelas</title>
</head>
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<body>
    <h1>Create Kelas</h1>
    <form action="/kelas/store" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table">
            <tr>
                <td><label for="namakelas"> Nama Kelas:</label></td>
                <td><input type="text" name="namakelas" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="walikelas"> Wali Kelas:</label></td>
                <td><input type="text" name="walikelas" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="ketuakelas"> Ketua Kelas:</label></td>
                <td><input type="text" name="ketuakelas" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="kursi"> Kursi:</label></td>
                <td><input type="number" name="kursi" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="meja"> Meja:</label></td>
                <td><input type="text" name="meja" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="gambar_kelas"> Gambar Kelas:</label></td>
                <td><input type="file" name="gambar_kelas" class="form-control" required></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
