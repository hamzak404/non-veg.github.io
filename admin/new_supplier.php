<?php include "header.php";
include "config.php";
//$id=$_POST['id'];
?> 
<script>
function fun(val)
{

    $.ajax({

            url: 'supply_approve.php',

            type: 'post',

            data: { id: val },

            success: function(result){

                //alert(result);

                $('.box-body').html(result);

            }

        });

}   
</script>
<form id="" action="supply_verify.php" method="post" class="form-horizontal">

<div class="container-fluid">
<div class="content-wrapper">
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Supplyer Enquiry</h3>
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
				  <th>Action</th>
            </tr>
        </thead>
        
       <tbody>
           <?php

                  $count=1;

          $rs=mysqli_query($con,"SELECT id,Name,Email,Contact_no,Chicken,see,Mutton,Eggs,City,District,State,Address,supply_capacity,expected_price,rdo1,remark FROM partner_with_supply where flag=0");


                    while($row=mysqli_fetch_array($rs))

                    {
                      $id=$row['id'];

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
                     <td> 
                    <button name="approvebtn" class="btn btn-info" title="Approve" onclick="fun('<?php echo $row['id']; ?>')"><span class="glyphicon glyphicon-saved"></span></button>
                    
                      <button name="rejectbtn" class="btn btn-danger" title="Reject" onclick="fun('<?php echo $row['id']; ?>')"><span class="glyphicon glyphicon-remove"></span></button>
                     
                     </td>
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
 </form>
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