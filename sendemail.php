<?php 
    require 'vendor/autoload.php';
 
    class SendEmail{

        public static function SendEmail($to, $subject,$content){
            $_APIKEY = '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';
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("trevoir.williams@gmail.com", "Example User");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent($content);

            $sendgrid = new \SendGrid($_APIKEY);
            print_r($sendgrid);
            try {
                $response = $sendgrid->send($email);
                return $response;
            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>
<?php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// // Comment out the above line if not using Composer
// // require("<PATH TO>/sendgrid-php.php");
// // If not using Composer, uncomment the above line and
// // download sendgrid-php.zip from the latest release here,
// // replacing <PATH TO> with the path to the sendgrid-php.php file,
// // which is included in the download:
// // https://github.com/sendgrid/sendgrid-php/releases

// $_APIKEY = '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';

// $email = new \SendGrid\Mail\Mail(); 
// $email->setFrom("trevoir.williams@gmail.com", "Example User");
// $email->setSubject("Sending with Twilio SendGrid is Fun");
// $email->addTo("trevoir.williams@gmail.com", "Example User");
// $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
// $email->addContent(
//     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
// );
// $sendgrid = new \SendGrid($_APIKEY);
// print_r($sendgrid);
// try {
//     $response = $sendgrid->send($email);
// } catch (Exception $e) {
//     echo 'Caught exception: '. $e->getMessage() ."\n";
// }


?>