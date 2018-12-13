
<!--

Check dependencies
To check  " php filename.php "

> sudo apt-get install php-ssh2
> apt-get install php-seclib
> apt-get install php-math-biginteger

-->

<?php

$server = "";
$user = "";
$password = "";

$comand="";

include('Net/SSH2.php');
$ssh = new Net_SSH2($server);
if (!$ssh->login($user, $password)) {
    exit('Login Failed');
}

$ssh->exec($command);

?>
