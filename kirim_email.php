<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nama = $_POST['nama'];
$email = $_POST['email'];

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nidianti23@gmail.com';
    $mail->Password = 'ljmo iizc pgll jltv';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('nidianti23@gmail.com', 'Admin');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Konfirmasi Pendaftaran';

    $mail->Body = "

    <div style='max-width:600px;margin:auto;background:#fff0f5;border:2px solid #ffb6c1;border-radius:15px;padding:25px;font-family:Arial,sans-serif;'>

        <h1 style='text-align:center;color:#ff69b4;'>
             Konfirmasi Pendaftaran 
        </h1>

        <hr style='border:1px solid #ffc0cb;'>

        <p style='font-size:16px;color:#444;'>
            Halo <b>$nama</b> ,
        </p>

        <p style='font-size:16px;color:#444;line-height:1.8;'>
            Selamat! Pendaftaran Anda telah <b>berhasil diproses</b> dan data Anda sudah kami terima dengan baik.
        </p>

        <p style='font-size:16px;color:#444;line-height:1.8;'>
            Terima kasih telah melakukan pendaftaran.
            Kami sangat senang Anda telah bergabung bersama kami. ✨
        </p>

        <div style='text-align:center;margin-top:25px;'>

            <span style='background:#ff69b4;color:white;padding:12px 25px;border-radius:20px;font-weight:bold;'>
                ✓ PENDAFTARAN BERHASIL
            </span>

        </div>

        <p style='margin-top:35px;color:#888;font-size:13px;text-align:center;'>
            Email ini dikirim otomatis oleh Sistem Pendaftaran.
        </p>

    </div>

    ";

    $mail->send();

    echo "

    <div style='text-align:center;margin-top:100px;font-family:Arial,sans-serif;'>

        <h2 style='color:blue;'>
            ✅ Email Anda berhasil dikirim
        </h2>

        <p>
            Konfirmasi pendaftaran telah dikirim ke alamat email yang didaftarkan.
        </p>

    </div>

    ";

} catch (Exception $e) {

    echo "

    <div style='text-align:center;margin-top:100px;font-family:Arial,sans-serif;'>

        <h2 style='color:red;'>
            ❌ Email gagal dikirim
        </h2>

        <p>$mail->ErrorInfo</p>

    </div>

    ";
}

?>