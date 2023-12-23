<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Alamat email tujuan
    $to = "ahmadhidayatulkabirali@gmail.com";

    // Subjek email
    $subject = "Pesan dari Formulir Kontak";

    // Isi email
    $email_content = "Nama: $fullname\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Pesan:\n$message";

    // Header email
    $headers = "From: $email";

    // Kirim email
    mail($to, $subject, $email_content, $headers);

    // Redirect ke halaman sukses atau lainnya setelah pengiriman email
    header("Location: success_page.html");
    exit();
}
?>