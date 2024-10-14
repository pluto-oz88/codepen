<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="app">

        <div class="cardList">
            <button class="cardList__btn btn btn--left">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
            </button>

            <div class="cards__wrapper">
                <div class="card current--card">
                    <div class="card__image">
                        <img src="https://source.unsplash.com/Z8dtTatMVMw" alt="" />
                    </div>
                </div>

                <div class="card next--card">
                    <div class="card__image">
                        <img src="https://source.unsplash.com/9dmycbFE7mQ" alt="" />
                    </div>
                </div>

                <div class="card previous--card">
                    <div class="card__image">
                        <img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
                    </div>
                </div>
            </div>

            <button class="cardList__btn btn btn--right">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>

        <div class="infoList">
            <div class="info__wrapper">
                <div class="info current--info">
                    <h1 class="text name">Highlands</h1>
                    <h4 class="text location">Scotland</h4>
                    <p class="text description">The mountains are calling</p>
                </div>

                <div class="info next--info">
                    <h1 class="text name">Machu Pichu</h1>
                    <h4 class="text location">Peru</h4>
                    <p class="text description">Adventure is never far away</p>
                </div>

                <div class="info previous--info">
                    <h1 class="text name">Chamonix</h1>
                    <h4 class="text location">France</h4>
                    <p class="text description">Let your dreams come true</p>
                </div>
            </div>
        </div>


        <div class="app__bg">
            <div class="app__bg__image current--image">
                <img src="https://source.unsplash.com/Z8dtTatMVMw" alt="m1" />
            </div>
            <div class="app__bg__image next--image">
                <img src="https://source.unsplash.com/9dmycbFE7mQ" alt="m2" />
            </div>
            <div class="app__bg__image previous--image">
                <img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="m3" />
            </div>
        </div>
    </div>

    <div class="loading__wrapper">
        <div class="loader--text">Loading...</div>
        <div class="loader">
            <span></span>
        </div>
    </div>


    <svg class="icons" style="display: none;">
        <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='328 112 184 256 328 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
        <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='184 112 328 256 184 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
    </svg>


    <div class="support">
        <a href="https://twitter.com/DevLoop01" target="_blank"><i class="fab fa-twitter-square"></i></a>
        <a href="https://dribbble.com/devloop01" target="_blank"><i class="fab fa-dribbble"></i></a>
    </div>


    <br><br><br>
    <button onclick="history.back()">Go Back</button>
    <script src="vs.js"></script>
</body>

</html>