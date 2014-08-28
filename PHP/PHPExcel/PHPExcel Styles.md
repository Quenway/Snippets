# PHPExcel:Styles  


**Set default font**
```php
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);
```

**Set fonts**
```php
<?php
$sheet->getStyle('B1')->getFont()->setName('Candara');
$sheet->getStyle('B1')->getFont()->setSize(20);
$sheet->getStyle('B1')->getFont()->setBold(true);
$sheet->getStyle('B1')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
$sheet->getStyle('D1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$sheet->getStyle('D13')->getFont()->setBold(true);
```

**Set alignments**
```php
$sheet->getStyle('D11')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$sheet->getStyle('A18')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
$sheet->getStyle('A18')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle('B5')->getAlignment()->setShrinkToFit(true);
```

## Add rich-text
```php
$objRichText = new PHPExcel_RichText();
$objRichText->createText('This invoice is ');

$objPayable = $objRichText->createTextRun('payable within thirty days after the end of the month');
$objPayable->getFont()->setBold(true);
$objPayable->getFont()->setItalic(true);
$objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );

$objRichText->createText(', unless specified otherwise on the invoice.');
$objPHPExcel->getActiveSheet()->getCell('A18')->setValue($objRichText);
```

## Comments
```php
$sheet->getComment('E13')->setAuthor('PHPExcel');
$objCommentRichText = $sheet->getComment('E13')->getText()->createTextRun('PHPExcel:');
$objCommentRichText->getFont()->setBold(true);
$sheet->getComment('E13')->getText()->createTextRun("\r\n");
$sheet->getComment('E13')->getText()->createTextRun('some text....');
$sheet->getComment('E13')->setWidth('100pt');
$sheet->getComment('E13')->setHeight('100pt');
$sheet->getComment('E13')->setMarginLeft('150pt');
$sheet->getComment('E13')->getFillColor()->setRGB('EEEEEE');
```

## Shared Styles
```php
$sharedStyle = new PHPExcel_Style();
$sharedStyle1->applyFromArray(
  array('fill'  => array(
  	                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color'	=> array('argb' => 'FFCCFFCC')
                  ),
        'borders' => array(
                    'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                    'right'  => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM)
                    )
    ));
    
$objPHPExcel->getActiveSheet()->setSharedStyle($sharedStyle, "A1:T100");
```

## Duplicate Style
```php
$style = new PHPExcel_Style();
$style->getFont()->setSize(20);
$coord = PHPExcel_Cell::stringFromColumnIndex($col) . $row;
$worksheet->setCellValue($coord, $str);
// Copy the style to that cell
$worksheet->duplicateStyle($style, $coord);
```
