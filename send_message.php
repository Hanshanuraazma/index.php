<?php 
  $to = 'nunu05867@gmail.com'; 
  $subject = 'Kembar Fried Chicken';
  
  $message = 'Halo,\n\n' .
             'Terima kasih telah menghubungi Kembar Fried Chicken. Kami senang bisa melayani Anda.\n\n' .
             'Salam hangat,\n' .
             'Tim Kembar Fried Chicken\n' .
             'Alamat: Kp. Parakan Sagu, Kec. Pamijahan, Kab. Bogor\n' .
             'Telepon: 085882508760\n';

  $headers = 'From: kembarfriedchicken@gmail.com' . "\r\n" .
             'Reply-To: kembarfriedchicken@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
      echo 'Email berhasil dikirim!';
  } else {
      echo 'Pengiriman email gagal.';
  }
?>
