<?php include "header.php"; ?>
<section class="page_header">
   <div class="container">
      <div class="col-12 text-center">
         <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Bulk Products Upload</li>
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
                              <h3>Bulk Products Upload</h3>
                              
                               
                               
                               
                               
   <div class="card mb-3">
<div class="card-body">
<table class="table " style="font-size: 14px; background-color: rgb(204, 229, 255); border-color: rgb(184, 218, 255);">
<tbody>
<tr>

<td>1. Download the skeleton file and fill it with data.:</td></tr><tr>

<td>2. You can download the example file to understand how the data must be filled.:</td></tr><tr>

<td>3. Once you have downloaded and filled the skeleton file, upload it in the form below and submit.:</td></tr><tr>

<td>4. After uploading products you need to edit them and set products images and choices.</td></tr></tbody></table>
<a href="#" download=""><button class="btn btn-dark mt-2">Download CSV</button></a>
</div>
</div>
                               
                               
                               
                               
                               
                               
                               <div class="card mb-3">
        <div class="card-body">
            <table class="table" style="font-size: 14px; background-color: rgb(204, 229, 255); border-color: rgb(184, 218, 255);">
                <tbody>
                
            <tr>
                    
                <td>1. Category and Brand should be in numerical id.:</td></tr><tr>
                    
                <td>2. You can download the pdf to get Category and Brand id.:</td></tr></tbody></table>
            <a href="#"><button class="btn btn-dark mt-2">Download Category</button></a>
            <a href="#"><button class="btn btn-dark mt-2">Download Brand</button></a>
        </div>
    </div>
               
                               
                               
                               
                               
                               
                               <div class="card mb-3">
        <div class="card-header">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">Upload CSV File</h5>
            </div>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="#" method="POST" enctype="">
                <input type="hidden" name="_token" value="">            
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">CSV</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
    						<label class="custom-file-label">
    							<input type="file" name="bulk_file" class="custom-file-input" required="">
    							<span class="custom-file-name">Choose file</span>
    						</label>
    					</div>
                    </div>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-dark">Upload CSV</button>
                </div>
            </form>
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