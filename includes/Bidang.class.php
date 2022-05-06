<?php

class Bidang extends DB
{
    function getBidang()
    {
        $query = "SELECT * FROM `bidang`";
        return $this->execute($query);
    }

    function add()
    {
        $Bidang = $_POST['tbidang'];
        $id_Divisi = $_POST['tid_divisi'];

        $query = "INSERT INTO `bidang`(`Bidang`, `id_Divisi`) VALUES ('$Bidang','$id_Divisi'))";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM `bidang` WHERE id_Bidang = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id)
    {
        $id_Bidang = $_POST['tid_bidang'];
        $Bidang = $_POST['tbidang'];
        $id_Divisi = $_POST['tid_divisi'];
        
        $query = "UPDATE `bidang` SET `Bidang`='$Bidang',`id_Divisi`='$id_Divisi' WHERE id_Bidang = '$id_Bidang'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}


?>