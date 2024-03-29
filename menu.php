<!DOCTYPE html>
<html lang="en">

<head>
   <title>menu</title>
   <link rel="stylesheet" href="css/new.css">
   <link rel="stylesheet" href="menu.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="new.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/bootstrap-grid.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <link rel="icon" type="image/x-icon" href="./images/food2.ico">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,700&display=swap" rel="stylesheet">

</head>

<body class="good">

   <?php include 'header.php'; ?>
   <main>

      <div class="container">
         <div class="row">
            <div class="col-md-3">

               <div id="cart">
                  <h2>Shopping Cart</h2>
                  <ul id="cart-items"></ul>
                  <p>Total: $<span id="cart-total">0.00</span></p>
                  <div id="checkOutBtnHolda">
                     <a href=""><button type="button" class="menu-btn1" id="">Checkout</button></a>
                  </div>
               </div>
            </div><!--------end of col-md-3------->
            <div class="col-md-9">
               <section class="menu1">
                  <div class="menu-container">
                     <div class="menu-head">
                        <h2 class="color">Special Food Menu</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium porro tempora
                           aliquid
                           officiis voluptate necessitatibus minus obcaecati. Quod perferendis numquam dignissimos odio
                           nobis
                           asperiores!</p>

                        <p class="color">CLICK ON EACH FOOD IMAGE TO SEE IT IN FULL VIEW</p>
                     </div>

                     <div class="menu-btns">
                        <button type="button" class="menu-btn active-btn" id="featured">Featured</button>
                        <button type="button" class="menu-btn" id="today-special">Today's special</button>
                        <button type="button" class="menu-btn" id="new-arrival">Coming soon</button>
                     </div>

                     <div class="food-items">
                        <!-- item -->

                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food48.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Vegetable salad</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$25.00</h3>
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="images/food56.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">White soup/Ofe nsala</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$20.00</h3>
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="images/food27.jpg"alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Smoothies</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$35.00</h3>
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Jollof rice with seafood fried rice and beef in sauce</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$27.00</h3>
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="images/food10.jpg"
                                 alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Okra soup</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$15.00</h3>
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->


                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food57.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Seafood okra</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$15.00</h3>
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="images/food54.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Oha soup</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$29.00</h3>
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="images/food21.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Fruit salad</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$35.00</h3>
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food18.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Akara and Pap</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$9.00</h3>
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="images/food44.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Catfish peppersoup</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$5.00</h3>
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="images/food41.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Peppered snail</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$11.00</h3>
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food15.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Village Rice</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$5.00</h3>
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="images/food5.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Egusi soup</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$12.00</h3>
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="images/food46.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Efo riro</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$14.00</h3>
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item featured">
                           <div class="food-img">
                              <img src="images/food42.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Fish and ponmo sauce</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$22.00</h3>
                              <p class="category">Categories: <span>Featured</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item today-special">
                           <div class="food-img">
                              <img src="images/food7.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Ofada sauce</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$7.00</h3>
                              <p class="category">Categories: <span>Today's Special</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>
                        <!-- end of item -->

                        <!-- item -->
                        <div class="food-item new-arrival">
                           <div class="food-img">
                              <img src="images/food60.jpg" alt="food image">
                           </div>
                           <div class="food-content">
                              <h2 class="food-name">Beans and Corn</h2>
                              <div class="line"></div>
                              <h3 class="food-price">$26.00</h3>
                              <p class="category">Categories: <span>Coming soon</span></p>
                           </div>
                           <div> <button type="button" class="menu-btn1" id="">Add to cart</button></div>
                        </div>


                        <!-- end of item -->
               </section>
            </div><!------end of col-md-9------>
         </div><!-------end of row-------->

         <div id="myModal" class="modal">
            <div class="modal-content">
               <span class="close" onclick="closeModal()">&times;</span>
               <img id="modalImg">
            </div>
         </div>












         <script src="script.js"></script>

   </main>


   <?php include 'footer.php'; ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="js/jquery-3.6.4.js"></script>
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="menu.js">
   </script>
</body>

</html>