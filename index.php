<?php
$quotes = [
    "The best way to get started is to quit talking and begin doing.",
    "Don’t let yesterday take up too much of today.",
    "It’s not whether you get knocked down, it’s whether you get up.",
    "Success is not in what you have, but who you are.",
    "You learn more from failure than from success."
];

$colors = ["Red", "Green", "Blue", "Yellow", "Orange", "Purple"];
$emojis = ["😀", "🚀", "🌟", "🔥", "🎉", "🍕", "🐱", "🏖️"];
$randomFacts = [
    "Honey never spoils.",
    "Octopuses have three hearts.",
    "Bananas are berries, but strawberries are not.",
    "Cats can’t taste sweetness.",
    "The Eiffel Tower can grow taller in summer."
];

// Random selections
$randomQuote = $quotes[array_rand($quotes)];
$randomColor = $colors[array_rand($colors)];
$randomEmoji = $emojis[array_rand($emojis)];
$randomFact = $randomFacts[array_rand($randomFacts)];
$randomNumber = rand(1, 1000);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Random Things</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #333;
        }
        .section {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Random Stuff Generator</h1>
        <div class="section"><strong>Random Quote:</strong> <?= $randomQuote ?></div>
        <div class="section"><strong>Random Number:</strong> <?= $randomNumber ?></div>
        <div class="section"><strong>Random Color:</strong> <?= $randomColor ?></div>
        <div class="section"><strong>Random Emoji:</strong> <?= $randomEmoji ?></div>
        <div class="section"><strong>Random Fact:</strong> <?= $randomFact ?></div>
        <div class="section"><em>Refresh the page to see new random content!</em></div>
    </div>
</body>
</html>
