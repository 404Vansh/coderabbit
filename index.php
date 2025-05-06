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
<?php
// Same PHP logic as your original code...
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
      animation: fadeIn 0.7s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    h1 {
      text-align: center;
      color: #444;
      margin-bottom: 20px;
      animation: bounce 1s infinite ease-in-out;
    }

    .section {
      font-size: 1.2em;
      margin-bottom: 15px;
    }

    .emoji {
      font-size: 2em;
      display: inline-block;
      transition: transform 0.4s ease;
    }

    .footer {
      text-align: center;
      font-style: italic;
      margin-top: 20px;
      font-size: 0.9em;
      color: #666;
    }

    .button-container {
      text-align: center;
      margin-top: 25px;
    }

    button {
      background-color: <?= $colorHex ?>;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 1em;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #333;
    }

    #clickCount {
      font-size: 1em;
      text-align: center;
      margin-top: 10px;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="card" id="mainCard">
    <h1><span class="emoji" id="emoji"><?= $data['emoji'] ?></span> Random Fun Generator</h1>
    <div class="section"><strong>Quote:</strong> <span id="quote"><?= $data['quote'] ?></span></div>
    <div class="section"><strong>Lucky Number:</strong> <span id="number"><?= $data['number'] ?></span></div>
    <div class="section"><strong>Today's Color:</strong> <span id="color"><?= $data['colorName'] ?></span> <span style="color: <?= $colorHex ?>;">■</span></div>
    <div class="section"><strong>Did you know?</strong> <span id="fact"><?= $data['fact'] ?></span></div>
    <div class="footer" id="time">Last generated on <?= $data['time'] ?> — Click button for more!</div>
    <div id="clickCount">Times generated: <span id="counter">0</span></div>
    <div class="button-container">
      <button onclick="regenerate()">🔁 Regenerate</button>
    </div>
  </div>

  <script>
    let counter = 0;

    function regenerate() {
      counter++;
      document.getElementById("counter").textContent = counter;

      // Emoji animation
      const emoji = document.getElementById("emoji");
      emoji.style.transform = "rotate(360deg)";
      setTimeout(() => emoji.style.transform = "rotate(0deg)", 400);

      // Refresh page to get new PHP values
      window.location.reload();
    }
  </script>
</body>
</html>
