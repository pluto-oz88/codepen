<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            display: block;
            margin: auto;
            width: 10rem;
            height: 2rem;
        }

        :modal {
            background-color: beige;
            border: 2px solid burlywood;
            border-radius: 5px;
        }

        p {
            color: black;
        }
    </style>

</head>

<body>
    <p>Would you like to see a new random number?</p><button id="showNumber">Show me</button>
    <dialog id="favDialog">
        <form method="dialog">
            <p>Lucky number is: <strong id="number"></strong></p><button>Close dialog</button>
        </form>
    </dialog>
    <script>
        const showNumber = document.getElementById('showNumber');
        const favDialog = document.getElementById('favDialog');
        const number = document.getElementById('number');

        showNumber.addEventListener('click', () => {
            number.innerText = Math.floor(Math.random() * 1000);
            favDialog.showModal();
        });
    </script>
</body>

</html>