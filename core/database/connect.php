<?php
$config['db'] = array(
	'host' 			=> '127.10.211.2',
	'username'		=> 'adminTcfMCpS',
	'password'		=> 'aS1pZbTxbxf4',
	'dbname'		=> 'medium'
);

try {
	$db = new PDO('mysql:host=' .$config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
}
catch(PDOException $e) { 
    echo $e->getMessage();
}
?>
