<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'no');
$sheet->setCellValue('B1', 'id');
$sheet->setCellValue('C1', 'nama');
$sheet->setCellValue('D1', 'kelas');
$sheet->setCellValue('E1', 'alamat');

$query = mysqli_query($conn,"select * from tb_siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['id_siswa']);
	$sheet->setCellValue('C'.$i, $row['nama']);
	$sheet->setCellValue('D'.$i, $row['kelas']);	
    $sheet->setCellValue('E'.$i, $row['alamat']);
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');
?>