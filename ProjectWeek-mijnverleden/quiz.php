<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>Quiz</title>
</head>
<?php include("./includs/menu.php") ?>
<div class="container-oefening-quiz">
    <div class="inhoud">
        <form method='post'>

            <div class="vraag1">
                vraag 1:<br />
           
                <div class="anwser1">
                    <input type="radio" id="A1V1" name="Vraag1" value="antwoord1">
                    <label for="A1V1"> antwoord 1</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A2V1" name="Vraag1" value="antwoord2">
                    <label for="A2V1"> antwoord 2</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A3V1" name="Vraag1" value="antwoord3">
                    <label for="A3V1"> antwoord 3</label><br>
                </div>
           
            </div>


            <div class="vraag2">
                vraag 2:<br />
           
                <div class="anwser1">
                    <input type="radio" id="A1V2" name="Vraag2" value="antwoord1">
                    <label for="A1V2"> antwoord 1</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A2V2" name="Vraag2" value="antwoord2">
                    <label for="A2V2"> antwoord 2</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A3V2" name="Vraag2" value="antwoord3">
                    <label for="A3V2"> antwoord 3</label><br>
                </div>
           
            </div>
            <div class="vraag3">
                vraag 3:<br />
           
                <div class="anwser1">
                    <input type="radio" id="A1V3" name="Vraag3" value="antwoord1">
                    <label for="A1V3"> antwoord 1</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A2V3" name="Vraag3" value="antwoord2">
                    <label for="A2V3"> antwoord 2</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A3V3" name="Vraag3" value="antwoord3">
                    <label for="A3V3"> antwoord 3</label><br>
                </div>
           
            </div>
            <div class="vraag4">
                vraag 4:<br />
           
                <div class="anwser1">
                    <input type="radio" id="A1V4" name="Vraag4" value="antwoord1">
                    <label for="A1V4"> antwoord 1</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A2V4" name="Vraag4" value="antwoord2">
                    <label for="A2V4"> antwoord 2</label><br>
                </div>
                <div class="anwser1">
                    <input type="radio" id="A3V4" name="Vraag4" value="antwoord3">
                    <label for="A3V4"> antwoord 3</label><br>
                </div>
           
            </div>
            <input class="submit" type="submit" value="Controleren">

        </form>
    </div>
</div>
<?php include("./includs/footer.php") ?>