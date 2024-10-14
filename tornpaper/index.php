<!--
Torn paper photo gallery
Copyright (c) 2024 by Wakana Y.K. (https://codepen.io/wakana-k/pen/ExJEvor)
-->
<!--
TornPaper.js on Github
https://github.com/happy358/TornPaper
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


    <!-- using TornPaper.js -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/happy358/TornPaper@v0.0.2/tornpaper.min.js"></script> -->
<script src="tp.js"></script>
  </head>



<body>

    <main>
        <div id="gallery">
            <article class="card no_bg">
                <div>
                  <img class="stamp" src="..\photos\stamp.jpg" alt="postage stamp">
                    <!-- <h4>Torn paper<br />photo gallery</h4> -->
                    <p>Hi Mum<br>Really enjoying Nusa Penida. We're staying in a great house looking out to the volcano and beyond. Wish you were here.<br><br>
                    Love Arthur</p>
                </div>
            </article>

            <article class="card" style="--img:url('../photos/image003.jpg');">
              
                <h2>Mount Agung</h2>
            </article>

            <article class="card" style="--img:url('https://source.unsplash.com/random/500x500/?fruit&1');">
                <h2>1.Lorem ipsum</h2>
            </article>

            <article class="card" style="--img:url('../photos/image006.jpg');">
                <h2>2.Lorem ipsum</h2>
            </article>

            <article class="card no_bg" style="--img:url('https://source.unsplash.com/random/500x500/?sweet&4');">
                <h2>4.Lorem ipsum</h2>
            </article>

            <article class="card" style="--img:url('../photos/image007.jpg');">
                <h2>3.Lorem ipsum</h2>
            </article>

            <article class="card" style="--img:url('../photos/image005.jpg');">
                <h2>5.Lorem ipsum</h2>
            </article>

            <article class="card" style="--img:url('https://source.unsplash.com/random/500x500/?sweet&6');">
            
            </article>

            <article class="card" style="--img:url('../photos/image001.jpg');">
                <h2>Villa TreeTop</h2>
            </article>

            <article class="card" style="--img:url('../photos/image002.jpg');">
                <h2>8.Lorem ipsum</h2>
            </article>
            <article class="card no_bg">
                <div>
                  <img class="stamp" src="..\photos\stamp.jpg" alt="postage stamp">
                    <p> Hello again Ma<br>Great Scuba diving and snorkelling here. This place is famous for manta rays.<br><br>
                    Love Arthur</p>
                </div>
            </article>
            <article class="card" style="--img:url('../photos/image004.png');">
                <h2>10.Lorem ipsum</h2>
            </article>
        </div>
    </main>
    <footer>
        <p><a target="_blank" href="https://github.com/happy358/TornPaper">TornPaper.js</a> on Github</p>
    </footer>

    <script>
        new Tornpaper({
            grungeScale: 2
        });
    </script>
</body>

</html>