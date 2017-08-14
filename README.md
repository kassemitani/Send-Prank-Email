# Send-Prank-Email
Send Prank Emails using PHP mail function 

##Definition and Usage
The mail() function allows you to send emails directly from a script.

## Syntax
```
mail(to,subject,message,headers,parameters);
```
### Parameter	Description
to	Required. Specifies the receiver / receivers of the email
subject	Required. Specifies the subject of the email. Note: This parameter cannot contain any newline characters
message	Required. Defines the message to be sent. Each line should be separated with a LF (\n). Lines should not exceed 70 characters.
Windows note: If a full stop is found on the beginning of a line in the message, it might be removed. To solve this problem, replace the full stop with a double dot:
```
<?php
$txt = str_replace("\n.", "\n..", $txt);
?>
```
headers	Optional. Specifies additional headers, like From, Cc, and Bcc. The additional headers should be separated with a CRLF (\r\n).
Note: When sending an email, it must contain a From header. This can be set with this parameter or in the php.ini file.

parameters	Optional. Specifies an additional parameter to the sendmail program (the one defined in the sendmail_path configuration setting). (i.e. this can be used to set the envelope sender address when using sendmail with the -f sendmail option)
Technical Details
Return Value:	Returns the hash value of the address parameter, or FALSE on failure. Note: Keep in mind that even if the email was accepted for delivery, it does NOT mean the email is actually sent and received!
PHP Version:	4+
PHP Changelog:	PHP 4.3.0: (Windows only) All custom headers (like From, Cc, Bcc and Date) are supported, and are not case-sensitive.
PHP 4.2.3: The parameter parameter is disabled in safe mode
PHP 4.0.5: The parameter parameter was added

## References 
PHP send mail: http://php.net/manual/en/function.mail.php

W3Schools PHP function mail: https://www.w3schools.com/php/func_mail_mail.asp


## ReCaptcha
Get your site key from https://www.google.com/recaptcha/admin
replace "Your-Site-Key-ReCaptcha" in Index.php line 70 with your site key
