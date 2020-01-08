<?php
include_once '../connection.php';
if (isset($_GET['data'])) {
     $data = $_GET['data'];
  $sql = "SELECT * FROM issue WHERE id = '$data'";
     $query=mysqli_query($conn,$sql);
     $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
     $title=$result['title'];


 $sql = "SELECT * FROM opinion WHERE iid = '$data'";
     $query=mysqli_query($conn,$sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $reason=$result['reason'];
      $position=$result['position'];
       while ($result=mysqli_fetch_array($query)) {
               $reason=$reason."||".$result['reason'];
               $position=$position."||".$result['position'];

             }
                      $reason2=explode("||", $reason);
                      $position2=explode("||", $position);
                      $x=count($reason2);
                    }



?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper" style="margin-top: -40px; width: 100%; margin-left: -1%">
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php
                            echo $title." (Reasons for Opinion)";
                            ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                              <?php
                            if (isset($data)) {
                             
                           ?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Reason</th>
                                            <th>Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     for ($i=0; $i < $x; $i++) { 
                                        $b = $i+1;
                                           
                        
                                            echo "<tr class='odd gradeX'>";
                                            echo "<td>$b</td>";
                                            echo "<td>$reason2[$i]</td>";
                                            echo "<td>$position2[$i]</td></tr>";
                                            
                                        
                                            
                                      
                                      }
                                      ?>
                                       
                                       
                                       
                                    </tbody>
                                </table>
                                 <?php
                             }
                             }else{
                                echo "<h2>No Opinions on Issue Yet!</h2>";
                            }?>
                            </div>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
                <!-- /.col-lg-6 -->
               
            <!-- /.row -->
       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
