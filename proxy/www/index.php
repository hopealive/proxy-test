<?php
echo "HTTP_HOST: ". $_SERVER['HTTP_HOST']."<br>\n";
echo "REMOTE_ADDR: ".$_SERVER['REMOTE_ADDR']."<br>\n";
echo "HTTP_X_FORWARDED_FOR: ".$_SERVER['HTTP_X_FORWARDED_FOR']."<br>\n";

// phpinfo();