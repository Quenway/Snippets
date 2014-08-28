## Sort
```php
<?php
  $objPHPExcel->getActiveSheet()->toArray();
	
	// Rename worksheet
	$objPHPExcel->getActiveSheet()->setTitle('Datatypes');  
	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);
	
	$objPHPExcel->getActiveSheet()->setShowGridLines(false);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
```

**Named Ranges**
```php
// Define named ranges
$objPHPExcel->addNamedRange( new PHPExcel_NamedRange('PersonName', $objPHPExcel->getActiveSheet(), 'B1') );
// Rename named ranges
$objPHPExcel->getNamedRange('PersonName')->setName('PersonFN');
// Add some data to the sheet
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Firstname:')
                              ->setCellValue('B1', '=PersonFN');
// Resolve range
$objPHPExcel->getActiveSheet()->getCell('B1')->getCalculatedValue()l
```


## Date/Time

* `PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2` //2012-12-18  
* `PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME4`     //3:06:11  
* `PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME`  //18/12/12 3:06  

```php
  $dateTimeNow = time();
  
  $sheet = $objPHPExcel->getActiveSheet();
  $sheet->setCellValue('A1', PHPExcel_Shared_Date::PHPToExcel( $dateTimeNow ));
  
  $sheet->getStyle('A1')
        ->getNumberFormat()
        ->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2);  //2012-12-18

```




# Iterator
```php
<?php
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load("05featuredemo.xlsx");

echo date('H:i:s') , " Iterate worksheets" , EOL;
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
	echo 'Worksheet - ' , $worksheet->getTitle() , EOL;

	foreach ($worksheet->getRowIterator() as $row) {
		echo '    Row number - ' , $row->getRowIndex() , EOL;

		$cellIterator = $row->getCellIterator();
		$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
		foreach ($cellIterator as $cell) {
			if (!is_null($cell)) {
				echo '        Cell - ' , $cell->getCoordinate() , ' - ' , $cell->getCalculatedValue() , EOL;
			}
		}
	}
}
```

# Doc Properties
**Core Properties:**
```php
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Tasses.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");
							 
$objPHPExcel->getProperties()->getCreator()
$objPHPExcel->getProperties()->getCreated()
$objPHPExcel->getProperties()->getLastModifiedBy()
$objPHPExcel->getProperties()->getModified()
$objPHPExcel->getProperties()->getTitle()
$objPHPExcel->getProperties()->getSubject()
$objPHPExcel->getProperties()->getDescription()
$objPHPExcel->getProperties()->getKeywords()
```
**Extended (Application) Properties**  
```php
$objPHPExcel->getProperties()->getCategory()
$objPHPExcel->getProperties()->getCompany()
$objPHPExcel->getProperties()->getManager()
```
**Custom Properties**
```php
$customProperties = $objPHPExcel->getProperties()->getCustomProperties();
foreach($customProperties as $customProperty) {
	$propertyValue = $objPHPExcel->getProperties()->getCustomPropertyValue($customProperty);
	$propertyType = $objPHPExcel->getProperties()->getCustomPropertyType($customProperty);
	
	echo '    ' , $customProperty , ' - (' , $propertyType , ') - ';
	if ($propertyType == PHPExcel_DocumentProperties::PROPERTY_TYPE_DATE) {
		echo date('d-M-Y H:i:s',$propertyValue) , EOL;
	} elseif ($propertyType == PHPExcel_DocumentProperties::PROPERTY_TYPE_BOOLEAN) {
		echo (($propertyValue) ? 'TRUE' : 'FALSE') , EOL;
	} else {
		echo $propertyValue , EOL;
	}
}

# Reading Files

```php
<?php
	$objReader = PHPExcel_IOFactory::createReader('Excel2007');
	$objPHPExcel = $objReader->load("templates/template_1.xlsx");

	$data = array(array('title' => 'Excel for dummies', 'price'=> 17.99, 'quantity'	=> 2),
				  array('title' => 'PHP for dummies', 'price'=> 15.99, 'quantity' => 1),
				  array('title' => 'Inside OOP', 'price'=> 12.95, 'quantity' => 1));

	$baseRow = 4;
	foreach($data as $r => $dataRow) {
		$row = $baseRow + $r;
		$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);
	
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
		                              ->setCellValue('B'.$row, $dataRow['title'])
		                              ->setCellValue('C'.$row, $dataRow['price'])
		                              ->setCellValue('D'.$row, $dataRow['quantity'])
		                              ->setCellValue('E'.$row, '=C'.$row.'*D'.$row);
	}
	$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);
```
