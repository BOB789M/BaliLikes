<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Nama: $name\nEmail: $email\nApa yang Disukai: $message\n\n";

    file_put_contents("bali_likes.txt", $data, FILE_APPEND);

    header("Location: index.html");
    exit();
} else {
    echo "Silakan kirim data melalui formulir.";
}
?>
