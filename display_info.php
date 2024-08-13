<?php
$filename = "bali_likes.txt";

if (file_exists($filename)) {
    $contents = file_get_contents($filename);
    echo nl2br($contents);  // Convert newlines to <br> tags for HTML output
} else {
    echo "Belum ada data yang dikirim.";
}
?>
