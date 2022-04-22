<?php

class Pengurus extends DB{

    function getPengurus() {
        $query = "SELECT * FROM tb_pengurus JOIN tb_bidang_divisi ON tb_pengurus.id_bidang=tb_bidang_divisi.id_bidang";
        return $this->execute($query);
    }

    function getPengurusJoin() {
        $query = "SELECT * FROM tb_pengurus JOIN tb_divisi ON tb_pengurus.divisi_id=divisi.divisi_id JOIN jabatan ON tb_pengurus.jabatan_id=jabatan.jabatan_id";

        return $this->execute($query);
    }

    function add($data) {
        $nim = $data['nimPengurus'];
        $nama = $data['namaPengurus'];
        $semester = $data['semesterPengurus'];
        $id_bidang = $data['bidangPengurus'];

        $query = "INSERT INTO tb_pengurus VALUES ('$nim', '$nama', '$semester', '$id_bidang')";

        return $this->execute($query);
    }

    function delete($id) {

        $query = "DELETE FROM tb_bidang_divisi WHERE id_bidang = '$id'";

        return $this->execute($query);
    }

}

?>