<?
require_once("mailAth.class.php");
$a = new mailAuth("mail.server.com",array("imap","ssl","novalidate-cert"),"INBOX");
if(!$a->auth("test@mail.com","test1")) {
        echo "\nThere was an error authentication you:\n";
        echo $a->error;
} 
?>
