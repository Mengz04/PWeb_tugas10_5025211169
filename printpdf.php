<?php
    require('fpdf.php');
    $pdf = new FPDF('l','mm','A5');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEGRI 2 LANGSA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

    $pdf->Cell(10,7,'',0,1);

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(25,6,'NIS',1,0);
    $pdf->Cell(60,6,'NAMA MAHASISWA',1,0);
    $pdf->Cell(30,6,'JENIS KELAMIN',1,0);
    $pdf->Cell(27,6,'NO HP',1,0);
    $pdf->Cell(30,6,'ALAMAT',1,1);

    $pdf->SetFont('Arial','',10);

    include 'koneksisqli.php';
    $siswa = mysqli_query($connect, "select * from siswa");
    while ($row = mysqli_fetch_array($siswa)){
        $pdf->Cell(25,6,$row['nis'],1,0);
        $pdf->Cell(60,6,$row['nama'],1,0);
        $pdf->Cell(30,6,$row['jenis_kelamin'],1,0);
        $pdf->Cell(27,6,$row['telp'],1,0); 
        $pdf->Cell(30,6,$row['alamat'],1,1); 
    }

    $pdf->Output();
?>