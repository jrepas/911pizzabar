<?php
$to = "admin@911pizzabar.hu";
$from = "no-reply@911pizza.com";

$headers = "From: " . $from . "\r\n";

$subject = "Új email feliratkozó";
$body = "Új email feliratkozó: " . $_POST['email'];


if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
        echo 'Your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
    }
    else
    {
       echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
    }
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
}
