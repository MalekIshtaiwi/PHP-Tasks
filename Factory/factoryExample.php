<?php
interface DatabaseConnection {
    public function connect();
}
class MySQLConnection implements DatabaseConnection {
    private $host, $user, $password;
    
    public function __construct($host, $user, $password) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
        echo "Connected to MySQL at $this->host <br>";
    }
}

class PostgreSQLConnection implements DatabaseConnection {
    private $host, $user, $password;
    
    public function __construct($host, $user, $password) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
        echo "Connected to PostgreSQL at $this->host\n";

    }
}
class DatabaseFactory {
    public static function createConnection($type, $host, $user, $password) {
        switch ($type) {
            case 'mysql': return new MySQLConnection($host, $user, $password);
            case 'pgsql': return new PostgreSQLConnection($host, $user, $password);
            default: throw new Exception("Invalid database type");
        }
    }
}

$mysqlConn = DatabaseFactory::createConnection('mysql', 'localhost', 'root', '1234');//Scope Resolution Operator ----> ::
$mysqlConn->connect();

$pgsqlConn = DatabaseFactory::createConnection('pgsql', 'localhost', 'admin', '5678');
$pgsqlConn->connect(); 

?>