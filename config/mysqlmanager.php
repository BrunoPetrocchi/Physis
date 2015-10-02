<?php
/*if(!$GLOBALS[_mysqlhost]){
    if(!@include_once("utilidades.php"))
      @include_once("utilidades.php");
}
*/
class MysqlManager
{
    private static $connection;
    private static $host;
    private static $username;
    private static $passwd;
    private static $timeout;

    public function MysqlManager()
    {
	//echo "<br>Cria mysql objeto -> Abre Conexão<br>";
    	MysqlManager::$host = $GLOBALS[_mysqlhost];
        MysqlManager::$username = $GLOBALS[_mysqluser];
        MysqlManager::$passwd = $GLOBALS[_mysqlpass];
		MysqlManager::$timeout = $GLOBALS[_mysqltimeout];

		if (!MysqlManager::$connection = mysql_connect(MysqlManager::$host, MysqlManager::$username, MysqlManager::$passwd))
                {
                    return 0;
		}
                    return 1;
    }

    public static function mysqlQuery($query, $db)
    {
       // echo "executa query: $query in db: $db<br>";
		//exit();
    	mysql_select_db($db, MysqlManager::$connection);
		return mysql_query($query, MysqlManager::$connection);
    }
	
    public static function getConnection(){
            return MysqlManager::$connection;
    }

    public static function CarregaVariaveisMysql($resource){
         unset($collection);
         unset($object);
         $collection = array();
         if($resource)
             while($object = mysql_fetch_assoc($resource)){
             $collection[]=$object;
         }

         return $collection;
    }

    public static function ExecutaPersistenciaMysql($sql,$db){
        return  MysqlManager::mysqlQuery($sql,$db);
    }

    public static function ExecutaConsultaMysql($sql,$db){
	//echo "sql MysqlManager:$sql no DB $db<br>";
        $result = MysqlManager::mysqlQuery($sql,$db);
        return MysqlManager::CarregaVariaveisMysql($result);

    }

    public function __destruct()
    {
		//echo "<br>Destroi mysql objeto -> Fecha conexão<br>";
                @mysql_close(MysqlManager::$connection);
    }


}
?>
