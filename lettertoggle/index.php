<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0  viewport-fit=cover">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <label class="switch">
        <input class="switch__input" type="checkbox" role="switch">
        <svg class="switch__letters" viewBox="0 0 24 24" width="24px" height="24px" aria-hidden="true">
            <g stroke="currentcolor" stroke-linecap="round" stroke-width="4" transform="translate(0,4)">
                <g class="switch__letter">
                    <polyline class="switch__letter-stroke" points="2 2,2 14" />
                    <polyline class="switch__letter-stroke" points="2 2,16 2" stroke-dasharray="14 16" stroke-dashoffset="8" transform="rotate(0,2,2)" />
                    <polyline class="switch__letter-stroke" points="2 8,6 8" stroke-dasharray="4 6" />
                </g>
                <g class="switch__letter" transform="translate(14,0)">
                    <polyline class="switch__letter-stroke" points="2 2,2 14" />
                    <polyline class="switch__letter-stroke" points="2 2,8 2" stroke-dasharray="6 8" />
                    <polyline class="switch__letter-stroke" points="2 8,6 8" stroke-dasharray="4 6" />
                </g>
            </g>
        </svg>
        <span class="switch__text">Power</span>
    </label>

    <br><br><br>
    <button onclick="history.back()">Go Back</button>
</body>

</html>