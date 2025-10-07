<?php
require_once __DIR__ ."/../config/database.php";


class tarefa{
    private $conn;

    public function __construct() {
        $db = new database();
        $this ->conn = $db->connect();
}
}

?>