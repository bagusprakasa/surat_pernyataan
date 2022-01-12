<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Surat Pernyatan</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">-->

  <!-- Load paper.css for happy printing -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">-->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/paper-css/paper.css">
  
  <style>
	  body{
      font-family : "Arial";
	  }
	  .header, .header .left{
		  display: flex;
	  }
    .header .left{
      width:55%;
    }
	  .header .right{
		  width: 45%;
      padding-left:40px;
      padding-top:30px;
	  }
  </style>

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <!--<style>
  @page { size: A5 landscape }
  </style>-->
  <style>@page { size: A4 }</style>

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<!-- <body class="A5 landscape" onload="window.print()"> -->
<body class="A4 potrait" onload="window.print()">
  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
<h3 style="text-align: center;margin-bottom:15px"><span><b>SURAT PERNYATAAN ORANG TUA / WALI MURID</b></span></h3>
<!-- <center> -->
    <table>
      <tr>
        <td width="100%">
          <p style="margin-bottom:10px">Saya yang bertanda tangan dibawah ini :</p>
          <table style="margin-left: 15px;">
            <tr>
              <td>Nama Lengkap &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
              <td>:</td>
              <td><?= $nama_ortu ?></td>
            </tr>
            <tr>
              <td>NIK</td>
              <td>:</td>
              <td><?= $nik_ortu ?></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td>:</td>
              <td><?= $pekerjaan ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?= $alamat ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
<!-- </center> -->
<!-- <center> -->
    <table>
      <tr>
        <td width="100%">
          <p style="margin-bottom:10px">Bahwa selaku orang tua / wali dari siswa :</p>
          <table style="margin-left: 15px;">
            <tr>
              <td>Nama Lengkap &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
              <td>:</td>
              <td><?= $nama_siswa ?></td>
            </tr>
            <tr>
              <td>NIK</td>
              <td>:</td>
              <td><?= $nik_siswa ?></td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td><?= $kelas ?></td>
            </tr>
            <tr>
              <td>Sekolah</td>
              <td>:</td>
              <td><?= $sekolah ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?= $alamat ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
<!-- </center> -->
<!-- <center> -->
  <table style="margin-top:10px">
      <tr>
        <td width="100%">
          <p style="margin-bottom:10px">Menyatakan dengan sesungguhnya bahwa:</p>
          <table style="margin-left: 15px;">
            <tr style="margin-bottom:10px">
              <td style="text-align: justify;">1. Mengizinkan siswa/i yang tersebut diatas untuk mengikuti Proses Pembelajaran Tatap Muka di Satuan Pendidikan.</td>
            </tr>
            <tr>
              <td style="text-align:justify;">2.Bersedia membimbing siswa/i tersebut diatas untuk mentaati dan mematuhi Protokol Kesehatan dalam pelaksanaan Proses Pembelajaran Tatap Muka di Satuan Pendidikan.</td>
            </tr>
            <tr>
                <td style="text-align:justify;">3. Bersedia mematuhi dan mengikuti Peraturan serta Standar Protokol Kesehatan yang telah ditetapkan Satuan Pendidikan.</td>
            </tr>
            <tr>
                <td style="text-align:justify;">4. Siswa/i tersebut diatas bersedia mengikuti pendidikan sesuai jadwal yang ditetapkan Satuan Pendidikan.</td>
            </tr>
            <tr>
                <td style="text-align:justify;">5. Bersedia dan sanggup mengantar jemput siswa/i tersebut diatas selama melaksanakan proses pembelajaran tatap muka di Satuan Pendidikan.</td>
            </tr>
            <tr>
                <td style="text-align:justify;">6. Tidak berkeberatan menerima sanksi jika tidak mengikuti Standar Protokol yang telah ditetapkan oleh Satuan Pendidikan.</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
<!-- </center> -->
<!-- <center> -->
    <table style="margin-top:10px">
        <tr>
            <td>
                <p style="text-align: justify;">Demikianlah surat pernyataan ini saya buat dengan sebenarnya dan dengan penuh rasa tanggung jawab serta tanpa adanya paksaan dari pihak lain dan tidak akan menuntut pihak manapun di kemudian hari terkait dengan pernyataan dan tindakan yang ada dalam surat pernyataan ini.</p>
            </td>
        </tr>
    </table>
<!-- </center> -->
<div style="width:55%;margin-left:auto;margin-top:30px;">
  <span style="margin-left:10px">Yang membuat pernyataan Orang Tua/ Wali Murid</span>
  <span style="margin-left:170px"><?= date("d-m-Y",  time()) ?></span>
  <span style="margin-left:170px;"><img src="<?php echo base_url()."assets/ttd/".$ttd?>" alt="logo" width="70" /></span>
  <!-- <div style="margin-top:100px"></div> -->
  <span style="margin-left:130px;">(<?= $nama_ortu ?>)</span>
</div>
</div>
  </section>

</body>

</html>

