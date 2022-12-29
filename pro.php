<?php
// The amounts of products to show on each page
$num_products_on_each_page = 8;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM pets WHERE category="cat" ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM pets')->rowCount();
?>

<?=template_header('Pro')?>

<!--============================-->


<div class="hero__content container mx-auto " style="background-color: #F0FFFF;" >

<div class="row px-0 mx-0 align-items-center" >
        <div class="col-lg-6 px-0">
        <h1 class="hero__title mb-3">PET HEAVEN</h1>
          <h4 >
            OUR SERVICE IS <span class="highlight">BETTER</span> THAN OTHER
          </h4>
          <p class="hero__paragraph mb-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard
          </p>
          <div class="hero__btns-container">
            <a class="hero__btn btn btn-primary mb-2 mb-lg-0" href="#">
              Get Free App
            </a>
            <a class="hero__btn btn btn-secondary mx-lg-3" href="#">
              Join With Us
            </a>
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
          <div class="hero__img-container">
          <img src="asset/imgs/rdog.png" class="hero__img w-100">
            <!--
            <img src="asset/imgs/pethead.png" class="hero__img w-100">
            -->
          </div>
        </div>
      </div>
</div>
<!--==============================-->
<hr>
<!--=====================================-->

<div class="col-lg-8 col-xl-7 mx-auto text-center mb-5">
        <p class="block__pre-title mb-2">WHY CHOOSING US</p>
        <h1 class="block__title mb-3">Easy Process With <span class="highlight">Best Services</h1>
        <p class="block__paragraph mb-0">

          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>


<!--=======================================-->



<div class="products content-wrapper">
    <h1>Dogs</h1>
    <hr>
    

    
    <p><?=$total_products?> Products</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        
            
       
          
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
        
        
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
            <span class="owner"><?=$product['owner']?></span>
        </a>
                     
        
        <?php endforeach; ?>
    </div>
    

   




    
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=pros&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=pro&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>

<?=template_footer()?>