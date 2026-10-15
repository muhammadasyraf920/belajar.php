<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Stok Barang</h1>

    <form action="form_proses.php" method="POST">

    <div>
        <label for="">Nama Suku Cadang</label><br>
        <input type="text" name="namasukucadang" maxlengt="10"
        oninput="if(/[^a-zA-Z\s]/.test(this.value)){alert('hanya boleh huruf!');this.value=this.value.replace(/[^a-zA-Z\s]/g,'');}">
    </div>

    <div>
        <label for="">Kode Sparepart</label><br>
        <input type="text" name="kodesparepart" maxlength="4"
        oninput="if(/[^0-9]/.test(this.value)){alert('hanya boleh angka!');this.value=this.value.replace(/[^0-9]/g,'',}">
    </div>
    <br>
    <div>
        <button type="Submit">Simpan</button>
    </div>
    </form>

</body>
</html>