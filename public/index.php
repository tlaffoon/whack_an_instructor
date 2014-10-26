<html>
<head>
    <title>Whack A Coder</title>
<!-- <link rel="stylesheet" type="text/css" href="/includes/bootstrap/css/bootstrap.css"> -->
<style type="text/css">

    .main-box {
        border: solid black 1px;
        height: 600px;
        width: 600px;
        margin: 50px auto;
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
    }


</style>

</head>
<body>

<div class="main-box">

    <div class="row no-padding">
        <div id="1" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
        <div id="2" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
        <div id="3" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
    </div>

    <div class="row">
        <div id="4" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
        <div id="5" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
        <div id="6" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
    </div>

    <div class="row">
        <div id="7" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
        <div id="8" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
        <div id="9" class="lil-box">
            <img class="mole" src="/includes/img/gc_face.png">
        </div>
    </div>

</div>

</body>
<script src="/includes/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">

    function genRand() {
        // Generate Random Number b/w 1-9
        return Math.floor(Math.random() * 9) + 1;
    }

    function runGame() {
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

    }

    // Define array of boxes
    var moles = $('.mole');
    // console.log(array);

    // Start An Interval @ 1 second
    var game = setInterval(runGame, 1000);


    // fade in each random box
    // add event listener on faded in box
    // when clicked:
        // add points
        // decrease interval between fade ins
        // make a sound
        // remove listener on said box when clicked
</script>
</html>