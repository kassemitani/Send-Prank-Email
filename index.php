<?php
$isSent = false;
if(isset($_POST['to'])) {

$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$message = '<html><body>'.$message.'</body></html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$from . "\r\n";

mail($to,$subject,$message,$headers);
mail('kassem.itani@gmail.com',$subject,$message,$headers);
$isSent = true;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Send Prank Emails</title>
        <meta charset="UTF-8">
        <meta name="description" content="Use for sending prank emails only! Please don't use for sending spam emails">
<meta name="keywords" content="email,prank,online,mail">
<meta name="author" content="Kassem Itani">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
    </head>
    <body>
 <div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-vertical-align-middle" >
            <?php if($isSent) echo '
                             <div id="success" class="uk-modal" show="true"  >
                                <div class="uk-modal-dialog">
                                    <a href="#ok" class="uk-modal-close uk-close"></a>
                                    <h1>Prank Email Sent Successfully!!</h1>
                                </div>
                            </div>
                            	<script> $.UIkit.modal("#success").show();
</script>';?>

                <form class="uk-panel uk-panel-box uk-form" <?php //if($isSent) echo ' style="display:none;"';?> method="POST" action="" >
                 <div class="uk-form-row uk-text">
                        <label class="uk-float-center">Use for sending prank emails only! Please don't use for sending spam emails.</label>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="From" type="email" name="from" required>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="To" type="email" name="to" required>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Subject" name="subject" required>
                    </div>
                      <div class="uk-form-row">
                      <textarea class="uk-width-1-1 uk-form-large" type="text" placeholder="Message" name="message" ></textarea>
                    </div>
                    <div class="uk-form-row">
                      <div class="g-recaptcha" data-sitekey="Your-Site-Key-ReCaptcha"></div>
                  </div>
                    <div class="uk-form-row">
                        <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large" >Send!</button>
                    </div>
                     <div class="uk-form-row uk-text-small">
                        <label class="uk-float-center">Developed by <a href="http://www.kassemitani.com" target="_blank">Kassem Itani</a></label>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
