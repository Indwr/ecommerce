<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Manage Profile</li>
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
                              <h3>Manage Profile</h3>
                              
                               
                               <form action="#" method="POST" enctype="">
        <input type="hidden" name="" value="">        <!-- Basic Info-->
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0 h6">Basic Info</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Your name" name="name" value="Mr. Seller">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your Phone</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Your Phone" name="phone" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Photo</label>
                    <div class="col-md-10">
                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                            </div>
                            <div class="form-control file-amount">Choose file</div>
                            <input type="hidden" name="photo" value="" class="selected-files">
                        </div>
                        <div class="file-preview box sm"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Your Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" placeholder="New Password" name="new_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Confirm Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                    </div>
                </div>

            </div>
        </div>

        <!-- Address -->
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0 h6">Address</h5>
            </div>
            <div class="card-body">
                <div class="row gutters-10">
                    
                    <div class="col-lg-6 col-12">
                            <div class="border p-3 pr-5 rounded mb-3 position-relative address_new">
                                <div>
                                    <span class="font-weight-bold">Address:</span>
                                    <span class="ml-2">sds</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">Postal Code:</span>
                                    <span class="ml-2">142006</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">City:</span>
                                    <span class="ml-2">abohar</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">Country:</span>
                                    <span class="ml-2">India</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">Phone:</span>
                                    <span class="ml-2">91989899889</span>
                                    
                                </div>
                                
                                
                                <div class="static_drop">
  <button type="button" class="btn-dot">
<i class="fas fa-ellipsis-v"></i>
  </button>
  <div class="dropdown_menu">
    <a class="dropdown_item" href="#">Edit</a>
    <a class="dropdown_item" href="#">Make This Default</a>
    <a class="dropdown_item" href="#">Delete</a>
   
  </div>
</div>
                                
                                
                                                                
                            </div>
                        </div>
                    
                    
                    
                    
                    <div class="col-lg-6 col-12">
                            <div class="border p-3 pr-5 rounded mb-3 position-relative address_new">
                                <div>
                                    <span class="font-weight-bold">Address:</span>
                                    <span class="ml-2">sds</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">Postal Code:</span>
                                    <span class="ml-2">142006</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">City:</span>
                                    <span class="ml-2">abohar</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">Country:</span>
                                    <span class="ml-2">India</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">Phone:</span>
                                    <span class="ml-2">91989899889</span>
                                    
                                </div>
                                
                                
                                <div class="static_drop">
  <button type="button" class="btn-dot">
<i class="fas fa-ellipsis-v"></i>
  </button>
  <div class="dropdown_menu">
    <a class="dropdown_item" href="#">Edit</a>
    <a class="dropdown_item" href="#">Make This Default</a>
    <a class="dropdown_item" href="#">Delete</a>
   
  </div>
</div>
                                
                                
                                                                
                            </div>
                        </div>
                    
                    
                    
                    
                                        <div class="col-lg-6 mx-auto"  data-toggle="modal" data-target="#myAddress">
                        <div class="border p-3 rounded mb-3 c-pointer text-center bg-light">
                            <i class="la la-plus la-2x"></i>
                            <div class="alpha-7">Add New Address</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment System -->
        <div class="card mb-3">
          <div class="card-header">
              <h5 class="mb-0 h6">Payment Setting</h5>
          </div>
          <div class="card-body">
            <div class="row">
                <label class="col-md-3 col-form-label">Cash Payment</label>
                <div class="col-md-9">
                    <label class="switch">
  <input type="checkbox" checked="">
  <span class="slider_range round"></span>
</label>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Bank Payment</label>
                <div class="col-md-9">
                    <label class="switch">
  <input type="checkbox" checked="">
  <span class="slider_range round"></span>
</label>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Bank Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control mb-3" placeholder="Bank Name" value="" name="bank_name">
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Bank Account Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control mb-3" placeholder="Bank Account Name" value="" name="bank_acc_name">
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Bank Account Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control mb-3" placeholder="Bank Account Number" value="" name="bank_acc_no">
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Bank Routing Number</label>
                <div class="col-md-9">
                    <input type="number" lang="en" class="form-control mb-3" placeholder="Bank Routing Number" value="" name="bank_routing_no">
                </div>
            </div>
          </div>
      </div>
      <div class="form-group mb-0 text-right">
          <button type="submit" class="btn btn-dark">Update Profile</button>
      </div>
    </form>
                               
                               
                               <form action="#" method="POST">
       <div class="card mb-3 mt-3">
          <div class="card-header">
              <h5 class="mb-0 h6">Change your email</h5>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-md-2">
                      <label>Your Email</label>
                  </div>
                  <div class="col-md-10">
                      <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" name="email" value="seller@example.com">
                        <div class="input-group-append">
                           <button type="button" class="btn btn-outline-secondary new-email-verification">
                               <span class="d-none loading">
                                   <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Sending Email...
                               </span>
                               <span class="default">Verify</span>
                           </button>
                        </div>
                      </div>
                      <div class="form-group mb-0 text-right">
                          <button type="submit" class="btn btn-dark">Update Email</button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </form>
                              
                              
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

<div class="modal" id="myAddress">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Address

</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
     <form>
            <div class="form-group">
            <label>Address </label>
                <textarea name="message" rows="2" class="form-control "></textarea>
         </div>
         
         <div class="form-group">
            <label>Country
 </label>
             <select class="form-control">
                <option>India</option>
                <option>Usa</option>
                <option>Pakistan</option>
             </select>
         </div>
         
         <div class="form-group">
            <label>City
 </label>
             <select class="form-control">
                <option>Delhi</option>
                <option>Abohar</option>
                <option>Ludhiana</option>
             </select>
         </div>
         
          <div class="form-group">
            <label>Postal Code </label>
                <input type="text" placeholder="" class="form-control">
         </div>
         
         <div class="form-group">
            <label>Phone Number </label>
                <input type="text" placeholder="" class="form-control">
         </div>
         <div class="form-footer">
         <button type="submit" class="btn btn-dark">Save Address</button>
         </div>
          </form>
      </div>

      

    </div>
  </div>
</div>
<?php include "footer.php"; ?>