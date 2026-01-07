<!DOCTYPE html>
<html>
  <head>
    <title>LATIHAN 6 PEMOGRAMAN WEB</title>
  </head>
  <body>
    <form method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
          <td>Mata Kuliah</td>
          <td>:</td>
          <td>
            <select name="mk">
                <option value="">>----------Pilih Mata Kuliah----------</option>
                <option value="Pemograman Tertrusktur">Pemograman Tertrusktur</option>
                <option value="Pemograman Web">Pemograman Web</option>
                <option value="Pemograman berorientasi Objek">Pemograman berorientasi Objek</option>
                <option value="Algoritma & Struktur Data">Algoritma & Struktur Data</option>
            </select>
          </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jk" value="laki-laki"/> laki-laki <br/>
                <input type="radio" name="jk" value="perempuan"/> Perempuan 
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"/></td>
        </tr>
        <tra  align="center">
            <td colspan="3"><input type="submit" name="submit" value="simpan"/>&nbsp;
                <input type="reset" name="reset" value="reset">
            </td>
        </tr>
      </table>
    </form>
      <?php
        if(isset($_POST['submit'])){
          $nama = $_POST['nama'];
          $mk = $_POST['mk'];
          $jk = $_POST['jk'];
          $email = $_POST['email'];

          echo "INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS <br/> ";
          echo "Nama : " .$nama;
          echo "<br/>Mata Kuliah : ". $mk;
          echo "<br/>Jenis Kelamin : ". $jk;
          echo "<br/>Email: ". $email;
        }
          ?>
  </body>
</html>
