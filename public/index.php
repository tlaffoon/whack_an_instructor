<html>
<head>
    <title>Whack A Coder</title>
<style type="text/css">

    .main-box {
        border: solid black 1px;
        height: 600px;
        width: 600px;
        margin: 50px auto;
    }

    .lil-box {
        border: dotted black 1px;
        height: 198px;
        width: 198px;
        float: left;
        background-image: url('/img/gc_face.png');
        display: none;
    }

</style>

</head>
<body>

<div class="main-box">
    <div class="lil-box" id="1"></div>
    <div class="lil-box" id="2"></div>
    <div class="lil-box" id="3"></div>
    <div class="lil-box" id="4"></div>
    <div class="lil-box" id="5"></div>
    <div class="lil-box" id="6"></div>
    <div class="lil-box" id="7"></div>
    <div class="lil-box" id="8"></div>
    <div class="lil-box" id="9"></div>
</div>

</body>
<script src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">

    function genRand() {
        // Generate Random Number b/w 1-9
        return Math.floor(Math.random() * 9) + 1;
    }

    function runGame() {
        var randNum = genRand();
        // console.log(randNum);

    }

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