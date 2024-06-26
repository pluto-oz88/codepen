<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="worko-tabs">

        <input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked />
        <input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two" />
        <input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
        <input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four" />
        <input class="state" type="radio" title="tab-five" name="tabs-state" id="tab-five" />
        <input class="state" type="radio" title="tab-six" name="tabs-state" id="tab-six" />

        <div class="tabs flex-tabs">
            <label for="tab-one" id="tab-one-label" class="tab">Tab One</label>
            <label for="tab-two" id="tab-two-label" class="tab">Tab Two</label>
            <label for="tab-three" id="tab-three-label" class="tab">Tab Three</label>
            <label for="tab-four" id="tab-four-label" class="tab">Tab Four</label>
            <label for="tab-five" id="tab-five-label" class="tab">Tab Five</label>
            <label for="tab-six" id="tab-six-label" class="tab">Tab Six</label>


            <div id="tab-one-panel" class="panel active">
                <h3>Responsive CSS Tabs - Flexbox</h3>
                <p>CSS only tabs built using flexbox, when the viewport drops below 600px wide the tabs turn into an accordion by chaging the flex order of the elements.</p>
            </div>
            <div id="tab-two-panel" class="panel">
                Tab two content
            </div>
            <div id="tab-three-panel" class="panel">
                Tab three content
            </div>
            <div id="tab-four-panel" class="panel">
                Tab four content
            </div>
            <div id="tab-five-panel" class="panel">
                Tab five content
            </div>
            <div id="tab-six-panel" class="panel">
                Tab six content
            </div>
        </div>

    </div>

</body>

</html>