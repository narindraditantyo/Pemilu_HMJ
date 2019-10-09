<!DOCTYPE html>

<html>
    <head>  
        <title>HIMFO</title>
        <link href="../HIMFO.png" rel="icon" type="image/png">
        <link href="style.css"rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="page" class="main-container" style="height: 862px;">
            <section class="background">
                <div class="overlay"></div>
            </section>
            <section class="header">
                <img alt="binus-malang" src="../binusribbon.png" height=500px  class=ribbon>
                <img alt="binus-malang" src="../binus.png" height=100px  >
                <img alt="logoHIMFO" src="../HIMFO.png" height=100px  >
                <p class=kananfl>PEMILIHAN KETUA HIMFO BINUS MALANG</p>
                </h1>
            </section>
            <section class="wrapper">

            </section>
        </div>

        <nav class=NAV>
            <?php 
                date_default_timezone_set('Asia/Jakarta');
                echo "<i>".date('l, d/M/Y')."</i>"."   ";  
            ?>
            <a href="../index.php"> Halaman Utama</a>
        </nav>
        
        <div class=bg>
            <style>
                .bg{
                  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  padding-left:100px;
                  width:   85%;
                  background:white;
                  height:fit-content;
                  padding-top:20px;
                  padding-bottom:50px;
                  padding-right:100px;
                  text-align:center;
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
                fieldset{
                    text-align:left;
                    border:1px rgb(46,141,235);
                    width:200px;
                    height:100px;
                }
            </style>
            <p class=merah>SETIAP PEMILIH MENDAPAT KESEMPATAN MEMILIH HANYA <B><I><U>SATU KALI</U></I></B></p>
          <fieldset>
              <legend>CALON 1</legend>
              <img src="" alt="">
          </fieldset>
          <fieldset>
              <legend>CALON 2</legend>
              <img src="" alt="">
          </fieldset>
        </div>



    </html>