<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Support Ticket</li>
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
                              <h3>Support Ticket</h3>
                               
                               <div class="action__add_pro mb-3">
                               
                                    <div class="add_____pro">
                                        <a data-toggle="modal" data-target="#myModalTicket" class="btn btn-dark"><i class="fas fa-plus-circle"></i> Create a Ticket</a>
                                   </div>
                                   
                                   
                                   
                               </div>
                               
                              <div class="table-responsive">
                              <table class="table " style="">
   <thead>
      <tr class="footable-header">
         <th>Subject</th>
         <th>Status</th>
  
      </tr>
   </thead>
   <tbody>
      <tr>
         
       
         <td >
           Subject Here
         </td>
         <td >
            True                            
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

<div class="modal" id="myModalTicket">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create a Ticket

</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
     <form>
            <div class="form-group">
            <label>Subject </label>
                <input type="text" placeholder="Enter Amount" class="form-control">
         </div>
         
         <div class="form-group">
            <label>Provide a detailed description
 </label>
              <textarea name="message" rows="3" class="form-control "></textarea>
         </div>
         
          <div class="form-group">
            <label>Photo </label>
                <input type="file" placeholder="" class="form-control">
         </div>
         <div class="form-footer">
         <button type="submit" class="btn btn-dark">Send Ticket</button>
         </div>
          </form>
      </div>

      

    </div>
  </div>
</div>
<?php include "footer.php"; ?>