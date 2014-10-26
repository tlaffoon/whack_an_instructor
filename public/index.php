<html>
<head>
    <title>Whack A Coder</title>
<link rel="stylesheet" type="text/css" href="/includes/bootstrap/css/bootstrap.css">
<style type="text/css">

    .main-box {
        border: solid black 1px;
        height: 596px;
        width: 596px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .lil-box {
        border: solid black 1px;
        height: 198px;
        width: 198px;
        /*background-image: url('/includes/img/gc_face.png');*/
        /*display: none;*/
        float: left;
    }

    .mole {
        display: none;
        height: 100%;
        width: 100%;
        cursor: pointer;
    }

    .no-pad {
        padding: 0px;
        margin: 0px;
    }

    .box-header {
        margin: 0px auto;
        width: 600px;
    }

    .buttons {
        margin: 0px auto;
        height: 50px;
        width: 600px;
    }

    .timer {
        font-size: 50px;
        color: red;

        position: absolute;
        top: 85px;
        right: 50px;
        display:none;
    }

    .center {
        margin: auto;
    }

</style>

</head>
<body>

<div class="container">

    <div id="timer" class="timer">TEST</div>

    <div class="page-header box-header">
        <h2>Whack Away!</h2>
    </div>

    <div id="main-box" class="main-box">

        <div class="row no-pad">
            <div id="1" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
            <div id="2" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
            <div id="3" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
        </div> <!-- End Row -->

        <div class="row no-pad">
            <div id="4" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
            <div id="5" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
            <div id="6" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
        </div> <!-- End Row -->

        <div class="row no-pad">
            <div id="7" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
            <div id="8" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
            <div id="9" class="lil-box">
                <img class="mole" src="/includes/img/gc_face.png">
            </div>
        </div> <!-- End Row -->

    </div> <!-- End Main Container -->

    <div class="buttons">
        <button id="start-btn" class="btn btn-lg btn-success pull-right"> START </button>
        <button id="reset-btn" class="btn btn-lg btn-warning pull-left"> RESET </button>
    </div>
</div> <!-- End Container -->

</body>
<script src="/includes/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">

    var game;
    var time = 5;
    var timer = $('#timer');

    var moles = $('.mole');
    var main = $('#main-box');
    var lils = $('.lil-box');


    function genRand() {
        // Generate Random Number b/w 1-9
        return Math.floor(Math.random() * 9) + 1;
    }

    function runGame() {
        
        clearInterval(game);

        timer.html(time);
        timer.fadeIn();


        game = setInterval(function () {
            // Fade out all moles
            moles.fadeOut();
            
            // Get random integer
            var randNum = genRand();
            // console.log(randNum);

            // Get random box from moles array
            var randBox = moles[randNum - 1];
            // console.log(randBox);

            // Fade in random box
            $(randBox).fadeIn(200);

            time--;
            timer.html(time);

            if (time == 0) {
                stopGame();
            };

        }, 1000);
    }

    function resetGame() {
        // Run a new game
        runGame();
    }

    function stopGame() {

        moles.fadeOut(1000);
        timer.fadeOut(1000);
        
        // lils.fadeOut(1000);
        // main.html('<h1 class="center"> GAME OVER </h1>');



        clearInterval(game);
        // Flash Game Over.
    }


    // console.log(array);

    // Adds event listener to start button
    var start = document.getElementById('start-btn');
    start.addEventListener('click', runGame, false);

    // Honestly; not even necessary.
    var reset = document.getElementById('reset-btn');
    reset.addEventListener('click', resetGame, false);

    // Start An Interval @ 1 second
    // var game = setInterval(runGame, 1000);


    // fade in each random box
    // add event listener on faded in box
    // when clicked:
        // add points
        // decrease interval between fade ins
        // make a sound
        // remove listener on said box when clicked
</script>
</html>