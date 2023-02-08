<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosestambah.php" method="POST">

    <fieldset>

    <p>
        <label for="nama">Nama peminjam:</label>
        <input type="text" name="nama"/>
    </p>
    <p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat"></textarea>
    </p>
    <p>
        <label for="umur">Umur:</label>
        <input type="number" name="umur"/>
    </p>
    <p>
        <label for="keperluan">Keperluan:</label>
        <input type="text" name="keperluan"/>
    </p>
    <p>
        <label for="jaminan">Jaminan:</label>
        <input type="text" name="jaminan"/>
    </p>
    <p>
        <label for="nomor_rangka">Nomor rangka:</label>
        <input type="number" name="no_rangka"/>
    </p>
    <p>
        <label for="merek">Merek:</label>
        <input type="text" name="merek"/>
    </p>
    <p>
        <label for="jenis_motor">Jenis motor:</label>
        <input type="text" name="jm"/>
    </p>
    <p>
        <label for="tahun_motor">Tahum motor:</label>
        <input type="number" name="tahmot"/>
    </p>
    <p>
        <label for="tgl_pinjam">Tanggal pinjam:</label>
        <input type="date" name="tgpin"/>
    </p>
    <p>
        <label for="tgl_kembali">Tanggal kembali:</label>
        <input type="date" name="tgkem"/>
    </p>
    <p>
    <input type="submit" value="Tambah" name="tambah" />
    </p>
</fieldset>
</form>
</body>
</html>