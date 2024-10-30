<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form HTML</title>
</head>
<body>
  <h1>FATIH</h1>
  <!==ini nim saya==>
  <h2>607012300098</h2> 
    Daftar Menu:
    <form action="proses.php" method="GET">
        <table border="1px">
        <tr>
              <td>Daftar Makanan:</td>
              <td></td>
              <td>Harga</td>
             </tr>
             <tr>
              <td>Pecel</td>
              <td>:</td>
              <td>10000</td>
             </tr>
             <tr>
              <td>Nasi Kuning</td>
              <td>:</td>
              <td>12000</td>
             </tr>
             <tr>
              <td>Nasi Goreng</td>
              <td>:</td>
              <td>15000</td>
             </tr>
             <tr>
              <td>Spaghetti</td>
              <td>:</td>
              <td>20000</td>
             </tr>
        </table>
        <br>
        <table border="1px">
        <tr>
              <td>Daftar Minuman : </td>
              <td></td>
              <td>Harga</td>
             </tr>
             <tr>
              <td>Air Mineral</td>
              <td>:</td>
              <td>3000</td>
             </tr>
             <tr>
              <td>Cendol</td>
              <td>:</td>
              <td>5000</td>
             </tr>
             <tr>
              <td>Es Kopi</td>
              <td>:</td>
              <td>7000</td>
             </tr>
             <tr>
              <td>Es teh</td>
              <td>:</td>
              <td>2500</td>
             </tr>
        </table>
        <br>
        Formulir Pesanan:
        <table>
            <tr>
              <td>Makanan</td>
              <td>:</td>
              <td>

                <input type="text" name="makanan" placeholder="Masukkan menu makanan" />
              </td>
            </tr>
            <tr>
              <td>Jumlah Makanan</td>
              <td>:</td>
              <td><input type="text" name="jumlah1" placeholder="Masukan jumlah makanan" /></td>
            </tr>
            <tr>
            <tr>
              <td>Minuman</td>
              <td>:</td>
              <td>
                <input type="text" name="minuman" placeholder="Masukan menu minuman" />
              </td>
            </tr>
            <tr>
              <td>Jumlah Minuman</td>
              <td>:</td>
              <td><input type="text" name="jumlah2" placeholder="Masukan jumlah minuman" /></td>
            </tr>
            <tr>
          </table>
          <input type="submit" value="Kirim" />
    </form>
</body>
</html>
