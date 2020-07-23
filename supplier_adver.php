
<style>
 #advert-panel{
     display:flex;
     justify-content:center;
     align-item: center;
     margin-right:auto;
     margin-left:auto;
 }
</style>
<div class="card col-md-6" id="advert-panel">
    <div class="card-header card-success">
        <h4 class="text-center text-primary card-title">
            Advertise <i class="fas fa-ad 4x"></i>
        </h4>
    </div>
    <div class="card-body">
    <?php 
   
        if(isset($_SESSION['message'])):?>
    <div class="row justify-content-center">
    	<div class="col-md-12">
    		 <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show text-center" role="alert">
    		 		
    	<?php 
    	 echo $_SESSION['message'];
          unset( $_SESSION['message']);
    	 ?>
    	 <button type="button" class="close" data-dismiss="alert" aria-label="close">
    	 	<span aria-hidden="true">&times;</span>
    		 	<span class="sr-only">close</span>
    	 </button>
    		 	
    </div>
    	</div>
    	
    </div>
   
    <?php endif ?>
        <form method="post" action="farm_process.php" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="proname">Product Name</label>
                        <input type="text" class="form-control" id="proname" name="proname" placeholder="Enter product name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="quanity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" required>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="file">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" name="request" class="form-control" id="request" style="width:100%;">post</button>
       
                </div>
                      </div>
        </form>
    </div>
</div>
