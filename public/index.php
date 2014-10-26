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

</style>

</head>
<body>

<div class="page-header box-header">
    <h2>Whack Away!</h2>
</div>

<div class="main-box">

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

</body>
<script src="/includes/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">

    var game;

    function genRand() {
        // Generate Random Number b/w 1-9
        return Math.floor(Math.random() * 9) + 1;
    }

    function runGame() {
        
        clearInterval(game);

        game = setInterval(function () {
            // Fade out all moles
            $('.mole').fadeOut();
            
            // Get random integer
            var randNum = genRand();
            // console.log(randNum);

            // Get random box from moles array
            var randBox = moles[randNum - 1];
            // console.log(randBox);

            // Fade in random box
            $(randBox).fadeIn(200);
        }, 1000);
    }

    // function stopGame() {
    //     clearInterval
    // }

    // Define array of boxes
    var moles = $('.mole');
    // console.log(array);

    var start = document.getElementById('start-btn');
    start.addEventListener('click', runGame, false);

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