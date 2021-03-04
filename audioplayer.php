<html>
    <style>
        body {
            margin: 0px;
            background-color: black;
            font-family: Calibri, sans-serif;
        }
        h1 {
            color: white;
            text-align: center;
            font-size: 50;
        }
        video {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            user-select: none;
            -moz-user-select: none;
            -moz-user-focus: normal;
            box-shadow: 0 0 5px rgba(0,0,0,0.6);
            height: 40px;
            width: 60px;

        }
    </style>
    <body>
        <h1><?php $_GET['txt']?></h1>
        <div>
            <video autoplay id="vid" src="<?php $_GET['src'] ?>" controls></video>
        </div>
    </body>
</html>