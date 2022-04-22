<?php

class BidangDivisi extends DB {

    function getBidangDivisi() {
        $query = "SELECT * FROM tb_bidang_divisi";
        return $this->execute($query);
    }

    function add($data) {
        $jabatan = $data['jabatanBidang'];
        $id_divisi = $data['divisiBidang'];

        $query = "INSERT INTO tb_bidang_divisi VALUES ('', '$jabatan', '$id_divisi')";

        return $this->execute($query);
    }

    function delete($id) {
        $query = "DELETE FROM tb_bidang_divisi WHERE id_bidang = '$id'";

        return $this->execute($query);
    }

}

?>