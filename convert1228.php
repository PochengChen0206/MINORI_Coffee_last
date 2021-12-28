<?php
//讀取 composer 所下載的套件
require_once('vendor/autoload.php');
require_once 'db.inc.php';

//你的 excel 檔案路徑 (含檔名)
$inputFileName = './Minori_DB_Record of Products.xlsx';


//透過套件功能來讀取 excel 檔
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

//讀取當前工作表(sheet)的資料列數
$sheet = $spreadsheet->getSheetByName('products');
// $sheet = $spreadsheet->getActiveSheet();
$highestRow = $sheet->getHighestRow();

for ($i = 3; $i <= $highestRow; $i++) {
    if ($sheet->getCell("B" . $i)->getValue() === '') break;
    $prod_name =  $sheet ->getCell("B".$i) -> getValue();
    $prod_image = $sheet->getCell("C" . $i)->getValue();
    $prod_thumbnail = $sheet->getCell("D" . $i)->getValue();
    $prod_price = $sheet->getCell("E" . $i)->getValue();
    $prod_description = $sheet->getCell("F" . $i)->getValue();
    $cat_id = $sheet->getCell("G" . $i)->getValue();
    // echo "{$navbar_name}, {$parent_id}\n"; //\n是ターミナル讀取用的換行

    $sql = "INSERT INTO `products`(`prod_name`, `prod_image`, `prod_thumbnail`, `prod_price`, `prod_description`, `cat_id` )
            VALUES ('{$prod_name}', '{$prod_image}', '{$prod_thumbnail}', {$prod_price}, '{$prod_description}', {$cat_id})"; //id可以不用寫會自動代入
    echo $sql . "\n";
    $stmt = $pdo->query($sql);
    if ($stmt->rowCount() > 0) {
        echo $pdo->lastInsertId() . "\n";
    }
}
