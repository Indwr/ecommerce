<?php include "header.php"; ?>
    
    
    <section class="page_header">
        <div class="container">
            <div class="col-12 text-center">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>/</li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    
    </section>
    
    <section class="shop_page_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-12" id="filter_mobile">
                    
                    <div class="mobile_fil">
                    
                     <ion-icon class="mobile_fil_close" name="close-outline"></ion-icon>
                        
                        <h5>Filter Products</h5>
                    </div>
                    <div class="sidebar-wrapper">
                    <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                                <h4 class="sidebar-widget-title">Categories </h4>
                                <div class="shop-catigory">
                                    <ul>
                                        <li><a href="shop.php">T-Shirt</a></li>
                                        <li><a href="shop.php">Shoes</a></li>
                                        <li><a href="shop.php">Clothing </a></li>
                                        <li><a href="shop.php">Women </a></li>
                                        <li><a href="shop.php">Baby Boy </a></li>
                                        <li><a href="shop.php">Accessories </a></li>
                                    </ul>
                                </div>
                            </div>
                        
                        <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                                <h4 class="sidebar-widget-title">Price Filter </h4>
                                <div class="shop-catigory">
                                    <div class="slider_ui">
                                                                       <p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly >
</p>
                                    <div id="slider-range"></div>
                                    
                                    </div>
 
                                    
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        
                        
                        
                        <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Refine By </h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">New <span>5</span></a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">In Stock <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        
                        
                        
                        <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Size </h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        
                        
                        
                        
                        <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Color </h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        
                        
                        
                        <div class="sidebar-widget shop-sidebar-border pt-40">
                                <h4 class="sidebar-widget-title">Popular Tags</h4>
                                <div class="tag-wrap sidebar-widget-tag">
                                    <a href="#">Clothing</a>
                                    <a href="#">Accessories</a>
                                    <a href="#">For Men</a>
                                    <a href="#">Women</a>
                                    <a href="#">Fashion</a>
                                </div>
                            </div>
                    </div>
                </div>
                  <!-- sidebar-wrapper -->
            
                
                
                
                
                
                
                
                <div class="col-xl-9 col-lg-9 col-12">
                <div class="shop_product_area">
                    <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <div class="view-mode nav">
                                   <span><ion-icon class="filter" name="options-outline"></ion-icon></span>
                                    
                                </div>
                                <p>Showing 1 - 20 of 30 results </p>
                            </div>
                            <div class="product-sorting-wrapper">
                                <div class="product-shorting shorting-style">
                                    <label>View :</label>
                                    <select>
                                        <option value=""> 20</option>
                                        <option value=""> 23</option>
                                        <option value=""> 30</option>
                                    </select>
                                </div>
                                <div class="product-show shorting-style">
                                    <label>Sort by :</label>
                                    <select>
                                        <option value="">Default</option>
                                        <option value=""> Name</option>
                                        <option value=""> price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    <div class="row">
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img1.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom" ><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">Women Frok Dress</a></h5>
                                   <h4 class="price">$120</h4>
                            </div>
                    
                    </div>
                </div>
                
                
                
                
                
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img2.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">Lether Gray Tuxedo</a></h5>
                                   <h4 class="price">$100</h4>
                            </div>
                    
                    </div>
                </div>
                
                
                
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img3.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">woman full sliv dress</a></h5>
                                   <h4 class="price">$120</h4>
                            </div>
                    
                    </div>
                </div>
                
                
                
                <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img4.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">light blue Shirt</a></h5>
                                   <h4 class="price">$20</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img5.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">blue dress for woman</a></h5>
                                   <h4 class="price">$60</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img8.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">Men blue jins Shirt</a></h5>
                                   <h4 class="price">$30</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img7.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">White black line dress</a></h5>
                                   <h4 class="price">$30</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img6.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">Casual check shirt</a></h5>
                                   <h4 class="price">$30</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img4.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">light blue Shirt</a></h5>
                                   <h4 class="price">$20</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img3.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">woman full sliv dress</a></h5>
                                   <h4 class="price">$120</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img2.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">Lether Gray Tuxedo</a></h5>
                                   <h4 class="price">$100</h4>
                            </div>
                    
                    </div>
                </div>
                        
                        
                        <div class="col-lg-4 col-6 col-md-6">
                    <div class="product">
                        <div class="product-img  mb-15">
                                        <a href="product-details.php">
                                            <img src="images/product_img1.jpg" alt="" class="img-fluid "> 
                                        </a>
                            <div class="product-action-2">
                                            <button title="Wishlist"><i class="far fa-heart"></i></button>
                                            <button title="bag"><i class="fas fa-shopping-bag"></i></button>
                                <button title="zoom"><i class="fas fa-search-plus"></i></button>
                                <button title="Compare"><i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                        
                        <div class="product-action-3">
                            <ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                            <h5 class="pro-name"><a href="#">Women Frok Dress</a></h5>
                                   <h4 class="price">$120</h4>
                            </div>
                    
                    </div>
                </div>
        
                
                
                <div class="col-12 text-center pb-3 pt-3">
                 <p class="explore">All Recommended  Products For You <a href="#shop.php">Load More Products </a></p>   
                </div>
            </div>
                
                </div>
            </div>
            </div>
            
          
            
            
            
            
            
     
            
        </div>
    </section>
    
    
    
    
<?php include "footer.php"; ?>