<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        dialog::backdrop {
            background-color: hsl(50, 100%, 50%, 0.5);
        }

        dialog {
            background-color: pink;
            height: fit-content;
            width: inherit;

        }

        iframe {
            display: block;
            border: 10px solid black;
            width: 100%;
            height: 100%;
            margin-inline: auto;
        }
    </style>
</head>

<body>
    <button data-open-model>Open Modal</button>

    <dialog class="modal" data-modal>
        <iframe src="../index.html"></iframe>
        <button data-close-modal>Close</button>
    </dialog>

    <script>
        const openButton = document.querySelector('[data-open-model]');
        const closeButton = document.querySelector('[data-close-modal]');
        const modal = document.querySelector('[data-modal]');

        openButton.addEventListener('click', () => {
            modal.showModal();
        })

        closeButton.addEventListener('click', () => {
            modal.close();
        })
    </script>


</body>

</html>