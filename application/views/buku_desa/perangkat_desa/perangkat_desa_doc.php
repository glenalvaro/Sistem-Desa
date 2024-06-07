<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/dist/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Perangkat_desa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Pegawai</th>
		<th>Gelar</th>
		<th>Nik Pegawai</th>
		<th>Nip</th>
		<th>Tempat Lahir</th>
		<th>Tgl Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Pendidikan</th>
		<th>Agama</th>
		<th>Pangkat Golongan</th>
		<th>Jabatan Pegawai</th>
		<th>Status</th>
		<th>Foto Pegawai</th>
		
            </tr><?php
            foreach ($perangkat_desa_data as $perangkat_desa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $perangkat_desa->nama_pegawai ?></td>
		      <td><?php echo $perangkat_desa->gelar ?></td>
		      <td><?php echo $perangkat_desa->nik_pegawai ?></td>
		      <td><?php echo $perangkat_desa->nip ?></td>
		      <td><?php echo $perangkat_desa->tempat_lahir ?></td>
		      <td><?php echo $perangkat_desa->tgl_lahir ?></td>
		      <td><?php echo $perangkat_desa->jenis_kelamin ?></td>
		      <td><?php echo $perangkat_desa->pendidikan ?></td>
		      <td><?php echo $perangkat_desa->agama ?></td>
		      <td><?php echo $perangkat_desa->pangkat_golongan ?></td>
		      <td><?php echo $perangkat_desa->jabatan_pegawai ?></td>
		      <td><?php echo $perangkat_desa->status ?></td>
		      <td><?php echo $perangkat_desa->foto_pegawai ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>