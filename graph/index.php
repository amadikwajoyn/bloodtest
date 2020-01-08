<?php

if (isset($_POST['submitlipid'])) {
   $chol = $_POST['chol'];
   $trig = $_POST['trig'];
   $hdl = $_POST['hdl'];
   $ldl = $_POST['ldl'];
$data = 2;
$test = "lipid";
if (($chol < 1) or ($chol > 240) ) {
 $msg1 = "Cholesterol level is unhealthy, cut down on carbohydrates";
}else{
     $msg1 = "Cholesterol level is healthy";
}
if ($trig < 40 or $trig > 160) {
 $msg2 = "Blood Stream Fat is Unhealthy, this could lead to increased risk of heart diseases";
}else{
     $msg2 = "Triglycerides level is healthy";
}
if ($hdl < 40 ) {
 $msg3 = "Also known as good cholesterol, HDL (high-density lipoprotein) protects against heart disease. Low scores are risk factors for heart disease.";
}else{
     $msg3 = "HDL level is healthy";
}
if ($ldl < 130 ) {
 $msg4 = "Also known as bad cholesterol, LDL (low-density lipoprotein) is the substance that clogs arteries and is linked to heart disease.";
}else{
     $msg4 = "LDL level is healthy";
}
$message = $msg1."; ".$msg2."; ".$msg3."; ".$msg4;
}


if (isset($_POST['submitcomplete'])) {
   $wbc = $_POST['wbc']/100;
   $rbc = $_POST['rbc']/1000;
   $hct = $_POST['hct'];
   $hgb = $_POST['hgb'];

    $mcv = $_POST['mcv'];
   $mch = $_POST['mch'];
   $mchc = $_POST['mchc'];
   $rdw = $_POST['rdw'];
    $platelet = $_POST['platelet']/10;
   $meanp = $_POST['meanp'];
   
$data = 2;
$test = "complete";




if (($wbc < 10800) or ($wbc > 4300) ) {
 $msg1 = " White blood cell level is unhealthy, It may also indicate leukemia, which can cause an increase in the number of white blood cells.";
}else{
     $msg1 = "White blood cell level is healthy";
}
if (($rbc < 4200000) or ($rbc > 5900000) ) {
 $msg2 = "Red Blood Cell Level is abnormal. This indicates anaemia.";
}else{
     $msg2 = "Red blood cell level is healthy";
}
if (($hct < 37) or ($hct > 52) ) {
 $msg3 = " Hematocrit percentage is abnormal, an abnormal level indicates a high risk of anaemia, consult a physician promptly";
}else{
     $msg3 = "Hematocrit percentage is normal";
}
if (($hgb < 12) or ($hgb > 18) ) {
 $msg4 = " Hemoglobin level is abnormal, an abnormal level indicates a high risk of anaemia, consult a physician promptly";
}else{
     $msg4 = "Hemoglobin level is normal";
}
if (($mcv < 80) or ($mcv > 100) ) {
 $msg5 = " Mean corpuscular volume is abnormal, an abnormal level indicates a high risk of anaemia and/or chronic fatigue syndrome";
}else{
     $msg5 = "Mean corpuscular volume is normal";
}
if (($mch < 27) or ($mch > 32) ) {
 $msg6 = " Mean corpuscular hemoglobin is abnormal, an abnormal level indicates a high risk of anaemia and/or chronic fatigue syndrome";
}else{
     $msg6 = "Mean corpuscular hemoglobin is normal";
}
if (($mchc < 11) or ($mchc > 15) ) {
 $msg7 = " Red cell distribution width is abnormal,  Liver disease, anemia, nutritional deficiencies, and a number of health conditions could cause high or low RDW results";
}else{
     $msg7 = "Red cell distribution width is normal";
}
if (($platelet < 150000) or ($platelet > 400000) ) {
 $msg8 = "Platelet count is abnormal, Too many or too few platelets can affect clotting in different ways. The number of platelets may also indicate a health condition";
}else{
     $msg8 = "Platelet count is normal";
}
if (($meanp < 7.5) or ($meanp > 11) ) {
 $msg9 = " Mean Platelet Volume is abnormal,  This could lead to a heart attack, stroke or bleeding disorder";
}else{
     $msg9 = "Mean Platelet Volume is normal";
}





$message = $msg1."; ".$msg2."; ".$msg3."; ".$msg4."; ".$msg5."; ".$msg6."; ".$msg7."; ".$msg8."; ".$msg9;
}




if (isset($_POST['submitchemistry'])) {
   $alt = $_POST['alt'];
   $alb = $_POST['alb'];
   $ag = $_POST['ag'];
   $alk = $_POST['alk'];
   $ast = $_POST['ast'];
   $bil = $_POST['bil'];
   $bun = $_POST['bun'];
   $bunc = $_POST['bunc'];
   $calc = $_POST['calc'];
   $chlo = $_POST['chlo'];
   $creat = $_POST['creat'];
   $fast = $_POST['fast'];
   $phos = $_POST['phos'];
   $pot = $_POST['pot'];
   $sod = $_POST['sod'];

$data = 2;
$test = "chem";

if (($alt < 8) or ($alt > 37) ) {
 $msg1 = "ALT (alanine aminotransferase) is abnormal, This indicates liver damage.";
}else{
     $msg1 = "ALT (alanine aminotransferase) is normal";
}
if (($alb < 3.9) or ($alb > 5) ) {
 $msg2 = "Albumin is abnormal, This indicates liver and kidney damage.";
}else{
     $msg2 = "Albumin is normal";
}
if ( ($ag > 1) ) {
 $msg3 = "A/G ratio (albumin/globulin ratio) is abnormal, Elevated protein levels indicate a health condition in need of attention.";
}else{
     $msg3 = "A/G ratio (albumin/globulin ratio) is normal";
}
if (($alk < 44) or ($alk > 147) ) {
 $msg4 = "Alkaline is abnormal, This indicates, problems with the liver or bone-related diseases.";
}else{
     $msg4 = "Alkaline is normal";
}
if (($bil < 0.1) or ($bil > 1.9) ) {
 $msg5 = "Bilirubin is abnormal, it provides information about liver and kidney functions, and indicates problems in bile ducts, and anemia..";
}else{
     $msg5 = "Bilirubin is normal";
}
if (($bun < 10) or ($bun > 20) ) {
 $msg6 = "BUN (blood urea nitrogen) is abnormal, It indicate a problem with kidney function. A number of medications and a diet high in protein can also raise BUN levels.";
}else{
     $msg6 = "BUN (blood urea nitrogen) is normal";
}
if (($bunc < 10) or ($bunc > 34) ) {
 $msg7 = "BUN/creatinine ratio is abnormal, High levels of creatinine, a by-product of muscle contractions, are excreted through the kidneys and suggest reduced kidney function.";
}else{
     $msg7= "BUN/creatinine ratio is normal";
}
if (($calc < 9) or ($calc > 10.5) ) {
 $msg8 = "Calcium is abnormal, Too much calcium in the bloodstream could indicate kidney problems; overly active thyroid or parathyroid glands; certain types of cancer, including lymphoma; problems with the pancreas; or a deficiency of vitamin D.";
}else{
     $msg8 = "Calcium is normal";
}
if (($chlo < 98) or ($chlo > 106) ) {
 $msg9 = "Chloride is abnormal, It is found in heart and liver tissue, so abnormalities suggest problems may be occurring in one or both of those areas.";
}else{
     $msg9 = "Chloride is normal";
}
if (($creat < 0.5) or ($creat > 1.1) ) {
 $msg10 = "Creatine is abnormal, Kidney is not functioning properly";
}else{
     $msg10 = "Creatine is normal";
}
if (($phos < 2.4) or ($phos > 4.1) ) {
 $msg11 = "Phosphorus is abnormal";
}else{
     $msg11 = "Phosphorus is normal";
}
if (($sod < 135) or ($sod > 145) ) {
 $msg12 = "Sodium is abnormal";
}else{
     $msg12 = "Sodium is normal";
}
if (($pot < 3.7) or ($pot > 5.2) ) {
 $msg13 = "Potasium abnormal";
}else{
     $msg13 = "Potasiom is normal";
}
if (($fast < 70) or ($fast > 99) ) {
 $msg14 = "Fasting Glucose is abnormal";
}else{
     $msg14 = "Fasting Glucose is normal";
}




$message = $msg1."; ".$msg2."; ".$msg3."; ".$msg4."; ".$msg5."; ".$msg6."; ".$msg7."; ".$msg8."; ".$msg9."; ".$msg10."; ".$msg11."; ".$msg12."; ".$msg13."; ".$msg14;
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

    <!-- Page-Level Plugin CSS - Flot -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper" style="margin-top: -90px">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="hidden">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
               <div class="col-lg-6">
                    <div class="panel panel-default">
                       <div class="panel-heading">
                           <?php
                            echo"<center>(Blood Test Result Visualization)</center>";
                            ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                            <?php
                            if (isset($data)) {
                               echo '<div class="flot-chart-content" id="flot-pie-chart" style="height: 300px"></div>';
                               echo '<h4>'.$message.'</h4>';
                            }else{
                                echo "<center><h2>No Blood Test Result to Analyze!</h2></center>";
                            }
                                
                                ?>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
     
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Flot -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Flot - Use for reference -->
    <script>
  $(function() {
<?php
if ($test === "lipid") {
?>
    var data = [{
        label: "<a href='#'>Total cholesterol</a>",
        data: <?php echo $chol; ?>
    }, {
        label: "<a href='#'>Triglycerides</a>",
        data: <?php echo $trig; ?>
    }, {
        label: "<a href='#'>HDL (Good) cholesterol</a>",
        data: <?php echo $hdl; ?>
    },{
        label: "<a href='#'>LDL (Bad) cholesterol</a>",
        data: <?php echo $ldl; ?>
    }];

    <?php
}
    ?>


<?php
if ($test === "complete") {
?>
    var data = [{
        label: "<a href='#'>WBC (white blood cell) leukocyte count</a>",
        data: <?php echo $wbc; ?>
    }, {
        label: "<a href='#'>RBC (red blood cell) erythrocyte count</a>",
        data: <?php echo $rbc; ?>
    },{
        label: "<a href='#'>Hemoglobin (Hgb)</a>",
        data: <?php echo $hgb; ?>
    }, {
        label: "<a href='#'>Mean corpuscular volume (MCV)</a>",
        data: <?php echo $mcv; ?>
    }, {
        label: "<a href='#'>Mean corpuscular hemoglobin (MCH)</a>",
        data: <?php echo $mch; ?>
    },{
        label: "<a href='#'>Mean corpuscular hemoglobin concentration (MCHC)</a>",
        data: <?php echo $mchc; ?>
    }, {
        label: "<a href='#'>Platelet count</a>",
        data: <?php echo $platelet; ?>
    },{
        label: "<a href='#'>Mean Platelet Volume (MPV)</a>",
        data: <?php echo $meanp; ?>
    }];

    <?php
}
    ?>



    <?php
if ($test === "chem") {
?>
    var data = [{
        label: "<a href='#'>ALT (alanine aminotransferase)</a>",
        data: <?php echo $alt; ?>
    }, {
        label: "<a href='#'>Albumin</a>",
        data: <?php echo $alb; ?>
    }, {
        label: "<a href='#'>A/G ratio (albumin/globulin ratio)</a>",
        data: <?php echo $ag; ?>
    },{
        label: "<a href='#'>Alkaline phosphatase</a>",
        data: <?php echo $alk; ?>
    }, {
        label: "<a href='#'>AST (aspartate aminotransferase)</a>",
        data: <?php echo $ast; ?>
    }, {
        label: "<a href='#'>Bilirubin</a>",
        data: <?php echo $bil; ?>
    },{
        label: "<a href='#'>BUN (blood urea nitrogen)</a>",
        data: <?php echo $bun; ?>
    }, {
        label: "<a href='#'>BUN/creatinine ratio</a>",
        data: <?php echo $bunc; ?>
    }, {
        label: "<a href='#'>Calcium</a>",
        data: <?php echo $calc; ?>
    },{
        label: "<a href='#'>Chloride</a>",
        data: <?php echo $chlo; ?>
    }, {
        label: "<a href='#'>Creatinine</a>",
        data: <?php echo $creat; ?>
    }, {
        label: "<a href='#'>Fasting glucose (blood sugar)</a>",
        data: <?php echo $fast; ?>
    },{
        label: "<a href='#'>Phosphorus</a>",
        data: <?php echo $phos; ?>
    },{
        label: "<a href='#'>Potassium</a>",
        data: <?php echo $pot; ?>
    },{
        label: "<a href='#'>Sodium</a>",
        data: <?php echo $sod; ?>
    }];

    <?php
}
  
    ?>
    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});
    </script>

</body>

</html>
