<?php
// include '../config/dbconfig.php'; // plaats dbconfig op andere plaats dan rest van applicatie
class Mysql extends Dbconfig{
    public $connectionstring;
    public $dataset;
    private $sqlquery;
    protected $databasename;
    protected $hostname;
    protected $username;
    protected $password;

    function __construct(){
        $this->connectionstring = NULL;
        $this->sqlquery = NULL;
        $this->dataset = NULL;
        $dbpara = new Dbconfig();
        $this->databasename = $dbpara->dbname;
        $this->hostname = $dbpara->servername;
        $this->username = $dbpara->username;
        $this->password = $dbpara->password;
        $dbpara = NULL;
    }

    function dbconnect(){
        $this->connectionstring = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
        return $this->connectionstring;
    }

    function dbdisconnect(){
        $this->connectionstring = NULL;
        $this->sqlquery = NULL;
        $this->dataset = NULL;
        $this->databasename = NULL;
        $this->hostname = NULL;
        $this->username = NULL;
        $this->password = NULL;
    }
    function selectall($tablename){
        $this->sqlquery = 'SELECT * FROM ' . $this->databasename . '.' . $tablename;
        $this->dataset = mysqli_query($this->sqlquery, $this->connectionstring);
        return $this->dataset;
    }

    function selectfreerun($query){
        $this->dataset = mysqli_query($this->connectionstring, $query);
        return $this->dataset;
    }
    function insertinto(){
        // etc
        return 'test';
    }
}
?>