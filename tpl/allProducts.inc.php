<div class="hc-products-grp-control">
<!-- product card 1 -->
<?php
$sql = 
"SELECT `prod_id`, `prod_name`,  `prod_thumbnail`, `prod_price`
FROM `relative` 
INNER JOIN `categories` 
ON`relative`.`cat_id` = `categories`.`id`
INNER JOIN`products`
ON`relative`.`prod_id`=`products`.`id`";

//    LIMIT {$offset}, {$numPerPage}";
$stmt = $pdo->query($sql);
if ($stmt->rowCount() > 0) {
    $arr = $stmt->fetchAll();
    foreach ($arr as $obj) {
?>
        <div class="hc-pds-card-control col-lg-4 col-md-6">
            <div class="hc-pds-card">
                <div class="hc-pds-img">
                    <a href="beanList_detail_page.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&prod_id=<?= $obj['prod_id'] ?>">
                        <img src="<?= $obj['prod_thumbnail'] ?>" alt="">
                    </a>
                </div>
                <div class="hc-card-content-container">
                    <div class="hc-card-content-title">
                        <h5><?= $obj['prod_name'] ?></h5>
                    </div>
                    <div class="hc-card-content-price">
                        <span>NT$<?= $obj['prod_price'] ?>~</span>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>
</div>