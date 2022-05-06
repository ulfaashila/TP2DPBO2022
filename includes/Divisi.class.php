<?php

class Divisi extends DB
{
    function getDivisi()
    {
        $query = "SELECT * FROM `divisi`";
        return $this->execute($query);
    }

    function add()
    {
        $Divisi = $_POST['tdivisi'];

        $query = "INSERT INTO `divisi`(`id_Divisi`, `Divisi`) VALUES ('$Divisi')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM `divisi` WHERE id_Divisi = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id)
    {
        $id_Divisi = $_POST['tid_divisi'];
        $Divisi = $_POST['tdivisi'];

        $query = "UPDATE `divisi` SET `Divisi`='$Divisi' WHERE id_Divisi = '$id_Divisi'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
