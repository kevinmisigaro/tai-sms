<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ env('APP_NAME') }}
    </title>
    <meta name="description" content="">
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body x-data="{ eng: true }">
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url('img/tai-kids.png')">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/tailogowhite.png" alt="logo" style="max-width: 200px">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="#" x-on:click="eng = ! eng" x-text="eng ? 'Badilisha lugha': 'Change language'"
                            id="chat" class="text-white lead mr-2"></a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" x-text="eng ? 'Get informed via messages.': 'Pata taarifa kupitia ujumbe.'"
                data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="display-3 text-white font-weight-bold my-5"></h1>

            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="lead text-white my-4"
                x-text="eng ? 'Get engaged with Tai Tanzania! All information on sexual reproductive health is now at the grasp of your fingertips.' : 'Pata ujumbe na Tai Tanzania! Taarifa zote kuhusu afya ya uzazi sasa ziko mikononi mwako.' ">
            </p>

            <a href="#" x-text="eng ? 'Text us now': 'Tutumie ujumbe sasa'" data-aos="fade" data-aos-easing="linear"
                data-aos-duration="1000" data-aos-once="true" style="background: black"
                class="btn my-4 text-white font-weight-bold atlas-cta"></a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-1 py-0">
        <h2 class="text-center font-weight-bold my-5" x-text="eng ? 'Our statistics': 'Takwimu zetu'"></h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <h4 x-text="eng ? 'Messages sent': 'Ujumbe zilizotumwa'"></h4>
                <p style="font-size: 50px">
                    {{ count($messages) }}
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">

                <h4 x-text="eng ? 'People reached': 'Walengwa waliofikiwa'"></h4>
                <p style="font-size: 50px">
                    {{ count($users) }}
                </p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <h4 x-text="eng ? 'Regions reached': 'Mikoa iliofikiwa'"></h4>
                <p style="font-size: 50px">
                    10
                </p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-2">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold" x-text="eng ? 'Toll free': 'Hamna ushuru'"></h2>
                    <p class="my-4" style="color: black"
                        x-text="eng ? 'Get information on education, health, and updates on Tai, or just chat with us, for free! This ensures we can communicate with our stakeholders and beneficaries regardless of their financial status.': 'Pata maelezo kuhusu elimu, afya na masasisho kuhusu Tai, au piga gumzo nasi tu, bila malipo! Hii inahakikisha kwamba tunaweza kuwasiliana na washikadau wetu na wanufaika bila kujali hali yao ya kifedha.'">
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center">
                    <img src="{{ asset('img/Lucy_promo.png') }}" style="margin-top: -20px; max-width: 350px" alt="..."
                        class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (green background) -->
    <div class="jumbotron jumbotron-fluid feature" style="margin: 0 0; padding: 0 0" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold" style="color: white"
                        x-text="eng ? 'Safe and reliable': 'Salama na ya kuaminika'"></h2>
                    <p class="my-4" style="color: white"
                        x-text="eng ? 'All your chats and information are safely kept with us, encrypted and hidden to ensure confidentiality.': 'Soga na maelezo yako yote yanatunzwa kwa usalama, yamesimbwa na kufichwa ili kuhakikisha usiri.'">
                    </p>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center flex-md-first">
                    <img src="{{ asset('img/Zongwe_promo.png') }}" style="max-width: 300px" alt="Safe and reliable"
                        class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url('img/contact-bk.jpg');">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-12 text-white">
                    <h2 class="font-weight-bold text-center" x-text="eng ? 'Text Us': 'Tutumie ujumbe'"></h2>
                    <p class="my-4 text-center"
                        x-text="eng ? 'Sending us your details will allow us to start chatting with you.' : 'Kututumia maelezo yako kutaturuhusu kuanza kupiga gumzo nawe.'">
                    </p>
                    <br>
                    <form action="/sendMsg" method="POST">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-12">
                                <label
                                    x-text="eng ? 'Enter your Phone number below': 'Ingiza namba yako ya simu'"></label>
                                <input type="text" name="phone"
                                    placeholder="Enter your phone number as follows 0744******" class="form-control"
                                    id="phone">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <button type="submit" style="padding: 10px 60px; background: #6c4130"
                                x-text="eng ? 'Text Us': 'Tutumie Ujumbe'"
                                class="btn text-white font-weight-bold my-3"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © {{ date("Y") }} , Tai Tanzania.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="https://web.facebook.com/taitanzania" target="_blank"
                        class="d-inline-block text-center ml-2">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/taitanzania?s=21" target="_blank"
                        class="d-inline-block text-center ml-2">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/tai-tanzania/" target="_blank"
                        class="d-inline-block text-center ml-2">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/c/TaiTanzania" target="_blank"
                        class="d-inline-block text-center ml-2">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({});

        $("#chat").click(function () {
            $('html, body').animate({
                scrollTop: $("#contact").offset().top
            }, 2000);
        });

    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @include('sweetalert::alert')
</body>

</html>
