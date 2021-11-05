<?php require 'inc/head.php'; 
require 'inc/data/products.php';
if ($_SESSION['login'] == NULL) {
    header("Location: login.php");
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php 
        $products = $_SESSION['product'];
        foreach ($products as $key => $product) {
            echo "<img src='assets/img/product-". $key . ".jpg' style = 'width: 60px; margin-right: 5px' alt='" . $catalog[$key]['name'] . "'>". $catalog[$key]['name'] . " : " . $product . "<br>";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
