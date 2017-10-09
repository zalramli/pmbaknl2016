 <html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $data['no_pendaftaran']; ?></title>
    <style type="text/css">
     img{
      max-width: 70%;
    }
    </style>
  </head>
  <body>
  <img src="../images/capture.PNG">
  <hr>
  <?php
  echo '<table border="0">
  <tr>
    <td width="120">Nama Lengkap</td>
    <td width="10">:</td>
    <td width="250">'.$data['nama'].'</td>
  </tr>
  <tr>
    <td width="120">Tempat, Tgl. Lahir</td>
    <td width="10">:</td>
    <td width="250">'.$data['tempat_lahir'].",".$data['tgl_lahir'].'</td>
  </tr>
  <tr>
    <td width="120">Jenis Kelamin</td>
    <td width="10">:</td>
    <td width="250">'.$data['jenis_kelamin'].'</td>
  </tr>
  <tr>
    <td width="120">Agama</td>
    <td width="10">:</td>
    <td width="250">'.$data['Agama'].'</td>
  </tr>
  <tr>
    <td width="120">Sekolah Asal</td>
    <td width="10">:</td>
    <td width="250">'.$data['sekolah_asal'].'</td>
  </tr>
  <tr>
    <td width="120">Program Studi</td>
    <td width="10">:</td>
    <td width="250">'.$data['program_studi'].'</td>
  </tr>
  <tr>
    <td width="120">Nomor Pendaftaran</td>
    <td width="10">:</td>
    <td width="250">'.$data['no_pendaftaran'].'</td>
  </tr>

</table>';

  echo "<p>Data yang tertera di atas adalah data asli dari pihak AKNL Lumajang.</p>";
  echo "<p align='right'>Lumajang, ".date('d-m-Y')."
<!--<img src='ttd.png' width='120'>-->
( AKNL Lumajang )</p>";
  ?>
  </body>
  </html>