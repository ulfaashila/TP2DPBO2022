<?php

class Pengurus extends DB
{
    function getPengurus()
    {
        $query = "SELECT * FROM pengurus INNER JOIN bidang ON pengurus.id_Bidang = bidang.id_Bidang INNER JOIN divisi ON divisi.id_Divisi = bidang.id_Divisi";
        return $this->execute($query);
    }

    function getPengurus1($id)
    {
        $query = "SELECT * FROM pengurus INNER JOIN bidang ON pengurus.id_Bidang = bidang.id_Bidang INNER JOIN divisi ON divisi.id_Divisi = bidang.id_Divisi WHERE id_Pengurus = '$id'";
        return $this->execute($query);
    }

    function add()
    {
        $Pengurus = $_POST['tpengurus'];
        $Semester = $_POST['tsemester'];
        $id_Bidang = $_POST['tid_bidang'];

        $query = "INSERT INTO `pengurus`(`Pengurus`, `Semester`, `id_Bidang`) VALUES ('$Pengurus','$Semester','$id_Bidang')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM `pengurus` WHERE id_Pengurus = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id)
    {
        $id_Pengurus = $_POST['tid_pengurus'];
        $Pengurus = $_POST['tpengurus'];
        $Semester = $_POST['tsemester'];
        $id_Bidang = $_POST['tid_bidang'];

        $query = "UPDATE `pengurus` SET `Pengurus`='$Pengurus',`Semester`='$Semester',`id_Bidang`='$id_Bidang' WHERE id_Pengurus = '$id_Pengurus'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
