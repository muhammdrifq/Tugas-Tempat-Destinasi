<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <h1 align="center">List Tempat Wisata</h1>
    <form action="" method="post">
        <table align=center>

            <tr>
                <td></td>
                <td><select name="destinasi" id="">
                    <option selected>-- PILIH DESTINASI --</option>
                    <option value="1">Bukit Bintang 10.000/Tiket</option>
                    <option value="2">Pantai Sadranan 15.000/Tiket</option>
                    <option value="3">Candi Borobudur 50.000/Tiket</option>
                    <option value="4">Candi Prambanan 50.000/Tiket</option>
                    <option value="5">Keraton Yogyakarta 5.000/Tiket</option>
                    <option value="6">Malioboro 5.000/Tiket</option>
                    <option value="7">Pendopo Lawas -> Cafe</option>
                    <option value="8">Goa Pindul 100.000/Tiket</option>
                </select></td>
                <td><input type="submit" value="Enter" name="proses"></td>
            </tr>
        </table>
        <?php
            if(isset($_POST['proses'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "1"){
        ?>
                  <h2 align="center">Bukit Bintang</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang Dipilih</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="bukit" value="input"></td>
                    </tr>
                  </table>
    
          <?php }elseif($destinasi == "2"){ ?>
                  <h2 align="center">Pantai Sadranan</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang Dipilih</td>
                      <td>:</td>
                      <td>Pantai Sadranan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="pantai" value="input"></td>
                    </tr>
                  </table>
                    
          <?php }elseif($destinasi == "3"){ ?>
                  <h2 align="center">Candi Borobudur</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang DIpilih</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="candi" value="input"></td>
                    </tr>
                  </table>
                
          <?php }elseif($destinasi == "4"){ ?>
                  <h2 align="center">Candi Prambanan</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang DIpilih</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="candi" value="input"></td>
                    </tr>
                  </table>
                 
          <?php }elseif($destinasi == "5"){ ?>
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang Dipilih</td>
                      <td>:</td>
                      <td>Keraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="keraton" value="input"></td>
                    </tr>
                  </table>
           
          <?php }elseif($destinasi == "6"){ ?>
                  <h2 align="center">Malioboro</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang Dipilih</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="malioboro" value="input"></td>
                    </tr>
                  </table>
                
         <?php }elseif($destinasi == "7"){ ?>
                  <h2 align="center">Pendopo Lawas</h2>
                  <table align="center" cellpadding="6">
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Daftar Menu</th>
                      <th>Harga</th>
                    </tr>

                    <tr>
                      <td>Ayam Geprek</td>
                      <td>Rp.50.000</td>
                    </tr>

                    <tr>
                      <td>Gudeg</td>
                      <td>Rp.45.000</td>
                    </tr>

                    <tr>
                      <td>Sate</td>
                      <td>Rp.30.000</td>
                    </tr>

                    <tr>
                      <td>Wedang Ronde</td>
                      <td>Rp.15.000</td>
                    </tr>

                    <tr>
                      <td>Kopi</td>
                      <td>Rp.5.000</td>
                    </tr>

                    <tr>
                      <td>Indomie Kuah Telor</td>
                      <td>Rp.10.000</td>
                    </tr>

                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  <div align="center" class="cafe">
                        <select name="pilih">
                        <option selected>-- Pilih Menu --</option>
                        <option value="1">Ayam Geprek</option>
                        <option value="2">Gudeg</option>
                        <option value="3">Sate</option>
                        <option value="4">Wedang Ronde</option>
                        <option value="5">Kopi</option>
                        <option value="6">Indomie Kuah Telor</option>
                      </select>
                     <input style="align = center" type="number" name="jumlah1" placeholder="Pesan berapa">
                     <input style="align = center" type="number" name="bayar1" placeholder="Bayar">
                     <input style="align = center" type="submit" name="cafe" value="OK">
                  </div>
         <?php }elseif($destinasi == "8"){ ?>
                  <h2 align="center">Goa Pindul</h2>
                  <table align="center">
                    <tr>
                      <td>Destinasi yang Dipilih</td>
                      <td>:</td>
                      <td>Goa Pindul</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="goa" value="input"></td>
                    </tr>
                  </table>
                    
          <?php }
            }
            if(isset($_POST['bukit']))
            {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                $total = $jumlah * 10000;

                if ($jumlah >= 7)
                {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah >= 5)
                {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah < 4)
                {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                }
                else
                {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir;
          ?> 
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>

                <table align="center">
                <?php
                
                if ($bayar < $totalakhir)
                {
                    echo "<table>";
                        echo "<tr>";
                            echo "<td >Mohon Maaf Uang Anda Kurang, Silahkan Lakukan Pembayaran Kembali</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>
                </table>

                <table align="center">
                <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>

                </table>

                
          <?php }

            if(isset($_POST['pantai']))
            {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                $total = $jumlah * 15000;

                if ($jumlah >= 7)
                {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                }
                
                elseif ($jumlah >=5)
                {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                }
                
                elseif ($jumlah < 4)
                {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                }

                else
                {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>

                <?php
                
                if ($bayar < $totalakhir)
                {
                    echo "<table>";
                        echo "<tr>";
                            echo "<td >Mohon Maaf Uang Anda Kurang, Silahkan Lakukan Pembayaran Kembali</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>

         <?php }

            if(isset($_POST['candi']))
            {

                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                $total = $jumlah * 50000;

                if ($jumlah >= 7)
                {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;

                }
                elseif ($jumlah >= 5)
                {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah<4)
                {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                }
                else
                {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>

                <?php
                
                if ($bayar < $totalakhir)
                {
                    echo "<table>";
                        echo "<tr>";
                            echo "<td >Mohon Maaf Uang Anda Kurang, Silahkan Lakukan Pembayaran Kembali</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>

          <?php }

            if(isset($_POST['malioboro']))
            {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                $total = $jumlah * 5000;

                if ($jumlah >= 7)
                {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah >= 5)
                {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah < 4)
                {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                }
                else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir;
          
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>

                <?php
                
                if ($bayar < $totalakhir)
                {
                    echo "<table>";
                        echo "<tr>";
                            echo "<td >Mohon Maaf Uang Anda Kurang, Silahkan Lakukan Pembayaran Kembali</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>

          <?php }

            if(isset($_POST['goa']))
            {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                $total = $jumlah * 100000;

                if ($jumlah >= 7)
                {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah >= 5)
                {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                }
                elseif ($jumlah < 4)
                {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                }
                else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>

                <?php
                
                if ($bayar < $totalakhir)
                {
                    echo "<table>";
                        echo "<tr>";
                            echo "<td >Mohon Maaf Uang Anda Kurang, Silahkan Lakukan Pembayaran Kembali</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>

          <?php }

            if(isset($_POST['cafe']))
            {

              $pilih = $_POST['pilih'];
              $jumlah = $_POST['jumlah1'];
              $bayar = $_POST['bayar1'];
              
              if($pilih == 1)
              {
                $total = $jumlah * 50000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 2){
                $total = $jumlah * 45000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 3){
                $total = $jumlah * 30000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 4){
                $total = $jumlah * 15000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 5){
                $total = $jumlah * 5000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 6){
                $total = $jumlah * 10000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }
              $kembalian = $bayar - $totalakhir;
          ?>
               <table align="center">
                 <tr>
                   <td>Total Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $totalakhir;?></td>
                 </tr>
                 <tr>
                   <td>Potongan Harga</td>
                   <td>:</td>
                   <td><?php echo $diskon1;?></td>
                 </tr>
                 <tr>
                   <td>Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $bayar;?></td>
                 </tr>
                 <tr>
                   <td>Kembali</td>
                   <td>:</td>
                   <td><?php echo $kembalian;?></td>
                 </tr>
               </table>

               <?php
                
                if ($bayar < $totalakhir)
                {
                    echo "<table>";
                        echo "<tr>";
                            echo "<td >Mohon Maaf Uang Anda Kurang, Silahkan Lakukan Pembayaran Kembali</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>
          <?php }

          ?>
    </form>    
</body>
</html>