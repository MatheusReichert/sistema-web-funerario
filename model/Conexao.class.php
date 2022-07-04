<?php

class Conexao
{
    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try{
                self::$instance = new PDO(
                    "mysql:host=localhost:3306;dbname=sys_web_funeraria",
                    "root",
                    "",
                    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
                );

                self::$instance->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

                return self::$instance;
            }catch (Exception $e){
                echo "Erro".$e.getMessage();
            }
        }
    }
}

