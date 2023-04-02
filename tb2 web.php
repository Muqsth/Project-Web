<?php
date_default_timezone_set("Asia/Jakarta");
$conn = mysqli_connect ("localhost", "root", "", "koment");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helga Almuqsith - 41821010005 - TB1 PMW</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" a href="stylee.css">
    

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Helga<span>.</span></a>

    <nav class="navbar">
        <a href="#home">home.</a>
        <a href="#about">about me.</a>
        <a href="#traveling">traveling.</a>
        <a href="#contact">contact.</a>
        <a href="#logout">logout.</a>
    </nav> 

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Welcome<span>.</span></h3>
        <span> Ini Adalah Tempat Untuk Berimajinasi </span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae laborum ut minus corrupti dolorum dolore assumenda iste voluptate dolorem pariatur.</p>
        <button class="btn" onclick="welcome()">coba diklik</button>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about</span> me<span>.</span></h1>

    <div class="row">

        <div class="video-container">
            <video src="galeri/vidio about.mp4" loop autoplay muted></video>
            <h3>HelgalmuqsitH</h3>
        </div>

        <div class="content">
            <h3>Helga<span>.</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque sit nemo pariatur corporis perspiciatis aspernatur a ullam repudiandae autem asperiores quibusdam omnis commodi alias repellat illum, unde optio temporibus.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ea est commodi incidunt magni quia molestias perspiciatis, unde repudiandae quidem.</p>
            <a href="#" class="btn">coba diklik</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="galeri/travelling.png" alt="">
        <div class="info">
            <h3>Travelling</h3>
            <span>Indonesia It's a Wonderfull</span>
        </div>
    </div>

    <div class="icons">
        <img src="galeri/motorcycle.png" alt="">
        <div class="info">
            <h3>Riding</h3>
            <span>Clasic motorcycle</span>
        </div>
    </div>

    <div class="icons">
        <img src="galeri/icon-2.png" alt="">
        <div class="info">
            <h3>Financial Management</h3>
            <span></span>
        </div>
    </div>

    <div class="icons">
        <img src="galeri/businessman.png" alt="">
        <div class="info">
            <h3> Personallity </h3>
            <span>Simple</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="traveling" id="traveling">

    <h1 class="heading">Wonderful <span>Indonesia</span>.</h1>

    <div class="box-container">

        <div class="box">
            <div class="video-container">
                <video src="galeri/Paradise Returns.mp4" loop autoplay muted></video>
                <div class="video-icons">
                    <a href="#" class="vid-cart-btn"></a>
                </div>
            </div>
            <div class="content">
                <div class="judul"> Paradise Returns </div>
                <h5> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum necessitatibus nam assumenda, eius consequatur quibusdam vero inventore atque perferendis neque nobis consectetur, quas quaerat. Architecto tenetur sunt officiis commodi sit? </h5>
            </div>
        </div>

        <div class="box">
            <div class="video-container">
                <video src="galeri/vidio 1.mp4" loop autoplay muted></video>
                <div class="video-icons">
                    <a href="#" class="vid-cart-btn"></a>
                </div>
            </div>
            <div class="content">
                <div class="judul"> bali
                     </div>
                <h5> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint aspernatur harum quae quo, dolores vel omnis tempora soluta eveniet ipsum fugit minima doloribus incidunt veritatis a quasi maxime quisquam totam. </h5>
            </div>
        </div>

        <div class="box">
            <div class="video-container">
                <video src="galeri/Tana Toraja.mp4" loop autoplay muted></video>
                <div class="video-icons">
                    <a href="#" class="vid-cart-btn"></a>
                </div>
            </div>
            <div class="content">
                <div class="judul"> Tana Toraja </div>
                <h5> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis sapiente fugit a et voluptas officiis ratione ex odio vel! Dolorum voluptatum a minus nisi ipsum dolores ea doloribus veritatis illo? </h5>
            </div>
        </div>

</section>

<!-- prodcuts section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span>us<span>.</span></h1>

    <div class="row">

        <form action="proses.php" method="post">
            <input type="text" name="nama" placeholder="name" autocomplete="on" class="box">
            <input type="email" name="email" placeholder="email" autocomplete="off" class="box" id="cekemail">
            <input type="text" name="no_hp" placeholder="nomer hp" autocomplete="off" class="box">
            <textarea name="komentar" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <button type="submit" value=<?php echo date("h:i:sa") ;?>  name="submit" class="btn" onclick="checkemail()" required>submit</button>
        </form>

        <div class="image">
            <img src="https://img.freepik.com/free-vector/people-meeting-coffee-shop-waiter-serving-customers-sitting-table-cafe_74855-16212.jpg?size=626&ext=jpg&ga=GA1.2.852485740.1629987263" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links<span>.</span></h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">traveling</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>social media<span>.</span></h3>
            <a href="https://www.instagram.com/muqst.h">Instagram</a>
            <a href="#">Twitter</a>
            <a href="https://wa.me/qr/2U6GLQQSBRVYK1">Whatsapp</a>
            <a href="#">Facebook</a>
        </div>

        <div class="box">
            <h3>contact info<span>.</span></h3>
            <a href="#">(+62) 8997228714</a>
            <a href="#">helgalmuqsith@gmail.com</a>
            <a href="#">Tangerang Selatan</a>
            <a href="data_komen.php">Lihat Komentar</a>
        </div>

    </div>

    <div class="credit"> created by <span> Helga Almuqsith </span> | all rights reserved </div>

</section>

<!-- footer section ends --> 

    <!-- manggil js  -->
    <script language="javascript" src="msg.js"></script> 
</body>
</html>