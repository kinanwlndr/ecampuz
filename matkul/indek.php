<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>

<table border="1" cellpadding="4">
        <tr bgcolor="silver">
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</td>
            <th>Nilai</td>
        </tr>

<?php
include ('koneksi.php'); ?>
<?php
$no=0;
$sql =  "SELECT * FROM tb_mahasiswa_nilai JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id
 JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id 
 WHERE nilai = (SELECT MAX(nilai) FROM tb_mahasiswa_nilai 
 GROUP BY mk_id
 HAVING mk_id = '2')";
$query = mysqli_query($db, $sql);

// $query = mysqli_query
// ("SELECT * FROM tb_mahasiswa_nilai JOIN tb_mahawasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id
//  JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id");

while($mahasiswa = mysqli_fetch_array($query)){
    $no++;

//     var_dump($mahasiswa);
// die;

    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$mahasiswa['mhs_nim']."</td>";
    echo "<td>".$mahasiswa['mhs_nama']."</td>";
    echo "<td>".$mahasiswa['mk_kode']."</td>";

    echo "<td>".$mahasiswa['nilai']."</td>";    
    echo "</tr>";


} ?>
</table>
</body>
</html>


