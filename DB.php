<?php

class DB{

    var $db_host = "localhost";
    var $db_user = "root";
    var $db_pass = "";
    var $db = "dpbo_tp2";
    var $db_link = "";
    var $result = 0;


    function open()
    {
        $this->db_link = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db);
    }

    function execute($query = "")
    {
        $this->result = mysqli_query($this->db_link, $query);
        return $this->result;
    }

    function getResult()
    {
        return mysqli_fetch_array($this->result);
    }

    function close()
    {
        mysqli_close($this->db_link);
    }

}

?>