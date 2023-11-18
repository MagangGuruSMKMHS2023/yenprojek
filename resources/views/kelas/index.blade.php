@include('includes._header')
<form action="/cari" methode="get">
    <label for="cari">Cari Data:</label>
    <input type="text" id="cari" name="cari" >
    <button type="submit">Search</button>
</form>
<a href="/kelas/create">Tambah Data</a>
<table border="1">
    <tr>
        <td>Id Kelas</td>
        <td>Nama Kelas</td>
        <td>Wali Kelas</td>
        <td>Ketua Kelas</td>
        <td>Kursi</td>
        <td>Meja</td>
        <td>Gambar Kelas</td>
    </tr>
    <?php foreach($kelas as $gr):?>
    <tr>
        <td><?= $gr['id_kelas']; ?></td>
        <td><?= $gr['namakelas']; ?></td>
        <td><?= $gr['walikelas']; ?></td>
        <td><?= $gr['ketuakelas']; ?></td>
        <td><?= $gr['kursi']; ?></td>
        <td><?= $gr['meja']; ?></td>
        <td>
            <a href="{{ asset('upload_gambar/' .$gr->gambar_kelas) }}" target="_blank">
                <img src="{{asset('upload_gambar/' .$gr->gambar_kelas) }}" alt="{{$gr->namakelas}}" width="100" height="100">
            </a>
        </td>
        <td>
            <a href="/kelas/<?=$gr['id_kelas'];?>/edit">Edit</a>
            <form action="/kelas/{{ $gr->id_kelas}}"method="post">
                @csrf
                @method("delete")
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    <?php endforeach;?>
</table>