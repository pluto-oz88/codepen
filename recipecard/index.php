<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https: //maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </script>
    <script src="https: //code.jquery.com/jquery-2.2.4.min.js"></script>
    </script>
    <script src="https: //cdnjs.cloudflare.com/ajax/libs/ionicons/7.1.2/esm/ionicons.min.js"></script>
</head>

<body>
    <div class="absolute top-0 left-0 w-full z-50 h-screen flex justify-center items-center p-4 md:p-6 lg:p-8">
        <div class="max-w-lg bg-gradient-to-b from-white/60 to-white/30 text-[#1c0708] backdrop-blur-[.65em] border-[1px] border-solid border-white border-opacity-10 rounded-2xl shadow-black/50 overflow-hidden shadow-2xl hover:-translate-y-1 hover:shadow-black/75 hover:backdrop-blur-[1em] transition">
            <div class="grid place-items-center grid-cols-6 gap-2">
                <div class="col-span-3 p-8">
                    <h2 class="font-bold text-2xl">
                        Burrata & Balsamic Roasted Tomato Crostini
                    </h2>
                    <div class="tag-lines">
                        <span class="tag">Dairy</span> <span class="tag">Vegetarian</span> <span class="tag">Mediterranean</span>
                    </div>
                    <p class="text-sm text-[#1c0708]/60">
                        Oven-roasted tomatoes <br> and herbs paired with smooth burrata cheese, served on baked bread.
                    </p>
                    <div class="panel-heading active" id="headingOne" role="tab">
                        <h4 class="panel-title">
                            <a aria-controls="collapseOne" aria-expanded="true" class="mt-6 py-3 px-5 inline-flex bg-[#e84118] hover:bg-[#c23616] transition-colors text-gray-200 font-bold rounded-full text-sm collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne" role="button">See Recipe</a>
                        </h4>
                    </div>
                </div>
                <div class="col-span-3 -mt-5 -mb-10">
                    <img alt="" class="recipe_img" src="https://assets.codepen.io/4927073/tomato_board2.png">
                </div>
            </div>
            <div aria-labelledby="headingOne" class="panel-collapse collapse" id="collapseOne" role="tabpanel">
                <div class="panel-body">
                    <div class="panel-top">
                        <div class="level-item">
                            <div>
                                <div class="heading">
                                    Total Servings: 2
                                </div>
                                <div class="heading">
                                    Prep Time: 5 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ingredients">
                        <h3 class="ingredients">
                            Ingredients:
                        </h3>
                        <ul class="ingredients">
                            <li>
                                <label><input checked="checked" type="checkbox"> <span>12 ounces burrata</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>2 cups cherry tomatoes</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>1 Tbsp olive oil</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>1 Tbsp balsamic vinegar</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>2 tsp honey</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>1 clove garlic</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>½ tsp dried basil</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>1 tsp chopped fresh thyme</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>¼ tsp dried oregano</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>salt & pepper</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>chili flakes</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"><span>1 baguette</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="directions">
                        <h3 class="directions">
                            Directions:
                        </h3>
                        <ol class="directions">
                            <li>
                                <label><input type="checkbox"> <span>Preheat oven to 375°F.</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"> <span>Slice tomatoes and toss in oil, balsamic vinegar, honey, garlic, basil, thyme, and oregano. Season with salt and pepper.</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"> <span>Slice baguette and drizzle with olive oil.</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"> <span>Toast up bread in a hot skillet until golden brown.</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"> <span>Spread on fresh burrata cheese.</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"> <span>Top with marinated tomato slices. Then bake for 12-15 minutes.</span></label>
                            </li>
                            <li>
                                <label><input type="checkbox"> <span>Top with parmesan, warm marinara sauce, oregano, and chili flakes.</span></label>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>