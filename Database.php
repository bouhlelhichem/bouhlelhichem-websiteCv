<?php
class Database
{
    private static $dbName = 'Hichem_CV' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';
    /*
          private static $dbName = 'u305985331_cv' ;
    private static $dbHost = 'mysql.hostinger.fr' ;
    private static $dbUsername = 'u305985331_cv';
    private static $dbUserPassword = '7PQmoHD9kvHs';
    */
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
