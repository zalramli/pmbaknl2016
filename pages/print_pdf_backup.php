<?php
session_start();
error_reporting(0);
ob_start(); //buat koneksi ke database
include '../config/connect.php';
$kode   = $_GET['no_pendaftaran']; //kode berita yang akan dikonvert
$query  = mysql_query("SELECT * FROM viewpendaftar WHERE no_pendaftaran='$kode'");
$data   = mysql_fetch_array($query);
?>
  <html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $data['no_pendaftaran']; ?></title>
    <style type="text/css">

    </style>
  </head>
  <body>
<!--  <img src="../images/aknl.png" alt=""/>-->
  <?php
  echo '
    <table cellspacing="0" cellpadding="0" style:"margin-bottom:3px;">
            <tr style="padding-left="10px;">
                <td rowspan="6" width="100"><img src="../images/polinema-logo.png" height="90"/></td>
                <td style="text-align: center; font-size: 13px"><b>KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</b></td>
                <td rowspan="6" width="90"><img src="../images/aknl-logo.png" alt="" height="90" /></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 15px"><b>PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG</b></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 19px"><b>RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG</b></td>
            </tr>
            <tr>
                <td style="font-size: 12px; text-align: center">Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp.(0334) 8780440 Lumajang - 67311</td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 14px"><b>website : aknlumajang.ac.id      email : info@aknlumajang.ac.id</b></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 14px"><b>e-mail : aknlumajang@yahoo.com dan aknlumajang@gmail.com</b></td>
            </tr>
            <tr>
              <td>
              
              </td>
              <td style="padding-top: -20px">
                <hr>
              </td> 
              <td>
              </td>
              <td>
                <hr>
              </td>
            </tr>
    </table>
    <p align="center" style="padding-top: -50px;"><b>BUKTI PENDAFTARAN</b></p>
    <table border="">

  <tr>
    <td width="120">Nomor Pendaftaran</td>
    <td width="10">:</td>
    <td width="250">'.$data['no_pendaftaran'].'</td>
  </tr>
  <tr>
    <td width="120">Nama Lengkap</td>
    <td width="10">:</td>
    <td width="250">'.$data['nama'].'</td>
  </tr>
  <tr>
    <td width="120">Tempat, Tgl. Lahir</td>
    <td width="10">:</td>
    <td width="250">'.$data['tempat_lahir'].","."".substr($data['tgl_lahir'],8,2)." - ".date("m",strtotime($data['tgl_lahir']))." - ".substr($data['tgl_lahir'],0,4).'</td>
  </tr>
  <tr>
    <td width="120">Jenis Kelamin</td>
    <td width="10">:</td>
    <td width="250">'.$data['jenis_kelamin'].'</td>
  </tr>
  <tr>
    <td width="120">Agama</td>
    <td width="10">:</td>
    <td width="250">'.$data['agama'].'</td>
  </tr>
  <tr>
    <td width="120">Sekolah Asal</td>
    <td width="10">:</td>
    <td width="250">'.$data['sekolah_asal'].'</td>
  </tr>
  <tr>
    <td width="120">Nomor HP</td>
    <td width="10">:</td>
    <td width="250">0'.$data['nomor_hp'].'</td>
  </tr>
  <tr>
    <td width="120">Program Studi</td>
    <td width="10">:</td>
    <td width="250">'.$data['program_studi'].'</td>
  </tr>
</table>';
//Catatan Dinamis

//Foto 4x6
  ?>
<table border="">
  <tr>
    <td style="width: 300px;">
        <?php
        $munculcatatan=mysql_query("SELECT * FROM catatan_dinamis WHERE id_catatan='1'");
        $fetchcatatan=mysql_fetch_array($munculcatatan);
        echo "".$fetchcatatan['isi']."<br><br>";
        ?>
    </td>
  </tr>
</table>
<table border='' style='margin-top: -70px;'>
	<tr>
		<td width="347px;" style="text-align: right;"><div style="width: 90px;height: 100px;border: 1px solid black;"><p align="center"><br><br>3 x 4</p></div></td>
		<td width="100px;"></td>
		<td width="190px;">
			<?php
        echo "<p style='margin-right:px;' align=''>Lumajang, ".date('d-m-Y')."</p>";

        echo "<br><br><br>  ".$_SESSION['username'];
      ?>
		</td>
	</tr>
</table>
  
  </body>
  </html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="mhs-".$kode.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya  
//==========================================================================================================  
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan ba"ca-baca tutorial tentang HTML2PDF  
//==========================================================================================================  
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
require_once('../html2pdf/html2pdf.class.php');
try
{
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(10, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content);
  $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }

?>
