<?php
include_once('head.php');

?>
<!-- banner -->

<!-- //banner -->
<div class="typrography wthree all_pad">
	 <div class="" style="padding: 50px">
		<h3 class="title">Blood Interpreter<span></span></h3>
		<div class="shot-top agile grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
		    
		  <div class="w3 col-sm-12 col-md-12 col-lg-2 mb-60">
            <h4 class="text-blue title-border mb-30 bars">Test Measurement Units</h4>
           
            <table class="table table-bordered" cellspacing="0" cellpadding="0">
<tbody>
<tr>

<th valign="top">UNIT</th>
<th valign="top">MEANING</th>
</tr>
<tr>

<td valign="top">cmm</td>
<td valign="top">cells per cubic millimeter</td>
</tr>
<tr>

<td valign="top">fL (femtoliter)</td>
<td valign="top">fraction of one-millionth of a liter</td>
</tr>
<tr>

<td valign="top">g/dL</td>
<td valign="top">grams per deciliter</td>
</tr>
<tr>

<td valign="top">IU/L</td>
<td valign="top">international units per liter</td>
</tr>
<tr>

<td valign="top">mEq/L</td>
<td valign="top">milliequivalent per liter</td>
</tr>
<tr>

<td valign="top">mg/dL</td>
<td valign="top">milligrams per deciliter</td>
</tr>
<tr>

<td valign="top">mL</td>
<td valign="top">milliliter</td>
</tr>
<tr>

<td valign="top">mmol/L</td>
<td valign="top">millimoles per liter</td>
</tr>
<tr>

<td valign="top">ng/mL</td>
<td valign="top">nanograms per milliliter</td>
</tr>
<tr>

<td valign="top">pg (picograms)</td>
<td valign="top">one-trillionth of a gram</td>
</tr>
</tbody>
</table>


          </div>




           <div class="w3 col-sm-12 col-md-12 col-lg-5 mb-60" style="padding: 20px">



            <h4 class="text-blue title-border mb-30 bars">Blood Test Interpreter</h4>
               <div class="horizontal-tab">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="false">Complete Blood Count</a></li>
                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Chemistry Panel</a></li>
                <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Lipid Panel</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                  <div class="row">
                    <div class="col-md-12" style="height: 700px; overflow: scroll">
                    <form action="graph/index.php" method="POST" target="graph"> 
                    <h4>Complete Blood Test Interpreter</h4>
                        <table class="table table-bordered" cellspacing="0" cellpadding="-10">
									<tbody>
									<tr>

									<th valign="top">COMPONENT</th>
									<th valign="top">VALUE</th>
									</tr>

									<tr>

									<td valign="top">WBC (white blood cell) leukocyte count</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in cmm" value="0" name="wbc" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">RBC (red blood cell) erythrocyte count</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in cmm"  name="rbc"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Hematocrit (Hct)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value"  name="hct"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Hemoglobin (Hgb)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in femtoliters"  name="hgb"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Mean corpuscular volume (MCV)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in picograms"  name="mcv"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Mean corpuscular hemoglobin (MCH)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value "  name="mch"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Mean corpuscular hemoglobin concentration (MCHC)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value " name="mchc"  value="0"  aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Red cell distribution width (RDW or RCDW)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value"  name="rdw"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Platelet count</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in ml"  name="platelet"  value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Mean Platelet Volume (MPV)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in femtoliters" value="0"  name="meanp"  aria-describedby="basic-addon1"></td>
									</tr>
									
									</tbody>
									</table>
									<button class="btn btn-success" type="submit" name="submitcomplete" style="float: right">Interprete Blood Test!</button>

									</form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="row">
                   <div class="col-md-12" style="height: 700px; overflow: scroll">
                    <form action="graph/index.php" method="POST" target="graph"> 
                    <h4>Chemistry Panel Test Interpreter</h4>
                        <table class="table table-bordered" cellspacing="0" cellpadding="-10">
									<tbody>
									<tr>

									<th valign="top">COMPONENT</th>
									<th valign="top">VALUE</th>
									</tr>

									<tr>

									<td valign="top">ALT (alanine aminotransferase)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in IU/L"  name="alt"  value="0"  aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Albumin</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value in gd/L" name="alb"  value="0"  aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">A/G ratio (albumin/globulin ratio)</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value" name="ag"  value="0"  aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Alkaline phosphatase</td>
									<td valign="top"> <input type="text" class="form-control"  name="alk"  value="0" placeholder="Value in IU/L" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">AST (aspartate aminotransferase)</td>
									<td valign="top"> <input type="text" class="form-control"  name="ast"  value="0" placeholder="Value in IU/L" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Bilirubin</td>
									<td valign="top"> <input type="text" class="form-control"  name="bil"  value="0" placeholder="Value in mg/dl" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">BUN (blood urea nitrogen)</td>
									<td valign="top"> <input type="text" class="form-control"  name="bun"  value="0" placeholder="Value in mg/dl" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">BUN/creatinine ratio</td>
									<td valign="top"> <input type="text" class="form-control"  name="bunc"  value="0" placeholder="Value" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Calcium</td>
									<td valign="top"> <input type="text" class="form-control" name="calc"  value="0"  placeholder="Value in mg/dl" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Chloride</td>
									<td valign="top"> <input type="text" class="form-control" name="chlo"  value="0"  placeholder="Value in mEq/L" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Creatinine</td>
									<td valign="top"> <input type="text" class="form-control" name="creat"  value="0"  placeholder="Value in mg/dl" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Fasting glucose (blood sugar)</td>
									<td valign="top"> <input type="text" class="form-control"  name="fast"  value="0" placeholder="Value in mg/dl" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Phosphorus</td>
									<td valign="top"> <input type="text" class="form-control"  name="phos"  value="0" placeholder="Value in mg/dl" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Potassium</td>
									<td valign="top"> <input type="text" class="form-control"  name="pot"  value="0" placeholder="Value in mEq/L" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Sodium</td>
									<td valign="top"> <input type="text" class="form-control" name="sod"  value="0"  placeholder="Value in mEq/L" aria-describedby="basic-addon1"></td>
									</tr>
									</tbody>
									</table>
									<button class="btn btn-success" type="submit" name="submitchemistry" style="float: right">Interprete Blood Test!</button>

									</form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab3">
                  <div class="row">
                    <div class="col-md-12" style="height: 700px; overflow: scroll">
                    <form action="graph/index.php" method="POST" target="graph"> 
                    <h4>Lipid Panel Test Interpreter</h4>
                        <table class="table table-bordered" cellspacing="0" cellpadding="-10">
									<tbody>
									<tr>

									<th valign="top">COMPONENT</th>
									<th valign="top">VALUE</th>
									</tr>

									<tr>

									<td valign="top">Total cholesterol</td>
									<td valign="top"> <input type="text" name="chol" class="form-control" placeholder="Value in mg/dl" value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Triglycerides</td>
									<td valign="top"> <input type="text" name="trig" class="form-control" placeholder="Value in mg/dl" value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">HDL (Good) cholesterol</td>
									<td valign="top"> <input type="text" name="hdl" class="form-control" placeholder="Value in mg/dl" value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">LDL (Bad) cholesterol</td>
									<td valign="top"> <input type="text" name="ldl" class="form-control" placeholder="Value in mg/dl" value="0" aria-describedby="basic-addon1"></td>
									</tr>
									<tr>

									<td valign="top">Total cholesterol/HDL ratio</td>
									<td valign="top"> <input type="text" class="form-control" placeholder="Value" value="0" aria-describedby="basic-addon1"></td>
									</tr>
									
									</tbody>
									</table>
									<button class="btn btn-success" type="submit" name="submitlipid" style="float: right">Interprete Blood Test!</button>

									</form>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>



          </div>




           <div class="w3 col-sm-12 col-md-12 col-lg-5 mb-60">


            <h4 class="text-blue title-border mb-30 bars">Graphical Analysis</h4>
           <iframe src="graph/index.php" name="graph" width="100%" height="500px"></iframe>
         

          </div>






		  
</div>
	</div>
	</div>
<div class="container"></div>
<!-- //typography -->
<?php
include_once('foot.php');

?>