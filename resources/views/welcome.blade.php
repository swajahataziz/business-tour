<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Бизнестур.онлайн</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--link rel="stylesheet" href="css/bootstrap.css"-->
    <!--link rel="stylesheet" href="css/simple-line-icons.css"-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">

</head>

<body>
    <header>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-xl">
                    <a href="" class="navbar-brand">
                        <img src="img/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler tog-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Подбор</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Как это работает</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Преимущества</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Отзывы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Новости</a>
                            </li>
                        </ul>
                        <div class="navbar-text nav-phone">

                            <span>
                                <span class="icon-call-in"></span>&nbsp;&nbsp;8&nbsp;800&nbsp;775&nbsp;00&nbsp;00</span>
                        </div>
                        <button class="btn btn-primary badge-pill index-enter" type="submit">
                            <span>Вход</span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>



        <div id="carousel-example-generic" class="carousel slide conainer-fluid" data-ride="carousel">
            <!-- Указатели -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Контент слайда (slider wrap)-->
            <div class="carousel-inner">
                <div class="carousel-item active" id="index-carousel-back-1">
                    <div>
                        <div class="index-caption">Оплачивайте
                            <br> командировки
                            <br> через депозит</div>
                        <div class=index-caption-small>С закрывающими документами</div>
                        <div class="index-caption-medium">онлайн</div>
                        <div class="index-register">
                            <button class="btn btn-primary badge-pill" type="submit">
                                <span>Регистрация</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" id="index-carousel-back-1">
                    <div>
                        <div class="index-caption">Оплачивайте
                            <br> командировки
                            <br> через депозит</div>
                        <div class=index-caption-small>С закрывающими документами</div>
                        <div class="index-caption-medium">онлайн</div>
                        <div class="index-register">
                            <button class="btn btn-primary badge-pill" type="submit">
                                <span>Регистрация</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" id="index-carousel-back-1">
                    <div>
                        <div class="index-caption">Оплачивайте
                            <br> командировки
                            <br> через депозит</div>
                        <div class=index-caption-small>С закрывающими документами</div>
                        <div class="index-caption-medium">онлайн</div>
                        <div class="index-register">
                            <button class="btn btn-primary badge-pill" type="submit">
                                <span>Регистрация</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <section>
        <div class="container index-head">
            <h1>выберите опции командировки</h1>
        </div>
        <div class="container basic index-active-container">
            <div class="row">
                <h2>Билеты</h2>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-12 col-lg-auto">
                        <div class="index-lettering">Транспорт</div>
                        <button class="btn btn-primary circle-btn location">
                            <span></span>
                        </button>
                        <button class="btn btn-primary circle-btn circle-btn-active train">
                            <span></span>
                        </button>
                        <button class="btn btn-primary circle-btn bus">
                            <span></span>
                        </button>
                    </div>
                    <div class="col col-lg-auto">
                        <div class="index-lettering">Откуда</div>
                        <input type="text" class="badge-pill from-to">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Куда</div>
                        <input type="text" class="badge-pill from-to">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Дата вылета,</div>
                        <br>
                        <input type="text" class="badge-pill date">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Дата возвращения</div>
                        <input type="text" class="badge-pill date">
                    </div>

                </div>
            </form>
        </div>

        <div class="container basic index-container">
            <div class="row">
                <h2>Отель</h2>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-lg-auto">
                        <div class="index-lettering">Место, отель, адрес</div>
                        <input type="text" class="badge-pill adr">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Дата заезда</div>
                        <input type="text" class="badge-pill date">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Дата выезда</div>
                        <input type="text" class="badge-pill date">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Гости</div>
                        <select class="form-control guests badge-pill">
                            <option>1 человек</option>
                            <option>2 человека</option>
                        </select>
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Номера</div>
                        <select class="form-control guests badge-pill">
                            <option>1 номер</option>
                            <option>2 номера</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="container basic index-container">
            <div class="row">
                <h2>Трансфер</h2>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-lg-auto">
                        <div class="index-lettering">Место отправления</div>
                        <input type="text" class="badge-pill adr">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Место назначения</div>
                        <input type="text" class="badge-pill adr">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Дата выезда</div>
                        <input type="text" class="badge-pill date">
                    </div>
                    <div class="col-lg-auto">
                        <div class="index-lettering">Пассажиров</div>
                        <select class="form-control guests badge-pill">
                            <option>1 человек</option>
                            <option>2 человека</option>
                        </select>
                    </div>

                </div>
            </form>
        </div>

        <div class="container index-result">
            <button class="btn btn-primary badge-pill index-find">Подобрать</button>
            <button class="btn btn-primary badge-pill index-add">Добавить маршрут</button>
        </div>

    </section>

    <section class="index-bg-gray">
        <div id="carouselHowItWorks" class="carousel slide container" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="index-how-it-works">
                        <div>
                            <h2 class="index-head">Как это работает</h2>
                        </div>
                        <div>
                            <img src="img/1.png" alt="">
                        </div>
                        <h3>Выбор поездки</h3>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</div>
                        <div>
                            <button class="btn btn-primary badge-pill index-try">Попробовать</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="index-how-it-works">
                        <div>
                            <h2 class="index-head">Как это работает</h2>
                        </div>
                        <div>
                            <img src="img/1.png" alt="">
                        </div>
                        <h3>Выбор поездки</h3>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</div>
                        <div>
                            <button class="btn btn-primary badge-pill index-try">Попробовать</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="index-how-it-works">
                        <div>
                            <h2 class="index-head">Как это работает</h2>
                        </div>
                        <div>
                            <img src="img/1.png" alt="">
                        </div>
                        <h3>Выбор поездки</h3>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled.</div>
                        <div>
                            <button class="btn btn-primary badge-pill index-try">Попробовать</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHowItWorks" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHowItWorks" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



    </section>

    <section>
        <div id="carouselKeepData" class="carousel slide container" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="index-keep">
                        <div class="col offset-0 col-xl-5 offset-xl-7 align-self-end text">
                            <h2 class="index-head">
                                Храним данные
                                <br>
                                <span>всех сотрудников</span>
                            </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled.</p>
                        </div>
                        <div class="col-12 index-keep-image">
                            <img src='img/laptop.png'>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="index-keep">
                        <div class="col offset-0 col-xl-5 offset-xl-7 align-self-end text">
                            <h2 class="index-head">
                                Храним данные
                                <br>
                                <span>всех сотрудников</span>
                            </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled.</p>
                        </div>
                        <div class="col-12 index-keep-image">
                            <img src='img/laptop.png'>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="index-keep">
                        <div class="col offset-0 col-xl-5 offset-xl-7 align-self-end text">
                            <h2 class="index-head">
                                Храним данные
                                <br>
                                <span>всех сотрудников</span>
                            </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled.</p>
                        </div>
                        <div class="col-12 index-keep-image">
                            <img src='img/laptop.png'>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselKeepData" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselKeepData" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



    </section>
    <section class="index-bg-gray">
        <div class="container">
            <div>
                <h2 class="index-head news">Последние новости</h2>
            </div>
            <div class="row index-news">
                <div class="col-12 col-md">
                    <div class="date">30
                        <span class="month">октября</span>
                    </div>
                    <div class="blog-head">Blog-heading</div>
                    <div class="blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown.</div>
                    <div class=index-news-open>
                        <a href="#">ПОДРОБНЕЕ</a>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="date">30
                        <span class="month">октября</span>
                    </div>
                    <div class="blog-head">Blog-heading</div>
                    <div class="blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown.</div>
                    <div class=index-news-open>
                        <a href="#">ПОДРОБНЕЕ</a>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="date">30
                        <span class="month">октября</span>
                    </div>
                    <div class="blog-head">Blog-heading</div>
                    <div class="blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown.</div>
                    <div class=index-news-open>
                        <a href="#">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <h2 class="index-head rewiews">Отзывы наших клиентов</h2>
            </div>
            <div class="row index-rewiews">
                <div class="index-rewiew-block col-12 col-md">
                    <div class="blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown.</div>
                    <div class="row">
                        <div class=col-auto>
                            <div class="index-rewiew-image index-rewiew-image-1"></div>
                        </div>
                        <div class="col-auto">
                            <span class="name">Krishnan Unni</span>
                            <br>
                            <span class="level">Designation</span>
                        </div>

                    </div>
                </div>
                <div class="index-rewiew-block col-12 col-md">
                    <div class="blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown.</div>
                    <div class="row">
                        <div class=col-auto>
                            <div class="index-rewiew-image index-rewiew-image-2"></div>
                        </div>
                        <div class="col-auto">
                            <span class="name">Mariya Jeorge</span>
                            <br>
                            <span class="level">Designation</span>
                        </div>

                    </div>
                </div>
                <div class="index-rewiew-block col-12 col-md">
                    <div class="blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown.</div>
                    <div class="row">
                        <div class=col-auto>
                            <div class="index-rewiew-image index-rewiew-image-3"></div>
                        </div>
                        <div class="col-auto">
                            <span class="name">Akhil Designer</span>
                            <br>
                            <span class="level">Designation</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class='index-register-bottom'>
        <div class="container">
            <div class="row">
                <h2 class="index-head">Регистрация</h2>
            </div>
            <div class="row description">Регистрация в системе не займет много времени и позволит получить доступ к удобному инструменту организации командировок</div>
            <div class="row email-enter">
                <div class="input-group mb-3">
                    <input type="text" class="form-control register badge-pill" placeholder="EMAIL ADDRESS" aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button type="button" class="btn-primary  enter-email-button badge-pill">Регистрация</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-top">
            <div class="row">
                <div class="footer-logo col-md-3 col-12">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="col-md-9 col-12 footer-navigation">
                    <nav>
                        <ul class="navbar">
                            <li>
                                <a href="">Подбор</a>
                            </li>
                            <li>
                                <a href="">Как работает</a>
                            </li>
                            <li>
                                <a href="">Преимущества</a>
                            </li>
                            <li>
                                <a href="">Отзывы</a>
                            </li>
                            <li>
                                <a href="">Новости</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="footer-list col-12 col-sm-6 col-lg-3 offset-0 offset-lg-3">
                    <a href="">О проекте</a>
                    <br>
                    <a href="">Вопросы и ответы</a>
                    <br>
                    <a href="">Партнерская программа</a>
                    <br>
                    <a href="">Обработка данных</a>
                    <br>
                    <a href="">Реклама на сайте</a>
                    <br>
                    <a href="">Карта сайта</a>
                    <br>
                </div>
                <div class="footer-list col-sm-6 col-12 col-lg-3">
                    <a href="">Пресс-центр</a>
                    <br>
                    <a href="">Условия сотрудничества</a>
                    <br>
                    <a href="">Реквизиты</a>
                    <br>
                    <a href="">Обратная связь</a>
                    <br>
                    <a href="">Помощь</a>
                    <br>
                    <a href="">Догоров оферта</a>
                    <br>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 footer-info">
                    <div class="phone">
                        <span class="icon-call-out index-blue-icon"></span>8&nbsp;800&nbsp;775&nbsp;00&nbsp;00</div>
                    <div class="email">
                        <span class="icon-envelope-open index-blue-icon"></span>info@business-tour.online</div>
                    <div class="social-networks">
                        <a href="">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-odnoklassniki" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom">
            <div class="row">
                <div class="copyright col-12 col-sm-6">
                    Copyright © 2018 Consultplus theme.
                </div>
                <div class="fixp-logo col-12 col-sm-6">
                    <span>
                        <img src="img/fixp-logo.png" alt="">
                    </span>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>