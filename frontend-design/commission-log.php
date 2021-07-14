<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Commission History</li>
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
                              <h3>Commission History</h3>
                               
                               <div class="action__add_pro mb-3">
                               
<!--
                                    <div class="add_____pro">
                                        <a href="#" class="btn btn-dark"><i class="fas fa-plus-circle"></i> 
Add New Digital Product</a>
                                   </div>
-->
                                   
                                   
                                   <div class="search__pro">
                                    <div class="input-group">
  <input type="date" class="form-control" placeholder="Search Products">
                                        
                                          <input type="date" class="form-control" placeholder="Search Products">
  <div class="input-group-append">
    <button class="btn btn-dark" type="submit">Filter</button>
  </div>
</div>
                                   </div>
                               </div>
                               
                              <div class="table-responsive">
                              <table class="table " style="">
   <thead>
      <tr class="footable-header">
         <th>#</th>
         <th>Admin Commission</th>
         <th>Seller Earning</th>
         
      </tr>
   </thead>
   <tbody>
      <tr>
       
         <td>
            <a href="#" target="_blank" class="text-reset">
            1
            </a>
         </td>
         <td >
            Admin %
         </td>
        
         <td >1200</td>
         
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