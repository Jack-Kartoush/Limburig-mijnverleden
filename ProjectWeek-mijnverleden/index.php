<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>Mijn Verleden</title>
</head>

<body>
   

    <?php include("./includs/menu.php"); ?>
    <div class="title-container">
        <div class="title-content">

            <h1 class="title">Limburg <span>MijnVerleden</span></h1>
        </div>
    </div>
    <!-- Cards -->
    <section class="card-section">
        <div class="card-container">
            <div class="card1-content">
                <div class="card1">
                    <h3 class="card-title">Leren met Videos</h3>
                    <p class="card-text">
                        A cellular network or mobile network is a communication network where the link to and from end nodes is wireless. The network is distributed over land areas called "cells", each served by at least one fixed-location transceiver (typically three cell sites or base transceiver stations). These base stations provide the cell
                    </p>
                    <div class="btn-content">
                        <button class="btn-begin"> <a class="btn-link" href="#"> Begin Nu <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                </div>
            </div>
            <div class="card2-content">
                <div class="card2">
                    <h3 class="card-title">Leren met Video's, Teksten <br> && <br> Quiz oefening</h3>
                    <p class="card-text">
                        A cellular network or mobile network is a communication network where the link to and from end nodes is wireless. The network is distributed over land areas called "cells", each served by at least one fixed-location transceiver (typically three cell sites or base transceiver stations). These base stations provide the cell
                    </p>
                    <div class="btn-content2">
                        <button class="btn-begin"> <a class="btn-link" href="#"> Begin Nu <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video   width="520" height="315"-->
    <section class="Video-section">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/z2OfkCFgsHo" class="video">
            </iframe>
        </div>
        <div class="txt-Foto-conteainer1">
            <div class="text-content">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse risus nunc, eleifend eget pulvinar sit amet,
                    sollicitudin sed purus. Ut vitae nisl a dolor imperdiet cursus.
                    Proin facilisis urna a mollis fermentum. Donec orci mauris,
                    varius ut lectus ac, condimentum pulvinar nisl.
                    Cras vitae erat vel mi faucibus efficitur. Quisque viverra,
                    ligula id rhoncus accumsan, ex orci bibendum mauris,
                    sit amet interdum felis mi at libero. Ut mattis interdum
                    sem eu sodales. Praesent sapien orci, lobortis nec pretium sit amet,
                    scelerisque in enim. Proin venenatis posuere ante sit amet sagittis.
                    Etiam aliquam sodales libero, quis rhoncus felis sodales a.
                    Quisque id enim odio.
                </p>
            </div>
            <div class="Over-txt-foto">
                <img src="./img/Banner-mijnverleden.jpg" alt="Niet Gevonden" class="mijnVerleden-foto">
            </div>

        </div>


        <div class="txt-Foto-conteainer2">
            <div class="Over-txt-foto">
                <img src="./img/Banner-mijnverleden.jpg" alt="Niet Gevonden" class="mijnVerleden-foto">
            </div>
            <div class="text-content">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse risus nunc, eleifend eget pulvinar sit amet,
                    sollicitudin sed purus. Ut vitae nisl a dolor imperdiet cursus.
                    Proin facilisis urna a mollis fermentum. Donec orci mauris,
                    varius ut lectus ac, condimentum pulvinar nisl.
                    Cras vitae erat vel mi faucibus efficitur. Quisque viverra,
                    ligula id rhoncus accumsan, ex orci bibendum mauris,
                    sit amet interdum felis mi at libero. Ut mattis interdum
                    sem eu sodales. Praesent sapien orci, lobortis nec pretium sit amet,
                    scelerisque in enim. Proin venenatis posuere ante sit amet sagittis.
                    Etiam aliquam sodales libero, quis rhoncus felis sodales a.
                    Quisque id enim odio.
                </p>
            </div>


        </div>
    </section>
    <!-- Quiz-intro -->
    <section class="Quiz-intro-section">
        <div class="quiz-intro-container">
            <div class="quiz-intro-content">
                <h3 class="intro-quiz">Ben je klaar om aan je Quiz-reis te beginnen ??</h3>
                <label for="item1">
                    <input type="checkbox" id="item1">
                    Ja zeker</label>
                <label for="item2">
                    <input type="checkbox" id="item2">nee, maar ik wil zien hoe goed kan ik doen </label>
                <label for="item3">
                    <input type="checkbox" id="item3"> Het is makkelijk voor mij</label>
                <label for="item4">
                    <input type="checkbox" id="item4"> Ik weet het niet</label>

                <div class="btn-intro-container">
                <a href="#" class="btn-quiz-link"> <button class="btn-intro-quiz">Submit</button></a>
                </div>
            </div>

        </div>
    </section>

<?php include("./includs/footer.php");?>