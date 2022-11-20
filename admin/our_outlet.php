<?php include "header.php";
include "config.php";?>
<div class="container-fluid">
<div class="content-wrapper">
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Our Outlet</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
            
        <thead>
           <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact no</th>
			      <th>Proposed location</th>
                  <th>Envestment capacity</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>District</th>
                  <th>State</th>
                  <th>Shop is redy</th>
				  <th>Area Sq fit</th>
				  <th>Own or Rented</th>
				  <th>Remark</th>
				
            </tr>
        </thead>
        
       <tbody>
           <?php

                  $count=1;

          $rs=mysqli_query($con,"SELECT id,name,email,cont_no,proposed_loc,Envestment_capa,address,city,district,state,shop_is_redy,area_sq_fit,own_rented,remark FROM partner_with_outlet");


                    while($row=mysqli_fetch_array($rs))

                    {
                      $id=$row['id'];

                  ?>

                    <tr>

                    <td><?php echo $count++; ?></td>  

                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['cont_no'];?></td>

                    <td><?php echo $row['proposed_loc'];?></td>

                    <td><?php echo $row['Envestment_capa'];?></td>

                    <td><?php echo $row['address'];?></td>

                    <td><?php echo $row['city']; ?></td>

                     <td><?php echo $row['district']; ?></td>
                     <td><?php echo $row['state']; ?></td>
                     <td><?php echo $row['shop_is_redy']; ?></td>
                     <td><?php echo $row['area_sq_fit']; ?></td>
                     <td><?php echo $row['own_rented']; ?></td>
                     <td><?php echo $row['remark']; ?></td>
                                                      
                    </tr>

                  <?php }  ?>
        </tbody>
    </table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 </div>
 </div>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
 <!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>