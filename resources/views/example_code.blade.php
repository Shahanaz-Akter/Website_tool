<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input[type="range"] {
            width: 100%;
        }

        #range-container {
            width: 200px;
        }

        #range-value {
            display: inline-block;
            width: 50px;
            text-align: center;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <body>
        <div id="range-container">
            <input type="range" min="0" max="1000" value="50" id="range-input">
        </div>
        <span id="range-value">50</span>
        <script>
            const rangeInput = document.querySelector('#range-input');
            const rangeValue = document.querySelector('#range-value');
            const rangeContainer = document.querySelector('#range-container');

            function updateRangeValue() {
                rangeValue.textContent = rangeInput.value;
            }

            function updateRangeWidth() {
                const rangeMax = rangeInput.getAttribute('max');
                const rangeWidth = (rangeInput.value / rangeMax) * 100;
                rangeContainer.style.width = rangeWidth + '%';
            }

            rangeInput.addEventListener('input', () => {
                updateRangeValue();
                updateRangeWidth();
            });

            updateRangeValue();
            updateRangeWidth();
        </script>
    </body>

</html>