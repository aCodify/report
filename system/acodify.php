<?php
class Acodify {
    protected $registry;
    protected $db;
    
    public function __construct() {

        // HACK DATABASE FOR CI;
        $this->db = DB(array(
            'dbdriver' => 'mysql',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'hostname' => DATABASE_HOSTNAME,
            'username' => DATABASE_USERNAME,
            'password' => DATABASE_PASSWORD,
            'database' => DATABASE_NAME,
            // 'dbprefix' => DB_PREFIX
            ));


    }

}


?>



