<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- </script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script> -->
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <h1>Using the <span>&lt;details&gt;</span> tag to create tabs</h1>
    <div class="details-tabs">
        <details class="details-item" open> <!-- default first "tab" to open -->
            <summary class="details-tab">The details tag</summary>
            <div class="details-content">
                <p>Imagine an <strong>accordion-like element</strong> with <strong>native keyboard support</strong> that doesn't require javascript for control.</p>
                <p>Enter the details tag.</p>
                <details>
                    <summary>The details tag</summary>
                    <p>This is a details tag with content</p>
                </details>
                <p>The details tag gives us a simple accordion with no scripts&mdash;that's great! But it feels like it could be something more...imagine if it could do tabs.</p>
            </div>
        </details>
        <details class="details-item">
            <summary class="details-tab">What about tabs?</summary>
            <div class="details-content">
                <p>Tabs and accordions work in technically the same way, although tabs typically require a shared parent container and containers to build out the tabs and content separate from each other.</p>
                <p>Interactivity is another difference: the ways accordions or tabs are toggled. With accordions it's common to be able to open and close them individually, but with tabs there must always be one, and only one, open.</p>
                <p>At first glance there doesn't seem to be a way to make this work. The structure isn't right. The layout isn't right. The functionality isn't quite right. But each of those problems can be solved if we look a bit closer.</p>
            </div>
        </details>
        <details class="details-item">
            <summary class="details-tab">CSS trickery</summary>
            <div class="details-content">
                <p>With a little help from the <strong>display: contents;</strong> property, we can transform a group of discrete details tags with tab and content area elements as children, into a group of the tab and content area elements from all the details elements mixed together.</p>
                <p>Say you had 3 small buckets of red and blue balls. The buckets can interact with each other or bang together, but the balls inside each bucket can't interact with the balls from the other buckets.</p>
                <p>You could think of what we are doing like pouring all of the small buckets into a larger bucket. Now all of the balls can interact with each other and we can organize them by color in the bigger bucket. With display: contents; it's as if the details tag isn't there at all&mdash;at least visually.</p>
                <p>Now that all the tab and content area elements can interact with each other in the flow of the page, we can use <strong>display: flex;</strong> and <strong>order</strong> to make the tabs flow nicely but also be separate from the content area.</p>
                <p>And that's what you see here! Open up the inspector and have a look.</p>
            </div>
        </details>
        <details class="details-item">
            <summary class="details-tab">UX patches with javascript</summary>
            <div class="details-content">
                <p>So you might have thought we could get by without any JS, but we need it a little. Luckily it's the type of script that you can write once and reuse without reconfiguration.</p>
                <p>The default functionality of the details tab means that it can be toggled open or closed. That's not what we want for tabs. Each details tag must be manually closed and then another opened. We want a tab to stay open and then close when another is picked.</p>
                <p>By watching for attribute changes and blocking keyboard and mouse input from toggling a details tab when a tab is open, we can emulate the expected tab behavior.</p>
                <p>Then it's just a matter of toggling the sibling details tags when another is selected.</p>
            </div>
        </details>
    </div>
</body>

</html>