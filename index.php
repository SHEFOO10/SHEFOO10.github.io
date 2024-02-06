<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="ad.css">
    <link rel="stylesheet" href="status.css">
    <link rel="stylesheet" href="filter.css">
    <link rel="stylesheet" href="./mediaqueries.css">
    <title>Car Services</title>
</head>
<body>
    <nav class='navbar'>
            <div class="nav">
                <img id="logo" src="./images/logo.svg" alt="Nemra">
                <img id="menu" src="./images/iconamoon_menu-burger-horizontal-fill.svg" alt="menu">
            </div>
            <div class="dropdown"></div>
    </nav>
    <div id="ad">
        <img id='ad-img' src="./images/dubai-number-plate-auction 2.png" alt="dubai-number-plate">
        <h4 id="ad-title">بيع واشتري لوحات دبي</h4>
        <p id="ad-description">بخطوات بسيطة وتحويل فوري اونلاين</p>
        <div id="subdiv">
            <p>عندك رقم دبي</p>
            <h4>نشتري جميع ارقام لوحات دبي</h4>
            <a id='contact-now' href="https://example.com">تواصل معنا الآن</a>
        </div>
    </div>
    <div id="numbers">
        <a id='bike-numbers' href="https://example.com">أرقام دراجات</a>
        <a id="car-numbers" href="https://example.com">أرقام سيارات</a>
    </div>
    <div class="container">
        <?php $images_arr = [
        './images/1.png', 
        './images/1-1.png',
        './images/1-2.png',
        './images/1-3.png',
        './images/1-4.png',
        './images/1-5.png',
        './images/1-6.png',
        './images/1-7.png',
        './images/1-8.png',
        './images/1-9.png'
        ]
        ?>
        <?php for ($i=0; $i < 50; $i++):?>
            <div class="card">
                <div class="car">
                    <div class="car-number new exclusive-price">
                        <img src="<?= $images_arr[rand(0, 9)]; ?>" alt="first_car">
                    </div>
                    <div class="car-details">
                        <div class="details">
                            <p>فئة : خصوصي</p>
                            <p>H : كود</p>
                            <p>رقم : 73774</p>
                        </div>
                        <div class="price">
                            <p>السعر</p>
                            <p class="currency">10.900</p>
                            <p>درهم</p>
                        </div>
                        <div class="star">
                            <img src="./images/TEXTS.png" alt="star" width="40" height="40">
                        </div>
                        <div class="contact">
                            <a class='chat-with-us' href="https://wa.me/+201025474376">راسلنا واتساب</a>
                            <a class="call-us" href="https://wa.me/+201025474376">اتصل بنا</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor;?>
        <div class="card" style="visibility: hidden;">
                <div class="car">
                    <div class="car-number new exclusive-price">
                        <img src="<?= $images_arr[rand(0, 9)]; ?>" alt="first_car">
                    </div>
                    <div class="car-details">
                        <div class="details">
                            <p>فئة : خصوصي</p>
                            <p>H : كود</p>
                            <p>رقم : 73774</p>
                        </div>
                        <div class="price">
                            <p>السعر</p>
                            <p class="currency">10.900</p>
                            <p>درهم</p>
                        </div>
                        <div class="star">
                            <img src="./images/TEXTS.png" alt="star" width="40" height="40">
                        </div>
                        <div class="contact">
                            <a class='chat-with-us' href="https://wa.me/+201025474376">راسلنا واتساب</a>
                            <a class="call-us" href="https://wa.me/+201025474376">اتصل بنا</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>
</html>