<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Seller Products</li>
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
                              <h3>All Products</h3>
                               
                               <div class="action__add_pro mb-3">
                               
                                    <div class="add_____pro">
                                        <a href="#" class="btn btn-dark"><i class="fas fa-plus-circle"></i> 
Add New Digital Product</a>
                                   </div>
                                   
                                   
                                   <div class="search__pro">
                                    <div class="input-group">
  <input type="text" class="form-control" placeholder="Search Products">
  <div class="input-group-append">
    <button class="btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
  </div>
</div>
                                   </div>
                               </div>
                               
                              <div class="table-responsive">
                              <table class="table " style="">
   <thead>
      <tr class="footable-header">
         <th>#</th>
         <th>Name</th>
         <th>Category</th>
         <th>Current Qty</th>
         <th>Base Price</th>
         <th>Published</th>
         <th>Featured</th>
         <th>Options</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td class="footable-first-visible" style="display: table-cell;">1</td>
         <td style="display: table-cell;">
            <a href="#" target="_blank" class="text-reset">
            admin
            </a>
         </td>
         <td >
            Demo category 3
         </td>
         <td >
            0                            
         </td>
         <td >1200</td>
         <td >
          
             
        <label class="switch">
  <input type="checkbox" checked>
  <span class="slider_range round"></span>
</label>
         </td>
         <td >
            <label class="switch">
  <input type="checkbox" checked>
  <span class="slider_range round"></span>
</label>
         </td>
         <td class="table___action">
            <a  href="#" title="Edit" class="btn btn-info btn-icon btn-circle btn-sm">
            <i class="fas fa-edit"></i>
            </a>
            <a href="#" class="btn btn-success btn-icon btn-circle btn-sm" title="Duplicate">
            <i class="far fa-copy"></i>
            </a>
            <a href="#" class="btn btn-danger btn-icon btn-circle btn-sm confirm-delete" data-href="#" title="Delete">
           <i class="far fa-trash-alt"></i>
            </a>
         </td>
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