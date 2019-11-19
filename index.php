<?php                    
  echo "<h1>Openshift Workshop v1.0</h1> ";                    
  $host= gethostname();
  $ip = gethostbyname($host);                    
  echo $ip;
  echo "Alterando alguma coisa no webhook";
?>
