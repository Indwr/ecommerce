<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Withdraw Requests</li>
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
                              <h3>Withdraw Requests</h3>
                              <div class="action__add_pro mb-3">
                               
                                    <div class="add_____pro">
                                        
                                        
                                        <a data-toggle="modal" data-target="#myModal" class="btn btn-dark"><i class="fas fa-plus-circle"></i>Send Withdraw Request</a>
                                   </div>
                                   
                                   
                                   <div class="search__pro">
                                      
<div class="__pro">
<h6>Pending Balance:- <span>Rs78.400</span></h6>

</div>

                                   </div>
                               </div>
                               
                               
                               
                               
                               
                               
                               <div class="card">
<div class="card-header">
<h5 class="mb-0 h6">Withdraw Request history</h5>
</div>
<div class="card-body">
<table class="table aiz-table mb-0 footable footable-1 breakpoint-lg" style="">
<thead>
<tr class="footable-header">


<th>#</th>
    <th>Date</th>
    <th>Amount</th>
    </tr>
</thead>
<tbody>



<tr>
<td>1</td>
<td>1-12-2020</td>
<td>Rs 1200/-</td>
</tr>
    <tr>
<td>2</td>
<td>1-12-2020</td>
<td>Rs 1200/-</td>
</tr>


</tbody></table>

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


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Send A Withdraw Request
</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
     <form>
            <div class="form-group">
            <label>Amount <span>required</span></label>
                <input type="text" placeholder="Enter Amount" class="form-control">
         </div>
         
         <div class="form-group">
            <label>Message </label>
              <textarea name="message" rows="8" class="form-control mb-3"></textarea>
         </div>
         <div class="form-footer">
         <button type="submit" class="btn btn-dark">Send</button>
         </div>
          </form>
      </div>

      

    </div>
  </div>
</div>
<?php include "footer.php"; ?>