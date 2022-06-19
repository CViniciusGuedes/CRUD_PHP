<?php

    class conTransp{
        private static $dbHost = 'localhost';
        private static $dbName = 'login';
        private static $dbUser = 'root';
        private static $dbPwd = '';

        private static $cont = null;

        public function __construct(){
            die ("Passei pelo construtor de conexao");
        }

        public static function conectar(){
            if (self::$cont==null){
                try{
                    self::$cont = new PDO("mysql:host=" . self::$dbHost .";dbname=" . self::$dbName , self::$dbUser, self::$dbPwd);
                }
                catch (PDOException $e){
                    die ($e->getmassage());
                }
            }
            return self::$cont;
        }

        public static function desconectar(){
            self::$cont = null;
        }
    }
?>