<!DOCTYPE html>

<html>

    <head>  
        <title>HIMFO</title>
        <link rel="icon" type="image/png" href="../HIMFO.png">
    </head>
    <body> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <img   alt="binus-malang" src="../binusribbon.png" height=500px  class=ribbon>
        <h1 class=head>
            <img   alt="binus-malang" src="../binus.png" height=100px  >
            <img   alt="logoHIMFO" src="../HIMFO.png" height=100px  >
            <p class=kananfl>PEMILIHAN KETUA HIMFO BINUS MALANG</p>
            
        </h1>

        <nav class=NAV>
            <?php 
                date_default_timezone_set('Asia/Jakarta');
                echo "<i>".date('l, d/M/Y')."</i>"."   ";  
            ?>
            <a href="../index.php">   Halaman Utama</a>
        </nav>
        
        <div class=bg>
            <style>
                .bg{
                  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  padding-left:100px;
                  width:   80%;
                  background:white;
                  float:right;
                  padding-top:20px;
                  padding-bottom:50px;
                  padding-right:100px;
                }
                .merah{
                    color:red;
                    text-align:center;
                    font-size:20px;
                }
                .tengah{
                    text-align:center;
                    font-size:15px;
                }
                .tengahfl{
                    float:right;
                }
            </style>
            <p>
                Prosedur pemilihan :
            <br/>1. Masukkan <b><i><u>NIM</u></i></b>  dan  <b><i><u>Kode Unik</u></i></b>
            <br/>2. Pilih calon yang terdapat pada layar 
            <br/>3. Ketika sudah yakin, klik lanjut
            </p>
            <p class=merah>SETIAP PEMILIH MENDAPAT KESEMPATAN MEMILIH HANYA <B><I><U>SATU KALI</U></I></B></p>
            
                
            <form action="loginHIMFO.php" method="post">
                <fieldset class="tengahfl">
                <legend>LOGIN</legend>
                <legend>
                    <?php 
                        if(isset($_GET['login'])){
                            if($_GET['login']=="false") echo "<h4 style='color:red'>NIM atau KODE SALAH!</h4><br/>";
                            if($_GET['login']=="sqlfail") echo "<h4 style='color:orange'>Database bermasalah, hubungi admin segera!</h4><br/>";
                            if($_GET['login']=="pilih") echo "<h4 style='color:rgb(46,141,235)'>Anda sudah memilih!</h4><br/>";
                        }
                    ?>
                </legend>
                <table >
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="NIM" placeholder="Masukkan NIM"><br/></td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td><input type="text" name="KODE" placeholder="Masukkan kode unik"><br/></td>
                    </tr>
                </table>
                    <input type="submit" value="Masuk">
                </fieldset>
            </form>
            
            

            

        </div>



    </html>