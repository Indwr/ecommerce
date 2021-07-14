<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Shops</li>
         </ul>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <!-- My Account Page Start -->
            <div class="myaccount-page-wrapper">
               <!-- My Account Tab Menu Start -->
               <div class="row">
                  <div class="col-lg-3 col-md-4">
                     <?php include "dashboard__menu.php"; ?>
                  </div>
                  <!-- My Account Tab Menu End -->
                  <!-- My Account Tab Content Start -->
                  <div class="col-lg-9 col-md-8">
                     <div class="tab-content">
                        <div class="tab_page " >
                           <div class="myaccount-content">
                              <h3>Shops</h3>
                              
                              <div class="">
                               <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 h6">Basic Info</h5>
        </div>
        <div class="card-body">
            <form class="" action="https://ecommerce2.cpeel.net/shops/1" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="_token" value="JBjiC7jYsl6hk1thcEdNTDGjz7l28he7Y4TiWilI">                <div class="row">
                    <label class="col-md-2 col-form-label">Shop Name<span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control mb-3" placeholder="Shop Name" name="name" value="Demo Seller Shop" required="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-2 col-form-label">Shop Logo</label>
                    <div class="col-md-10">
                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                            </div>
                            <div class="form-control file-amount">Choose file</div>
                            <input type="hidden" name="logo" value="" class="selected-files">
                        </div>
                        <div class="file-preview box sm"></div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-2 col-form-label">Shop Address <span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control mb-3" placeholder="Address" name="address" value="House : Demo, Road : Demo, Section : Demo" required="">
                    </div>
                </div>
                 
                
                <div class="row">
                    <label class="col-md-2 col-form-label">Meta Title<span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control mb-3" placeholder="Meta Title" name="meta_title" value="Demo Seller Shop Title" required="">
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-2 col-form-label">Meta description<span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <textarea name="meta_description" rows="3" class="form-control mb-3" required="">Demo description</textarea>
                    </div>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
          
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 h6">Banner Settings</h5>
        </div>
        <div class="card-body">
            <form class="" action="#" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="">
                <input type="hidden" name="_token" value="">
                <div class="row mb-3">
                    <label class="col-md-2 col-form-label">Banners (1500x450)</label>
                    <div class="col-md-10">
                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                            </div>
                            <div class="form-control file-amount">Choose file</div>
                            <input type="hidden" name="sliders" value="" class="selected-files">
                        </div>
                        <div class="file-preview box sm"></div>
                        <small class="text-muted">We had to limit height to maintian consistancy. In some device both side of the banner might be cropped for height limitation.</small>
                    </div>
                </div>

                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
            
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0 h6">Social Media Link</h5>
        </div>
        <div class="card-body">
            <form class="" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="_token" value="">
                <div class="form-box-content p-3">
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label">Facebook</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Facebook" name="facebook" value="www.facebook.com">
                            <small class="text-muted">Insert link with https </small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label">Twitter</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Twitter" name="twitter" value="www.twitter.com">
                            <small class="text-muted">Insert link with https </small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label">Google</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Google" name="google" value="www.google.com">
                            <small class="text-muted">Insert link with https </small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 col-form-label">Youtube</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Youtube" name="youtube" value="www.youtube.com">
                            <small class="text-muted">Insert link with https </small>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
                               
                               
                               
                               </div>
                              
                           </div>
                        </div>
                        <!-- Single Tab Content End -->
                     </div>
                  </div>
                  <!-- My Account Tab Content End -->
               </div>
            </div>
            <!-- My Account Page End -->
         </div>
      </div>
   </div>
</section>
<?php include "footer.php"; ?>