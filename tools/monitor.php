<? 
$host="deloscuatrovientos.com.ar"; 
$mailserver="mail";
$puerto="80";
$check = fsockopen($host, $puerto, $errno, $errstr, 40); 


if(checkdnsrr($host)){
	echo '<br> El dominio existe en los dns <br>';
}else{
	echo '<br> los dns no resuelven el dominio, verificar en el nic correspondiente si el mismo no caducó<br>';
}

if($check){ 
echo "el host ".$host." puerto ". $puerto." se encuentra Online<br>"; 
} else { 
echo "el host ".$host." puerto ". $puerto." se encuentra OFFline<br>";
} 

$hostname = '{'.$mailserver.'.'.$host.':143/imap/novalidate-cert}INBOX';
$username = '';
$password = '';

echo "<br>";
$inbox = imap_open($hostname,$username,$password) or die('Ha fallado la conexión: ' . imap_last_error());

$emails = imap_search($inbox,'');


function hacerPing($ip) {
    $str = exec("ping -n 1 -w 1 $ip", $res, $ret);
    if ($ret == 0) {
        return true;
    } 
    return false;
}
 
if (hacerPing('154.0.0.45') === true) {
    echo 'ON <br>' . $res;
} else {
    echo 'OFF <br>' . $res;
}

?>