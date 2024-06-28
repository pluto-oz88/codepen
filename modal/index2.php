<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        dialog::backdrop {
            background-color: hsl(200, 100%, 50%, 0.5);
        }
    </style>
</head>

<body>
    <button data-open-model>Open Modal</button>

    <dialog class="modal" data-modal>
        <div>this is a modal</div>
        <!-- <form method="dialog"> -->
        <form>
            <input type="text" />
            <button type="submit" formmethod="dialog">Cancel</button>
            <button type="submit">Submit</button>
        </form>
        <!-- <button data-close-modal>Close</button> -->
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