<?php
  

  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
  }

  



   // Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
    
    $recipient          = $_POST['mailto'];
    $mail              = $_POST['email'];
    $mailreplay         = $_POST['mailreplay'];
 

    
    $subject = 'Anfrage Enastra';

    $mailEnder = 'noreply@' . split('@', $recipient)[1];

    $headers = "From: ".$mailEnder. "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $message = '<html><body>';
    $message .= '<h1>' . $subject . '</h1>';
    $message .= '<table rules="all" style="border-color: #000;" cellpadding="10">';
    $message .= "<tr style='background: #fff;'>
    <td>
        <strong>Absender:</strong> 
    </td>
    <td>" . 

      foreach ($_POST as $values => $value) {
              //versuchen, die zwei ersten versteckten felder herrauszu lösen
              echo $value . "<br>";
          }
          ."<br>
   </td>
</tr>"; 
$message .= "</table>";
$message .= "<br>";
$message .= "<strong>Anfrage: </strong>";
$message .= "<br>";
$message .= "<p>" . $bemerkung . "</p>";
$message .= "</body></html>";

// build tamplate

$headers_customer = "From: " . $mailEnder . "\r\n";
$headers_customer .= "MIME-Version: 1.0\r\n";
$headers_customer .= "Content-Type: text/html; charset=utf-8\r\n";

$message_customer = '<html><body>';
$message_customer .= '<h1>' . $subject . '</h1>';
$message_customer .= '<table rules="all" style="border-color: #000;" >';
$message_customer .= "<tr style='background: #fff;'>";


$message_customer .= "<strong>Bemerkung: </strong>";
$message_customer .= "<br>";
$message_customer .= "<p>" . $bemerkung . "</p>";
$message_customer .= "<br>";
$message_customer .= "Wir werden Ihre Anfrage so schnell wie möglich bearbeiten.";
$message_customer .= "</body></html>";



        // Send the email.
if ( mail($recipient, $subject, $message, $headers) ) {
        // Set a 200 (okay) response code.
    http_response_code(200);
    echo "sent...";
} else {
            // Set a 500 (internal server error) response code.
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message.";
}

        // Send the email.
if ( mail($mail, $subject, $message_customer, $headers_customer) ) {
            // Set a 200 (okay) response code.
    http_response_code(200);
    echo "sent";
} else {
            // Set a 500 (internal server error) response code.
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message. --> $send";
}






} else {
        // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
    go("home");
}

?>