<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 tabs</title>
    <style>
        .modal {
            padding: 1em;
            max-width: 50ch;
        }

        .modal>* {
            margin: 0 0 0 .5rem;

        }
    </style>
</head>

<body>
    <h1>Modals the <em>easy</em> way</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error suscipit perspiciatis quia fuga vero architecto est minima possimus quo cumque! </p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error suscipit perspiciatis quia fuga vero architecto est minima possimus quo cumque! </p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error suscipit perspiciatis quia fuga vero architecto est minima possimus quo cumque! </p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error suscipit perspiciatis quia fuga vero architecto est minima possimus quo cumque! </p>
    <button class="button open-button">Open Modal</button>

    <dialog class="modal" id="modal">
        <h2>A load of crap</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iusto quis sapiente quae omnis blanditiis repudiandae odio est laboriosam modi quaerat, expedita at illo veniam quas praesentium voluptatem id, magnam nostrum reiciendis temporibus commodi quisquam? Reiciendis similique nisi aspernatur nulla?</p> <button class="button close-button">Close Modal</button>
        <form method="dialog" class="form">
            <label>Your name<input type="text"></label>
            <label>Your email<input type="email"></label>
            <button class="button" type="submit">Submit Form</button>
        </form>
    </dialog>

</body>

<script>
    const modal = document.querySelector('#modal');
    const openModal = document.querySelector('.open-button');
    const closeModal = document.querySelector('.close-button');

    openModal.addEventListener('click', () => modal.showModal());
    closeModal.addEventListener('click', () => modal.close());
</script>

</html>