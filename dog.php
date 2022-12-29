<?php
// The amounts of products to show on each page
$num_products_on_each_page = 8;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM pets WHERE category="dog" ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM pets WHERE category="dog" ')->rowCount();
?>

<?=template_header('Pro')?>

<!--============================-->

<head>
<link rel="stylesheet" href="asset/testcss/style.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>






<div class="hero__content container mx-auto " style="background-color: #FFFEFE;" >

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
        <p class="block__pre-title mb-2">What is your choise ?</p>
        <h1 class="block__title mb-3">Select Your <span class="highlight">Favorite Category</h1>
        <p class="block__paragraph mb-0">
        </p>
      </div>


<!--=======================================-->

<!--====new test start=================================-->       
<section class="card-area">

<!-- Card: dog -->
<section class="card-section">
    <div class="card">
        <div class="flip-card">
            <div class="flip-card__container">
                <div class="card-front">
                    <div class="card-front__tp card-front__tp--city">
                       
                    <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-dog"></i>
                </span>
                   
                

                   <h2 class="card-front__heading">
                    Dog Lovers
                </h2>
                
                
                    </div>

                    <div class="card-front__bt">
                        <p class="card-front__text-view card-front__text-view--city">
                            View me
                        </p>
                    </div>
                </div>
                <div class="card-back">

                
                 
                    <video class="video__container" autoplay muted loop>
                        <source class="video__media" src="asset/video/dd.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="inside-page">
            <div class="inside-page__container">
                <h3 class="inside-page__heading inside-page__heading--city">
                    
                </h3>
                <p class="inside-page__text">
                   
            
                </p>
                <a href="index.php?page=dog" class="inside-page__btn inside-page__btn--city">View deals</a>
            </div>
        </div>
    </div>
</section>

<!-- Card: Ski -->
<section class="card-section">
    <div class="card">
        <div class="flip-card">
            <div class="flip-card__container">
                <div class="card-front">
                    <div class="card-front__tp card-front__tp--ski">
                    <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-cat"></i>
                </span>
                                   <h2 class="card-front__heading">
                                       Cat Lovers
                                   </h2>
                                  
                    </div>

                    <div class="card-front__bt">
                        <p class="card-front__text-view card-front__text-view--ski">
                            View me
                        </p>
                    </div>
                </div>

                <div class="card-back">
                    <video class="video__container" autoplay muted loop>
                        <source class="video__media" src="asset/video/cat.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="inside-page">
            <div class="inside-page__container">
            <h3 class="inside-page__heading inside-page__heading--city">
                    
                </h3>
                <p class="inside-page__text">
                   
            
                </p>
                <a href="index.php?page=cat" class="inside-page__btn inside-page__btn--ski">View deals</a>
            </div>
        </div>
    </div>
</section>

<!-- Card: Beach -->
<section class="card-section">
    <div class="card">
        <div class="flip-card">
            <div class="flip-card__container">
                <div class="card-front">
                    <div class="card-front__tp card-front__tp--beach">
                    <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-dove"></i>
                </span>
                   
                                   <h2 class="card-front__heading">
                                       Birds Lovers
                                   </h2>
                                   <p class="card-front__text-price">
                                  
                                   </p>
                    </div>

                    <div class="card-front__bt">
                        <p class="card-front__text-view card-front__text-view--beach">
                            View me
                        </p>
                    </div>
                </div>
                <div class="card-back">
                    <video class="video__container" autoplay muted loop>
                        <source class="video__media" src="asset/video/bird.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="inside-page">
            <div class="inside-page__container">
                <h3 class="inside-page__heading inside-page__heading--beach">
                 
                </h3>
                <p class="inside-page__text">

                </p>
                <a href="index.php?page=bird" class="inside-page__btn inside-page__btn--beach">View deals</a>
            </div>
        </div>
    </div>
</section>

<!-- Card: Camping -->
<section class="card-section">
    <div class="card">
        <div class="flip-card">
            <div class="flip-card__container">
                <div class="card-front">
                    <div class="card-front__tp card-front__tp--camping">
                    <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-fish"></i>
                </span>
                                   <h2 class="card-front__heading">
                                       Fish Lovers
                                   </h2>
                                   <p class="card-front__text-price">
                                       
                                   </p>
                    </div>

                    <div class="card-front__bt">
                        <p class="card-front__text-view card-front__text-view--camping">
                            View me
                        </p>
                    </div>
                </div>
                <div class="card-back">
                    <video class="video__container" autoplay muted loop>
                        <source class="video__media" src="asset/video/fish.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="inside-page">
            <div class="inside-page__container">
                <h3 class="inside-page__heading inside-page__heading--beach">
                 
                </h3>
                <p class="inside-page__text">

                </p>
                <a href="index.php?page=fish" class="inside-page__btn inside-page__btn--beach">View deals</a>
            </div>
        </div>
       
    </div>
</section>
</section>
<!--========new test end======================-->


<div class="products content-wrapper">
    <h1>All Dogs</h1>
    <hr>
    
    <div id="testimonials" class="block-20 space-between-blocks">
    
    <p><?=$total_products?> Products</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        
            
       
          
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        
            <img src="asset/petimgs/dog/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
        
        
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