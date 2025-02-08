<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #86d2c5;
            display: flex;
            justify-content: center;

        }
        .container {
            margin-top: 50px;
        }

        a {
            text-decoration: none;
            display: inline;
            border: 1px solid black;
            padding: 5px;
            margin: 10px;
            border-radius: 5px;
            background-color: #FDF89F;
            color: black;
        }

        img {
            width: 200px;
            margin-left: 37px;
            display: inline;
        }

        img:hover {
            width: 205px;
            /* margin-left: 37px; */
            display: inline;
        }

        label {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bolder;
            font-size: 30px;
            color: red;
        }

        #con {
            color :green;
        }
    </style>
</head>
<body>
<!-- <img src="backArrow" alt="Go Home" onclick="Home.php"> -->
    <div class="container">
        <img id="" src="HappyImg.png" alt="fun imogy"><br>
        <label for="" id="con">CONGRATULATIONS!!</label><br>
        <label for="" id="con">PAYMENT RECIEVED!!</label><br><br>
        <a href="Home.php">GO HOME</a>
    </div>
</body>
</html>