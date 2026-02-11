<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Operations Demo</title>
</head>
<body>

<h2>File Operations in PHP</h2>

<?php
// 1. Create / overwrite file with initial content
$file = 'poem.txt';
file_put_contents($file, "This is my first poem!\n");

echo "<strong>Original content:</strong><br>";
$content = file_get_contents($file);
echo nl2br(htmlspecialchars($content));
echo "<br><br>";

$filename = "Robotics_club's_research.pdf";

if (!file_exists($filename) || !is_file($filename)) {
    http_response_code(404);
    echo "404 - File not found";
    exit;
}

header('Content-Type: application/pdf');
header('Content-Length: ' . filesize($filename));
header('Content-Disposition: inline; filename="' . basename($filename) . '"');

readfile($filename);
exit;

// 2. Search for a word
$searchWord = "poem";
if (str_contains($content, $searchWord)) {
    echo "Word '<strong>$searchWord</strong>' found ✓<br><br>";
} else {
    echo "Word '<strong>$searchWord</strong>' not found ✗<br><br>";
}

// 3. Formatting examples
echo "<strong>Uppercase version:</strong><br>";
echo nl2br(htmlspecialchars(strtoupper($content)));
echo "<br><br>";

echo "<strong>Lowercase version:</strong><br>";
$lower = strtolower($content);
echo nl2br(htmlspecialchars($lower));
echo "<br><br>";

echo "<strong>Capitalize first letter of each word:</strong><br>";
echo htmlspecialchars(ucwords($lower));
echo "<br><br>";

echo "<strong>Replace 'poem' → 'song':</strong><br>";
echo htmlspecialchars(str_replace('poem', 'song', $lower));
echo "<br><br>";


// 4. Append new content
$moreText = "\nThis is another line of my poem... keep waiting...\n";
file_put_contents($file, $moreText, FILE_APPEND);

echo "<strong>Content after appending:</strong><br>";
echo nl2br(htmlspecialchars(file_get_contents($file)));
echo "<br><br>";

// 5. fopen / fread example
echo "<strong>Using fopen/fread:</strong><br>";
$handle = fopen($file, 'r');

if ($handle) {
    $poemContent = fread($handle, filesize($file));
    echo nl2br(htmlspecialchars($poemContent));
    fclose($handle);
} else {
    echo "Could not open file for reading.";
}
?>

</body>
</html>
