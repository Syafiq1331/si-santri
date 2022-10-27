<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Santri | Jago IT Pinter Ngaji</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Santri</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />

        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($siswa['jenis_kelamin'] == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option value="Islam" <?php echo ($siswa['agama'] == 'Islam') ? "selected": "" ?>>Islam</option>
                <option value="Kristen" <?php echo ($siswa['agama'] == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option value="Hindu" <?php echo ($siswa['agama'] == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option value="Budha" <?php echo ($siswa['agama'] == 'Budha') ? "selected": "" ?>>Budha</option>
                <option value="Konghucu" <?php echo ($siswa['agama'] == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="sekolah asal" value="<?php echo $siswa['sekolah_asal'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
        
    </form>
</body>
</html>