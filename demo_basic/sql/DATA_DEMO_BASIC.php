<?php
namespace SQL;
class DATA_DEMO_BASIC extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   (new \PSQL('/mysql/system_page.sql'))->SERVERPATH(),
                        (new \PSQL('/mysql/webcraft_imprint.sql'))->SERVERPATH());
    }    
}