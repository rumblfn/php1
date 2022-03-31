<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        #loading {
            display: none;
            position: absolute;
            top:0px;
            left:0px;
        }
    </style>
</head>

<body>
    <button id="show" class="show">Покажи собачку</button>
    <br>
    <img width="300" src="" id="dogImage">
    <span id="loading"><img width="300" src="download.gif"></span>
    <script>
    window.onload = function () {
        document.getElementById('show').onclick = function () {
            $("#loading").css('display', 'block');
            (async () => {
                const response = await fetch('https://dog.ceo/api/breeds/image/random');
                const answer = await response.json();

                $("#dogImage").attr('src', answer.message);
                $("#loading").css('display', 'none');
            })();
        }
    }
    </script>
</body>
</html>