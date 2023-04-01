<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .bar-wrapper {
            width: 300px;
            height: 20px;
            border: 1px solid black;
            position: relative;
        }

        .bar {
            width: 0%;
            height: 100%;
            background-color: green;
        }

        .bar-value {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            padding-left: 5px;
        }
    </style>
</head>

<body>



    <div class="bar-wrapper">
        <div class="bar"></div><span class="bar-value">0</span>
    </div><button onclick="increaseBar()">Increase Bar</button>

    <script>
        function increaseBar() {
            let bar = document.querySelector('.bar');
            let barValue = document.querySelector('.bar-value');

            let width = parseInt(bar.style.width) || 0;
            width += 10;

            bar.style.width = `${width}%`;
            barValue.innerText = width;
        }
    </script>



</body>

</html>