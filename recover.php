<?php
/**
 * This is a simple program to recover blocked Gmail attachment. First from mail option select "Show Original".
 * The email will be opened in text mode in new window. In the bottom of the content there will be attachment information.
 * Now copy the content after attachment header and paste in the value of $base64String.
 * Rename the desired filename from the header "filename"
 *
 * This will be improved more in future.
 */

$base64String = "paste here base 64 string copied from Gmail";
// Replace the /tmp with the filename found in header, Content-Disposition: attachment; filename=""
$fp = fopen('/tmp', "wb");
fwrite($fp, base64_decode($base64String));
fclose($fp);