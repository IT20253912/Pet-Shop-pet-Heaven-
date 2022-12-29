<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM pets ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Home')?>


<!--
    
<div class="featured">
    <h2>Gadgets</h2>
    <p>Essential gadgets for everyday use</p>
</div>
-->
<!--new start-->


<div class="hero__content container mx-auto">
      <div class="row px-0 mx-0 align-items-center">
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
          <img src="asset/imgs/service.jpg" class="hero__img w-100">
            <!--
            <img src="asset/imgs/pethead.png" class="hero__img w-100">
            -->
          </div>
        </div>
      </div>
    </div>


      <!-- ===================================== -->

  <div id="product" class="block-5 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="col-lg-8 col-xl-7 mx-auto text-center mb-5">
        <p class="block__pre-title mb-2">WHY CHOOSING US</p>
        <h1 class="block__title mb-3">Easy Process With <span class="highlight">Best Services</h1>
        <p class="block__paragraph mb-0">

          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="row align-items-center flex-column-reverse flex-lg-row px-2">
        <!-- LEFT CONTENT -->
        <div class="col-lg-4">
          <div class="card-2 d-flex flex-row flex-lg-row-reverse">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-heartbeat"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Pet Boarding</h3>
              <p class="card-2__paragraph">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex flex-row flex-lg-row-reverse">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-briefcase-medical"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Pet Training</h3>
              <p class="card-2__paragraph">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex flex-row flex-lg-row-reverse">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-bell"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Pet Feeding</h3>
              <p class="card-2__paragraph">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.
              </p>
            </div>
          </div>
        </div>
        <!-- IMAGE -->
        <div class="col-lg-4 my-5 text-center">
        <img src="asset/imgs/pethead.png" class="w-75">
          <!--
          <img src="asset/imgs/service.jpg" class="w-75">
          pethead
          -->
        </div>
        <!-- RIGHT CONTENT -->
        <div class="col-lg-4">
          <div class="card-2 d-flex">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-map-marker-alt"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Pet Adoption</h3>
              <p class="card-2__paragraph">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-fingerprint"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Pet Exercise</h3>
              <p class="card-2__paragraph">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-mobile"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Pet Treatment</h3>
              <p class="card-2__paragraph">
                Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================================== -->


    <!-- ===================================== -->

    <div id="features" class="block-11 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center">
        <p class="block__pre-title mb-2">GET MORE DETAILS</p>
        <h1 class="block__title mb-3">Our Main Categories <span class="highlight">Details</span></h1>
        <p class="block__paragraph mb-0">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row px-2">
        <div class="col-lg-4 col-xl-5 p-lg-5">
          <img class="w-100" src="asset/imgs/ctgry.jpg">
        </div>
        <div class="col-lg-8 col-xl-6">
          <div class="row">
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 card-1--selected text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-dog"></i>
                </span>
                <h3 class="card-1__title mb-2">Dog</h3>
                <p class="card-1__paragraph">
                  Lorem Ipsum is simply dummy text of
                  the printing and typesetting industry.
                  Lorem Ipsum has been the industry’s
                  standard.
                </p>

                <!--button test start -->
                <div class="hero__btns-container">
                    <a class="hero__btn btn btn-secondary mx-lg-3" href="index.php?page=dog">
                        Open 
                    </a>
                </div>
                <!--button test end -->

              </div>
            </div>
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-cat"></i>
                </span>
                <h3 class="card-1__title mb-2">Cat</h3>
                <p class="card-1__paragraph">
                  Lorem Ipsum is simply dummy text of
                  the printing and typesetting industry.
                  Lorem Ipsum has been the industry’s
                  standard.
                </p>
                <!--button test start -->
                <div class="hero__btns-container">
                    <a class="hero__btn btn btn-secondary mx-lg-3" href="index.php?page=cat">
                        Open
                    </a>
                </div>
                <!--button test end -->
              </div>
            </div>
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-dove"></i>
                </span>
                <h3 class="card-1__title mb-2">Bird</h3>
                <p class="card-1__paragraph">
                  Lorem Ipsum is simply dummy text of
                  the printing and typesetting industry.
                  Lorem Ipsum has been the industry’s
                  standard.
                </p>
                <!--button test start -->
                <div class="hero__btns-container">
                    <a class="hero__btn btn btn-secondary mx-lg-3" href="index.php?page=bird">
                        Open
                    </a>
                </div>
                <!--button test end -->
              </div>
            </div>
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-fish"></i>
                </span>
                <h3 class="card-1__title mb-2">Fish $ Other</h3>
                <p class="card-1__paragraph">
                  Lorem Ipsum is simply dummy text of
                  the printing and typesetting industry.
                  Lorem Ipsum has been the industry’s
                  standard.
                </p>
                <!--button test start -->
                <div class="hero__btns-container">
                    <a class="hero__btn btn btn-secondary mx-lg-3" href="index.php?page=fish">
                        Open
                    </a>
                </div>
                <!--button test end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======================================== -->




<!--new end-->
    
    <!--category animation end-->

        <!-- recent added start-->
        <div class="recentlyadded content-wrapper">
            <h2>Recently Added Pets</h2>
                <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="asset/petimgs/all/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    </div>
    <!-- recent added end-->


  <!-- ======================================== -->

  <div id="testimonials" class="block-20 space-between-blocks">
    <div class="container">
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">QUALIFIED PETS CARE PROFESSIONALS</h1>
        <p class="block__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="row px-2 pt-4">
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard

              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="asset/imgs/user.jpeg">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="asset/imgs/user.jpeg">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="asset/imgs/user.jpeg">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- =================================== -->



<?=template_footer()?>
