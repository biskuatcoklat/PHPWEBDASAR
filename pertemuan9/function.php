<?php 
$koneksi = mysqli_connect("localhost","root","","karyawan");
$karyawan = query("SELECT * FROM datakaryawan");
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }

    return $rows;
}
?>