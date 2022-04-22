<?php

class Divisi extends DB{

    function getDivisi() {
        $query = "SELECT * FROM tb_divisi";
        return $this->execute($query);
    }

    function add($data) {
        $nama_divisi = $data['namaDivisi'];

        $query = "INSERT INTO tb_divisi VALUES ('', '$nama_divisi')";

        return $this->execute($query);
    }

    function delete($id) {

        $query = "DELETE FROM tb_divisi WHERE id_divisi = '$id'";

        return $this->execute($query);
    }

}

?>