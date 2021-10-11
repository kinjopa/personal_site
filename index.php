<?php

ini_set('error_reporting',E_ALLl);
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);

require_once 'app/include/database.php';
require_once 'app/include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="stylesheet" type="text/css" href="CSS/Header.css?<?echo time();?>">
    <link rel="icon" href="/img/Logo-osu.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Mate+SC&family=Merriweather:ital,wght@1,300;1,400&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Mate+SC&family=Merriweather:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class=" ">
<div class="container-fluid">
    <div class="container-lg p-0">
        <div id="header" class="row pb-3 pt-3  d-xl-flex justify-content-center align-items-center">
            <div class=" mb-5 mb-lg-0  p-0 col-9 col-xl-7 ">
                <a href="https://www.uc.osu.ru/" class="  navbar-brand"><img src="img/logo.png" class="img-fluid" alt=""></a>
            </div>
            <div id="block-logo" class="   col-12 col-sm-7  col-xl-5">
                <h5 id="sait-p" class="text-center pb-2 ">Сайт Преподователя</h5>
                <div id="block-logo-inner" class="row  d-xl-flex  justify-content-start ">
                    <div class=" col-6 col-sm-6   col-md-5 col-lg-4"> <img src="img/myphoto.jpg" class=" mb-2 h-auto rounded w-100" alt="" width="150" height="193"></div>
                    <div class=" col-6 mb-3 col-md-7">
                        <h6 id="name-pr" class="  ml-5  "><BR>Грекова Людмила Александровна</h6> <span class="   ">Преподователь высшей категории информационных технологий<BR><BR></span> <span class="kyr"  >Куратор группы 20ИС-1</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="nav" class="container-lg p-0  ">
        <nav id="menu-one" class="navbar  rounded  navbar-expand-md  navbar-light  bg-gradient  ">
            <div class="container  rounded">
                <a href="" class=" text-white navbar-brend"></a>
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse  rounded navbar-collapse  d-md-flex  justify-content-end " id="navbarContent">
                    <ul id="menu" class="navbar-nav   text-center text-white ">
                        <li class="nav-item  "><a href="index.php" class="nav-link text-white    ">ГЛАВНАЯ</a></li>
                        <li class="nav-item"><a href="aboutme%20.php" class="nav-link text-white ">ОБО МНЕ</a></li>
                        <li class="nav-item"><a href="contacts.php" class="nav-link text-white ">КОНТАКТЫ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section id="content  ">
        <div class="container-fluid">
            <div id="content-inner" class="container-lg p-0 mt-4 ">
                <div class="row row-cols-2 justify-content-center ">
                    <div class="col-12  col-lg-8 d-none  d-md-block">
                        <div id="gallary">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div id="carousel-img" class="carousel-item active"> <img src="img/1.jpg" class="  img-fluid rounded d-block w-100" alt="..."> </div>
                                    <div id="carousel-img" class="carousel-item"> <img src="img/2.jpg" class=" img-fluid rounded d-block w-100" alt="..."> </div>
                                    <div id="carousel-img" class="carousel-item"> <img src="img/4.jpg" class=" img-fluid rounded d-block w-100" alt="..."> </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Предыдущий</span> </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Следующий</span> </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 gy-2 gy-lg-0 col-lg-4 ">
                        <div id="messag" class="">
                            <h2 id="h2-message" align="center">Связаться со мной</h2>
                            <form action="app/include/send.php" class=" p-3 " method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="* Ваша фамилия" required aria-label="Recipient" name="fam"> </div>
                                <div class="input-group mb-3">
                                    <input required type="text" class="form-control" placeholder="* Ваше имя" aria-label="Recipient" name="name"> </div>
                                <div class="input-group mb-3">
                                    <input required type="text" class="form-control" placeholder="* Группа" aria-label="Recipient" name="group"> </div>
                                <div class="input-group mb-3">
                                    <input required type="email" class="form-control" placeholder="* Ваш email" aria-label="Recipient" name="email"> </div>
                                <div class="mb-3">
                                    <textarea placeholder="* Сообщение" class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary bg-gradient ">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="content-post1" class="row gx-1  row-cols-2 ">
                    <div id="content-post" class=" col-12   p-0 col-lg-8">
                        <h1 id="h1-post" class="text-center p-0 w-100 pb-2  m-0 ">Информация</h1>
                        <div class="  h-xl-auto      "> <img src="img/1510564486_6530b-750x290.jpg" class=" rounded-bottom  w-100 img-fluid   " width="940" alt=""> </div>
                        <div id="post-text" class="p-3">На данном сайте студенты всех групп могут посмотреть актуальные новости , и скачать необходимый материал. </div>
                    </div>

                    <?php
                    $posts = get_posts();
                    $metod = get_metod();
                    ?>

                    <div id="method" class="col-12 rounded col-lg-4 gx-lg-5 mb-5   ">
                         <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner">
                                    <div id="carousel-meth" class="carousel-item rounded w-100 active">
                                        <h2 id="h2-card" class="text-center p-2" >Для студентов</h2>
                                        <div class="card  p-lg-0 rounded-bottom " >

                                            <div class="card-body text-center " id="card-body">

                                                <h6 class="card-subtitle mb-2 text-muted">Информация для студентов</h6>
                                                <p class="card-text">В данном месте будут выкладываться актуальные методички и информационные издания для вашей самостоятельной работы..</p>
                                                <a href="#" class="card-link">Скачать файл</a>

                                            </div>
                                        </div> </div>
                                    <?php
                                    foreach($metod as $metods):
                                        ?>
                                        <div id="carousel-meth" class="carousel-item w-100 rounded">
                                            <h2 id="h2-card" class="text-center p-2" >Для студентов</h2>
                                            <div class="card  p-lg-0 rounded-bottom " >

                                                <div class="card-body text-center  " id="card-body">

                                                    <h6 class="card-subtitle mb-2 text-muted"><?=$metods['title']?></h6>
                                                    <p class="card-text"><?=$metods['text']?></p>
                                                    <a href="../uploads/<?=$metods['file'];?>" class="card-link">Скачать файл</a>

                                                </div>
                                            </div>  </div>
                                    <?php endforeach; ?>

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev"> <span color="black" class="carousel-control-prev-icon bg-dark  " aria-hidden="true"></span> <span class="visually-hidden">Предыдущий</span> </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next"> <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span> <span class="visually-hidden">Следующий</span> </button>
                            </div>
                    </div>
                </div>
                
                <div id="content-post1" class="row gx-1  row-cols-2 ">
                    <?php
                    foreach($posts as $post):
                    ?>
                    <div id="content-post" class=" col-12   p-0 col-lg-8">
                        <h1 id="h1-post" class="text-center p-0 w-100 pb-2  m-0 "><?=$post['title']?></h1>
                        <div class="  h-xl-auto      "> <img src="uploads/<?=$post['image']?>" class=" rounded-bottom  w-100 img-fluid   " width="940" alt=""> </div>
                        <div id="post-text" class="p-3"> <?=$post['content']?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="container-lg  bg-gradient footer footer-text text-center h-auto "> © Грекова Людмила Александровна Университетский колледж ОГУ; г.Оренбург, ул.Одесская, 148. тел.75-56-76, 75-13-40; E-mail:uc@mail.osu.ru </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>