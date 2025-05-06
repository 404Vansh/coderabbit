<?php
function getRandomElement(array $arr): string {
    return $arr[array_rand($arr)];
}

$quotes = [
    "The best way to get started is to quit talking and begin doing.",
    "Don’t let yesterday take up too much of today.",
    "It’s not whether you get knocked down, it’s whether you get up.",
    "Success is not in what you have, but who you are.",
    "You learn more from failure than from success."
];

$colors = [
    "Red" => "#FF4C4C",
    "Green" => "#4CAF50",
    "Blue" => "#2196F3",
    "Yellow" => "#FFEB3B",
    "Orange" => "#FF9800",
    "Purple" => "#9C27B0"
];

$emojis = ["😀", "🚀", "🌟", "🔥", "🎉", "🍕", "🐱", "🏖️"];

$randomFacts = [
    "Honey never spoils.",
    "Octopuses have three hearts.",
    "Bananas are berries, but strawberries are not.",
    "Cats can’t taste sweetness.",
    "The Eiffel Tower can grow taller in summer."
];

// Final random data pack
$data = [
    'quote' => getRandomElement($quotes),
    'colorName' => array_rand($colors),
    'emoji' => getRandomElement($emojis),
    'fact' => getRandomElement($randomFacts),
    'number' => rand(1, 1000),
    'time' => date("F j, Y, g:i a")
];

$colorHex = $colors[$data['colorName']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🌈 Random Fun Generator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, <?= $colorHex ?>, #ffffff);
            transition: background 1s ease;
            padding: 40px;
            margin: 0;
        }
        .card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            padding: 30px;
            max-width: 700px;
            margin: auto;
            animation: fadeIn 1s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h1 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }
        .section {
            font-size: 1.2em;
            margin-bottom: 15px;
        }
        .emoji {
            font-size: 2em;
        }
        .footer {
            text-align: center;
            font-style: italic;
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= $data['emoji'] ?> Random Fun Generator</h1>
        <div class="section"><strong>Quote:</strong> <?= $data['quote'] ?></div>
        <div class="section"><strong>Lucky Number:</strong> <?= $data['number'] ?></div>
        <div class="section"><strong>Today's Color:</strong> <?= $data['colorName'] ?> <span style="color: <?= $colorHex ?>;">■</span></div>
        <div class="section"><strong>Did you know?</strong> <?= $data['fact'] ?></div>
        <div class="footer">Last generated on <?= $data['time'] ?> — Refresh for more!</div>
    </div>
</body>
</html>
