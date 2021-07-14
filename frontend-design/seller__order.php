<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Seller Order</li>
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
                              <h3>Order</h3>
                               
                               <div class="action__add_pro mb-3">
                               
                               
                                   
                                   
                                   <div class="search__pro  d_flex">
                                    <div class="form-group">
  <select class="form-control" id="sel1">
    <option>Filter by Delivered Status</option>
    <option>Delivered</option>

  </select>
</div>
                                       
                                       
                                       <div class="form-group">
  <select class="form-control" id="sel1">
    <option>Filter by Payment Status</option>
    <option>Paid</option>

  </select>
</div>
                                       
                                       
                                       <div class="form-group">
  <input type="text" class="form-control" placeholder="Type Order code & hit Enter">
</div>
                                   </div>
                               </div>
                               
                              <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2018</td>
                                                                <td>Approved</td>
                                                                <td>$200</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2017</td>
                                                                <td>On Hold</td>
                                                                <td>$990</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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