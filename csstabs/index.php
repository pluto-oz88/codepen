<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Example of CSS-only tabs</h1>
  <div class='tabs'>
    <!-- Flattern structure for adjacent sibling combinator -->

    <!-- Tab 1 & Content -->
    <input type="radio" name="tab" id="tab1" role="tab" checked>
    <label for="tab1" id="tab1-label">Tab 1</label>
    <section aria-labelledby="tab1-label">
      <h2>Content of Tab 1</h2>
      <p>Grohe K200 31656AT0 Composite Sink Granite Grey</p>
    </section>

    <!-- Tab 2 & Content -->
    <input type="radio" name="tab" id="tab2" role="tab">
    <label for="tab2" id="tab2-label">Tab 2</label>
    <section aria-labelledby="tab2-label">
      <h2>Content of Tab 2</h2>
      <p>Hello World</p>
    </section>

    <!-- Tab 3 & Content -->
    <input type="radio" name="tab" id="tab3" role="tab">
    <label for="tab3" id="tab3-label">Tab 3</label>
    <section aria-labelledby="tab3-label">
      <h2>Content of Tab 3</h2>
      <p>Hello World</p>
    </section>

    <!-- Tab 4 & Content -->
    <input type="radio" name="tab" id="tab4" role="tab">
    <label for="tab4">Tab 4</label>
    <section>
      <h2>Content of Tab 4</h2>
      <p>Hello World</p>
    </section>

    <!-- Tab 5 & Content -->
    <input type="radio" name="tab" id="tab5" role="tab">
    <label for="tab5" id="tab5-label">Tab 5</label>
    <section aria-labelledby="tab5-label">
      <h2>Content of Tab 5</h2>
      <p>Hello World</p>
    </section>

    <!-- Tab 6 & Content -->
    <input type="radio" name="tab" id="tab6" role="tab">
    <label for="tab6">Tab 6</label>
    <section>
      <h2>Content of Tab 6</h2>
      <p>Hello World</p>
    </section>

    <input type="url" name="tab" id="tab7" role="tab">
    <label for="tab7" id="tab7-label"><a href="https://treetopheights.com">Home</a></label>

  </div>
</body>

</html>