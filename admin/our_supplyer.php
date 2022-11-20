<?php include "header.php";
include "config.php";?>

<div class="container-fluid">
<div class="content-wrapper">
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Our Supplyer</h3>
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
                  <th>Chicken</th>
                  <th>Sea Foods</th>
                  <th>Mutton</th>
                  <th>Eggs</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>District</th>
                  <th>State</th>
                  <th>Supply capacity</th>
				  <th>Expected Price</th>
				  <th>Delivery van</th>
				  <th>Remark</th>
				
            </tr>
        </thead>
        
       <tbody>
           <?php

                  $count=1;

          $rs=mysqli_query($con,"SELECT * FROM partner_with_supply where flag=1");


                    while($row=mysqli_fetch_array($rs))

                    {
                      $fill_id=$row['id'];

                  ?>

                    <tr>

                    <td><?php echo $count++; ?></td>  

                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Contact_no'];?></td>

                    <td><?php echo $row['Chicken'];?></td>

                    <td><?php echo $row['see'];?></td>

                    <td><?php echo $row['Mutton'];?></td>

                    <td><?php echo $row['Eggs']; ?></td>

                     <td><?php echo $row['City']; ?></td>
                     <td><?php echo $row['District']; ?></td>
                     <td><?php echo $row['State']; ?></td>
                     <td><?php echo $row['Address']; ?></td>
                     <td><?php echo $row['supply_capacity']; ?></td>
                     <td><?php echo $row['expected_price']; ?></td>
                     <td><?php echo $row['rdo1']; ?></td>
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