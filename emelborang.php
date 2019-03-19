<?php

// $nama, $emelpelawat, and $mesej are the data that is being
// posted to this page from our html contact form
$nama =  $_REQUEST['nama'];
$emelpelawat =  $_REQUEST['emelpelawat'];
$mesej =  $_REQUEST['mesej'];

require("./PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML(true);
$mail->Username = 'bihatq@gmail.com';
$mail->Password = 'terbilang';
$mail->From = $emelpelawat;
$mail->AddAddress("radiombiv2.mbi@gmail.com", "Radio MBI ver 2");
$mail->Subject = "Maklumbalas bagi Portal Radio MBI dari $nama";

  // HTML Message Starts here
          
  $mail->Body = "
  <html>
      <body>
          <h2>Anda telah menerima maklumbalas dari pelawat Radio MBI. </h2>
          <h3>Ini maklumbalas yang diberi:</h3>
          <table style='width:600px;'>
              <tbody>
                  <tr>
                      <td style='width:150px'><strong>Nama: </strong></td>
                      <td style='width:400px'>$nama</td>
                  </tr>
                  <tr>
                      <td style='width:150px'><strong>Email: </strong></td>
                      <td style='width:400px'>$emelpelawat</td>
                  </tr>
                  <tr>
                      <td style='width:150px'><strong>Maklumbalas: </strong></td>
                      <td style='width:400px'>$mesej</td>
                  </tr>
              </tbody>
          </table>
      </body>
  </html>
  ";
  // HTML Message Ends here

  if(!$mail->Send()) {
    // Message if mail has been not sent
    echo "<script type='text/javascript'>alert('Penghantaran tidak berjaya.');
    window.location='./?home';
    </script>";
    }
    // Message if mail has been sent
    else {
      echo "<script type='text/javascript'>alert('Borang maklumbalas berjaya dihantar.');
      window.location='./?tentang';
      </script>";
    }

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 