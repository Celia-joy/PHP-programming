<?php
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
?>
