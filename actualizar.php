
<?php
	//The PDO object construct parameters are as follow:
	//	public PDO::__construct ( string $dsn [, string $username [, string $password [, array $options ]]] )
	//		$dsn is a string in the format 'mysql:host="hostname";dbname="DataBaseName"'
	//the options array is actually an associative array (dictionary),
	//and in this code is used to store any errors when connecting to the database.
	//If there is an error whe connecting, php will stop and show the error when opening the file in a browser.
	class Db{
		private static $instance = NULL;

		private function __construct(){}

		private function __clone(){}

		public static function getInstance(){
			if(!isset(self::$instance)){
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				self::$instance = new PDO('mysql:host=localhost;dbname=dados', 'root', '', $pdo_options);
			}
			return(self::$instance);
		}
	}


	date_default_timezone_set("UTC");
	$db = Db::getInstance();
if(isset($_POST['tipo']))
{


	$res2 = $db->query('SELECT * from variables;');	
	$result2 = $res2->fetch();
	$time = abs(time() - $result2['tiempo']);
	if($time > 4)
	{

		$tipo = $_POST['tipo'];
		$cant = $_POST['cant'];
		$sum = 0;	

		//echo $result["roll"] . $tipo . $cant;
		$V = array();
		for($i=0;$i<$cant;$i++)
		{
			$V[$i] = rand(1, $tipo);
			$upd = $db->prepare("UPDATE tabla set roll = :roll where id = :id");
			$upd->execute(array("roll" => $V[$i], "id" => $i+1));
		}
		$res = $db->query('SELECT * from tabla;');
		$result = $res->fetchAll();
		


		
			

		
		$upd2 = $db->prepare("UPDATE variables set tipoDados = :tipo, tiempo = :tiempo, cantidad = :cant");
		$upd2->execute(array("tipo" => $tipo, "tiempo" => time(), "cant" => $cant));

	}
}
else
{
	$res = $db->query('SELECT * from tabla;');
	$result = $res->fetchAll();
	$res2 = $db->query('SELECT * from variables;');
	$result2 = $res2->fetch()['cantidad'];
	$sum = 0;
	for($i=0;$i<$result2;$i++)
	{
		$sum += $result[$i]["roll"];
		echo $result[$i]["roll"] . "<br>";
		echo "<br>";
	}
	echo "<h3>".$sum . "</h3><br>";



}
?>
