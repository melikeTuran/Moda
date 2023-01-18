<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Melo&Şulee</title>
    <link rel="stylesheet" href="css\style.css">
  
    <script src="https://kit.fontawesome.com/a5083fbe15.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https:/font.gstatic.com">
    <link href="https:/fonts.googleapis.com/css2?family=Nunitodisplay=swap"   rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

   
</head>
<body>
    <section id="menü">
        <div id="logo">Meloo</div>
        <nav>
             
            <a href=""><i class="fa-solid fa-house-user icon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-info icon"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-user-graduate icon"></i>Projeler</a>
            <a href=""><i class="fa-solid fa-user-group icon"></i>Ekip</a>
            <a href=""><i class="fa-solid fa-phone icon"></i>İletişim</a>
        </nav>
    </section>
    <section id="anasayfa">
        <div id="black">
        </div>
        <div id="icerik">
            <h2>Moda Butik</h2>
            <hr width=300 align: left>
            MŞH moda sayfasına HOŞGELDİNİZ!
        </div>

    </section>
    <section id="hakkimizda">
        <h3> Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Şubemiz Tatvanda olup beğendiğiniz tüm ürünler için sizleri tatvan şubemize bekleriz
                </h5>
            </div>

            <div id="sag">
                <span></span>
                <p id="psag">MŞH Moda</p>
            </div>
            <img src="image/bbb.jpg" alt=""
            class="img-fluid mt100
            ">
            <p id="pson">Hoşgeldiniz</p>
        </div>
    </section>
    <section id=Katalog>
        <div class="container">
            <h3> Kıyafetler</h3>
            <div>
               <div class="card">               
                <img src="image\kiyafetler.png" alt="" class="img-fluid">
                <h5 class="baslikcard" >   <a  href="kiyafetler.html"   >Kiyafetler</h5>
                <p class=cardp> Abiye ve Kıyafetlerimiz </p>

               </div>
               <div class="card">
                <img src="image\kupeler.png" alt="" class="img-fluid">
                <h5 class="baslikcard"><a  href="kupeler.html"   >Küpeler</h5>
                <p class=cardp>Marjinal ve birbirinden özel parça küpelerimiz</p>

               </div>
               <div class="card">
                <img src="image\canta.png" alt="" class="img-fluid">
                <h5 class="baslikcard"><a  href="cantalar.html"   >Çantalar</h5>
                <p class=cardp>Marjinal ve aynı zamanda gösterişli çantalarımız</p>

               </div>

            </div>

        </div>
    </section>


    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>
            <div class="sutun-sol-sag">
                <img src="image/melike.png" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Melike TURAN</h4>
                <p class="ekipp">
                    Abiye tasarımcımız...
                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-square-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
                </div>
            </div>
        </div>

           
            <div class="sutun-sol-sag">
                <img src="image/şule.jpeg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">ŞULE AŞGAROĞLU</h4>
                <p class="ekipp">
                    Takı ve küpe tasarımcımız...
                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-square-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
                </div>
            </div>
            
        </div>

        <div class="sutun-sol-sag">
            <img src="image/hatice.jpeg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">Hatice Şeyma Kızıltaş</h4>
            <p class="ekipp">
                Çanta tasarımcımız...
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fa-brands fa-square-facebook social"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
                <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
            </div>
        </div>
    </section>

    <section id="iletişim">
        <div class="container">
            <h3 id="h3iletişim">İletişim</h3>

             <form action="index.php" method="post">
            <div id="iletişimopak">
                <div id="formgroup">
                  <div id="solform">
                    <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                    <input type="text" name="tel" placeholder="Telefon" required class="form-control">
                  </div>
                    <div id="sağform">
                    <input type="email" name="mail" placeholder="E mail Adresiniz" required class="form-control">
                    <input type="text" name="konu" placeholder="Konu başlığı" required class="form-control">
                    </div>
                </div>
                <textarea name="mesaj" id="" cols="30" placeholder="Mesaj giriniz"rows="10" required class="form-control"></textarea>

                <input type="submit" value="Gönder">

            </div>
                <div id="adres">
                    <h4  id="adresbaslik">Adres : </h4>
                    <p class="adresp"> Melike mahallesi</p>
                    <p class="adresp"> Turan caddesi</p>
                    <p class="adresp">aşgaroğlu sokak no:123</p>
                    <p class="adresp">0539 440 49 05</p>
                    <p class="adresp">Email : turanmlk12@gmail.com</p>
                </div>
            </div>
            </form>
                <footer>
                    <div id="copyright">2023 
                        Tüm Hakları Sakldır
                    </div>
                    <div class="socialfooter
                    ">
                        <a href="#"><i class="fa-brands fa-square-facebook social"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram social"></i></a>
                        <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
                    </div>
                    <a href="#menu"><i class="fa-sharp fa-solid fa-chevron-up" id="up"></i></a>
                </footer>

        </div>
    </section>
  
    <script>"owl/owl.carousel.min.js"</script>
</body>
</html>
<?php
include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"],$_POST["mail"],
$_POST["konu"],$_POST["mesaj"]))
{
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO i̇letisim(adSoyad, telefon, email, konu, mesaj)
     VALUES ('".$adsoyad."','".$telefon."','". $email."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)===True)
    {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir.')</script>";
    }

}

?>