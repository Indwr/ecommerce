<?php include "header.php"; ?>
    
    <section class="page_header">
        <div class="container">
            <div class="col-12 text-center">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    
    </section>
    
    
    <section class="pb-5">
     <div class="login-register-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2" class="">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="Username" class="text_inp">
                                                <input type="password" name="user-password" placeholder="Password" class="text_inp">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
        <div class="login-register-form">
            <form action="#" method="post">
                <input type="text" name="user-name" placeholder="Username" class="text_inp">
                <input name="user-email" placeholder="Email" type="email" class="text_inp">
                
                <input name="user-city" placeholder="City" type="text" class="text_inp">
                <input name="user-mobile" placeholder="Mobile" type="tel" class="text_inp">
               
                <input type="password" name="user-password" placeholder="Password" class="text_inp">
                <div class="button-box">
                    <button type="submit">Register</button>
                </div>
            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <?php include "footer.php"; ?>