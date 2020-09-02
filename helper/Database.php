<?php
/* 
 */
class Database
{
    private $options;
    private $dbh;
    private $user;
    private $password;
    private $dsn;
    function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=project_mcq";
        $this->options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $this->user = "root";
        $this->password = "0907IT02352";
        $this->dbh = new PDO($this->dsn, $this->user, $this->password, $this->options);
    }
    public function Insert($sql)
    {
        try {

            $stmt = $this->dbh->prepare($sql);
            if ($stmt->execute()) {
                return true;
                //var_dump($this->this->dbh, $this->dsn, $this->data);
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function Update($sql)
    {
        try {

            $stmt = $this->dbh->prepare($sql);
            if ($stmt->execute()) {
                return true;
                //var_dump($this->this->dbh, $this->dsn, $this->data);
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function Delete($sql)
    {
        try {


            if ($this->dbh->exec($sql)) {
                return true;
                //var_dump($this->this->dbh, $this->dsn, $this->data);
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function FetchAll($sql)
    {
        try {
            $stmt = $this->dbh->query($sql);
            /* $stmt->execute(); */
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function Fetch($sql)
    {
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
