<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Product Reviews</li>
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
                              <h3>Product Reviews</h3>
                              
                              <div class="row">
                               <div class="col-12 col-md-12">
<div class="card">
<div class="card-header">
<h5 class="mb-0 h6">Product Reviews</h5>
</div>
<div class="card-body">
<table class="table aiz-table mb-0 footable footable-1 breakpoint-lg" style="">
<thead>
<tr class="footable-header">

<th >#</th>
<th>Product</th>
    <th align="center" style="    text-align: center;">Reviews</th></tr>
</thead>
<tbody>



<tr>
<td >1</td>
<td>Mobile</td>
    <td><ul class="stars">
                            <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul></td>
</tr>



</tbody></table>

</div>
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