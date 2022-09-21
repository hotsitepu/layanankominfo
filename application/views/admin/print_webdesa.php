<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print</title>
    <style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}

		table tr .text2 {
			text-align: center;
			font-weight: bold;
			font-family: calibri;
			font-size: 15px;
		}

		table tr .text {
			text-align: center;
			font-size: 13px;
		}

		table tr th {
			font-size: 14px;
            padding-bottom: 6px;
            padding-top: 6px;
            padding-right: 8px;
            padding-left: 8px;
		}
	</style>
</head>

<body>
    <center>
<table width="1024">
			<tr>
				<td><img src="<?= base_url()?>assets/admin/img/kisspng-kominfo-jica-expert-ministry-of-communication-and-id-5ac4684772d1d0.1483048215228211914703.png" width="70" height="auto"></td>
				<td class="text1" width="100%">
					<center>
						<font size="4"><b>PEMERINTAH KABUPATEN PURBALINGA</b></font><br>
						<font size="5"><b>Dinas Komunikasi dan Informatika Kabupaten Purbalingga</b></font><br>
						<font size="2">Jl. Letkol Isdiman No.17A, Purbalingga Kidul, Kec. Purbalingga, 
                            Kabupaten Purbalingga, Jawa Tengah 53313</font><br>
						<font size="2">Telepon (0281) 891173 </font><br>
						</center>
					<td><img src="<?= base_url()?>assets/admin/img/logopbg.jpg" width="75" height="auto"></td>
				</td>
			</tr>
			<tr>
				<td style="border-top: 2px solid black" colspan="5"></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid black" colspan="5"></td>
			</tr>
		</table>
        <br><br>
		<table style="border-collapse: collapse; border: 1px solid black;" >
			<thead>
				<tr>
                    <th style="border: 1px solid black;">No</th>
					<th style="border: 1px solid black;">Nama Pemohon</th>
					<th style="border: 1px solid black;">SK Pengangkatan Kades</th>
					<th style="border: 1px solid black;">SK Pengangkatan Perangkat Desa</th>
					<th style="border: 1px solid black;">Surat Kuasa</th>
					<th style="border: 1px solid black;">Surat Permohonan Domain</th>
					<th style="border: 1px solid black;">Surat Permohonan Hosting</th>
					<th style="border: 1px solid black;">KTP</th>
					<th style="border: 1px solid black;">Status</th>
				</tr>
			</thead>
				<tbody>
                <?php
                        $start=0;
                        foreach($print->result_array() as $f) { ?>
					<tr>
						<td style="border: 1px solid black; text-align: center;"><?= ++$start ?></td>
						<td style="border: 1px solid black;"><?= $f['nama'] ?></td>
						<td style="border: 1px solid black;"><?= $f['SK_Pengangkatan_Kades'] ?></td>
						<td style="border: 1px solid black;"><?= $f['SK_Pengangkatan_Perangkat_Desa'] ?></td>
						<td style="border: 1px solid black;"><?= $f['Surat_Kuasa'] ?></td>
						<td style="border: 1px solid black"><?= $f['Surat_Permohonan_Domain'] ?></td>
                        <td style="border: 1px solid black; "><?= $f['Surat_Permohonan_Hosting'] ?></td>
                        <td style="border: 1px solid black; "><?= $f['KTP'] ?></td>
						<td style="border: 1px solid black;"><?php if ($f['status']== 'Ditolak') {
                                    echo '<span class="badge badge-pill badge-danger">Ditolak</span>';
                                } else if ($f['status']== 'Proses'){
                                    echo '<span class="badge badge-pill badge-warning">Proses</span>';
                                } else {
                                    echo '<span class="badge badge-pill badge-success">Diterima</span>';
                                }
                                ?></td>
					</tr>
                    <?php } ?>
				</tbody>

                
		</table>
                           
                            </center>
<script type="text/javascript">
        window.print();

    </script> 
</body>
</html>