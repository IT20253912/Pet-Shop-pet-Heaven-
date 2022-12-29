<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM pets WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<?=template_header('Product')?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

</style>


</head>




<div class="product content-wrapper">
    
<img src="asset/petimgs/all/<?=$product['img']?>" width="500" height="500" alt="<?=$product['name']?>">
    
<div id="product" class="block-5 space-between-blocks">
<div >

        <h1 class="name"><span class="badge badge-primary">Name :&nbsp;</span>&nbsp;<?=$product['name']?></h1>
        <h3 class="name"><span class="badge badge-success">Pet Owner Name :</span>&nbsp;<?=$product['owner']?></h3>
        <span class="price">** Price Drop ** - 
            &dollar;<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&dollar;<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
        <h3 class="name"><span class="badge badge-warning">Price : </span> Lkr :<?=$product['price']?></h3>
        
        <br>
        <span class="price">Available Dogs Count : <?=$product['quantity']?></span>
               
        
        
        <!--create add to cart option (start)-->
        <!--
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
            -->
        <!--create add to cart option (end)-->
        
       
        <h5 class="name">Description : <?=$product['desc']?></h5>
    </div>
</div>
            </div>
           

     






<?=template_footer()?>