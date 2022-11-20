<?php include "header.php";
     include "config.php";?>
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Dashboard
      </h1>
</section>
<section class="content">
<div class="row">

       <a href="new_supplier.php">
		   <div class="col-md-3 col-sm-6 col-xs-12" >
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
          <div class="info-box-content">
               <span class="info-box-text">Supplier <br/> new enquairy</span>
              <span class="info-box-number">90</span>
            </div>
          </div>
		   </div></a>
	 <a href="new_outlet.php">
       <div class="col-md-3 col-sm-6 col-xs-12" onclick="$('#example1').show();$('#stock').hide();$('#example').hide();$('#avai').hide();">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Outlet <br/> new enquairy </span>
              <span class="info-box-number">41</span>
            </div>
           </div>
        </div>
	</a>

       <div class="clearfix visible-sm-block"></div>
       <div class="col-md-3 col-sm-6 col-xs-12" onclick="$('#avai').show();$('#stock').hide();$('#example').hide();$('#example1').hide();">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
              <div class="info-box-content">
              <span class="info-box-text">Available <br/> stock</span>
              <span class="info-box-number">760</span>
            </div>
          </div>
         </div>
        <div class="col-md-3 col-sm-6 col-xs-12" onclick="$('#stock').show();$('#avai').hide();$('#example').hide();$('#example1').hide();">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
              <div class="info-box-content">
              <span class="info-box-text">Add stock</span>
              <span class="info-box-number">50</span>
            </div>
          </div>
        </div>
      </div>

<div id="stock" class="container" style=" background: url(dist/img/red-meat-health-benefits.jpg) no-repeat center center fixed; margin-top: 10px;" hidden>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 10px;">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Stock</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                     <div class="col-sm-4 col-md-offset-3">
                        <label for="inputPassword3" class="col-sm-3 control-label">Volume</label>
                    </div>
                    <div class="col-sm-4">
                        <label for="inputPassword3" class="col-sm-3 control-label">Quantity</label>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Chicken</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Sea Foods</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Mutton</label>
                       <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Eggs</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Submit</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--   <div class="container-fluid" style="background-color: #ffdfc6;" >
    <div class="container" id="Account" hidden >
        <div class="row category-row">
            <div class="col-md-3 col-sm-6 category-box" onclick="$('#Sell').show();$('#Purches').hide();$('#Credit').hide();$('#wallet').hide();">
                <div class="row">
                    <div class="col-md-2">
                    <a href="" title="">
                        <img src="dist/img/sale_balloons.png" alt="" class="cetegory-icon"></a>
                    </div>
                    <div class="col-md-4">
                        <h3 class="icon-title">
                            Sale
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 category-box" onclick="$('#Purches').show();$('#Sell').hide();$('#Credit').hide();$('#wallet').hide();">
                <div class="row">
                    <div class="col-md-2">
                    <a href="" title="">
                        <img src="dist/img/purches.png" alt="" class="cetegory-icon"></a>
                    </div>
                    <div class="col-md-4">
                        <h3 class="icon-title">
                            Purches
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 category-box" onclick="$('#Credit').show();$('#Purches').hide();$('#Sell').hide();$('#wallet').hide();">
                <div class="row">
                    <div class="col-md-2">
                    <a href="" title="">
                        <img src="dist/img/credit.png" alt="" class="cetegory-icon">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <h3 class="icon-title">
                            Credit
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 category-box" onclick="$('#wallet').show();$('#Purches').hide();$('#Credit').hide();$('#Sell').hide();">
                <div class="row">
                    <div class="col-md-2">
                    <a href="" title="">
                        <img src="dist/img/walet.png" alt="" class="cetegory-icon"></a>
                    </div>
                    <div class="col-md-4">
                        <h3 class="icon-title">
                            Refill wallet
                        </h3>
                    </div>
                </div>
            </div>
         </div> 
    </div>
    </div> -->
 <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

  
<div id="avai" class="container" style=" background: url(dist/img/slider2.jpg) no-repeat center center fixed;" hidden>
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default"  style="margin-top: 10px;">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Stock</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                     <div class="col-sm-3">
                        <label for="inputPassword3" class="col-sm-3 control-label">Item name</label>
                    </div>
                      <div class="col-sm-3">
                        <label for="inputPassword3" class="col-sm-3 control-label">Volume</label>
                    </div>
                     <div class="col-sm-3">
                        <label for="inputPassword3" class="col-sm-3 control-label">Quantity</label>
                    </div>
                    
                    <div class="col-sm-3">
                        <label for="inputPassword3" class="col-sm-3 control-label">Date</label>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">
                            Chicken</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-3">
                            Sea Foods</label>
                     <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                      <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">
                            Mutton</label>
                     <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">
                            Eggs</label>
                      <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                     <div class="col-sm-3">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">
                            Supplier name</label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" id=""  required>
                        </div>
                     
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Submit</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
<div class="control-sidebar-bg"></div>
</div>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- DataTables -->
<!-- <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script> -->

	
