<?php
// Get query parameters
$file = $_GET['file'] ?? '017040';
$text1 = $_GET['text1'] ?? '';
$size1 = intval($_GET['size1'] ?? 24);
$text2 = $_GET['text2'] ?? '';
$size2 = intval($_GET['size2'] ?? 32);
$width = intval($_GET['width'] ?? 700);

// Image validation
$imagePath = "./images/{$file}.jpg";
if (!file_exists($imagePath)) {
    die("Image not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meme Preview</title>
    <style>
        .meme-container {
            position: relative;
            width: <?= $width ?>px;
            margin: auto;
        }
        .meme-container img {
            width: 100%;
        }
        .meme-text {
            position: absolute;
            width: 100%;
            text-align: center;
            color: white;
            font-family: 'Arial', sans-serif;
            text-shadow: 2px 2px 5px black;
        }
        .meme-text.top {
            top: 10px;
            font-size: <?= $size1 ?>px;
        }
        .meme-text.bottom {
            bottom: 10px;
            font-size: <?= $size2 ?>px;
        }
    </style>
</head>
<body>
    <div class="meme-container">
        <img src="<?= $imagePath ?>">
        <div class="meme-text top"><?= htmlspecialchars($text1) ?></div>
        <div class="meme-text bottom"><?= htmlspecialchars($text2) ?></div>
    </div>
</body>
</html>
