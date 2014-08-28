**Merge & Un-Merge cells**
```
$objPHPExcel->getActiveSheet()->mergeCells('A28:B28');      
$objPHPExcel->getActiveSheet()->unmergeCells('A28:B28');
```
   
Add a hyperlink to the sheet
```
$objPHPExcel->getActiveSheet()->setCellValue('E26', 'www.phpexcel.net');
$objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setUrl('http://www.phpexcel.net');
$objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setTooltip('Navigate to website');
$objPHPExcel->getActiveSheet()->getStyle('E26')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
```
   
tab color
```
$objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FF0094FF');
```

inserting and removing rows and columns
```
$objPHPExcel->getActiveSheet()->insertNewRowBefore(6, 10);
$objPHPExcel->getActiveSheet()->removeRow(6, 10);
$objPHPExcel->getActiveSheet()->insertNewColumnBefore('E', 5);
$objPHPExcel->getActiveSheet()->removeColumn('E', 5);
```


Set page orientation and size
```
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
```