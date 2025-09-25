<?php
// Jika belum submit jumlah data
if (!isset($_POST['jumlah']) && !isset($_POST['simpan'])) {
?>
    <h2>Selamat datang di website Data Siswa</h2>
    <form method="post">
        Masukan Jumlah data : 
        <input type="number" name="jumlah" min="1" required>
        <input type="submit" value="Submit">
    </form>
<?php
} 
// Jika jumlah data sudah diinput
elseif (isset($_POST['jumlah'])) {
    $jumlah = $_POST['jumlah'];
    echo "<h2>Input $jumlah data siswa</h2>";
    echo "<form method='post'>";
    
    for ($i = 1; $i <= $jumlah; $i++) {
        echo "<fieldset style='margin-bottom:15px;'>";
        echo "<legend><b>Data Siswa $i</b></legend>";
        echo "NISN : <br><input type='text' name='nisn[]' required><br><br>";
        echo "Nama Lengkap : <br><input type='text' name='nama[]' required><br><br>";
        echo "Alamat : <br><textarea name='alamat[]' rows='3' cols='40' required></textarea><br>";
        echo "</fieldset>";
    }

    echo "<input type='submit' name='simpan' value='Simpan Data'>";
    echo "</form>";
} 
// Jika data siswa disimpan
elseif (isset($_POST['simpan'])) {
    $nisn    = $_POST['nisn'];
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];

    echo "<h3>Data siswa yang tersimpan:</h3>";
    for ($i = 0; $i < count($nisn); $i++) {
        echo "<fieldset style='margin-bottom:15px;'>";
        echo "<legend><b>Data Siswa ".($i+1)."</b></legend>";
        echo "NISN : ".$nisn[$i]."<br>";
        echo "Nama Lengkap : ".$nama[$i]."<br>";
        echo "Alamat : ".$alamat[$i]."<br>";
        echo "</fieldset>";
    }
}
?>