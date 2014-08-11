<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   
    <!-- Bootstrap core CSS -->  
    <link rel="icon" href="<?php echo base_url().'assets/img/coat_of_arms.png'?>" type="image/x-icon" />
    <link href="<?php echo base_url().'assets/css/style.css'?>" type="text/css" rel="stylesheet"/> 
    <link href="<?php echo base_url().'assets/css/normalize.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/css/dashboard.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/css/jquery-ui-1.10.4.custom.min.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap-responsive.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" type="text/css" rel="stylesheet"/>
    <script src="<?php echo base_url().'assets/scripts/jquery.js'?>" type="text/javascript"></script>
    <link href="<?php echo base_url().'assets/datatable/TableTools.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/datatable/dataTables.bootstrap.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>
    <script src="<?php echo base_url('assets/scripts/county_sub_county_functions.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/FusionCharts/FusionCharts.js" type="text/javascript"></script>
     <script src="<?php echo base_url().'assets/scripts/pace.js'?>" type="text/javascript"></script>
    <title>HCMP | National</title>
<script>
   paceOptions = {
  ajax: false, // disabled
  document: true, // 
  eventLag: true,
  restartOnPushState: false,
  elements:{
  	selectors:['body']
  } // 
  
};
 
    function load(time){
      var x = new XMLHttpRequest()
      x.open('GET', document.URL , true);
      x.send();
    };
    setTimeout(function(){
      Pace.ignore(function(){
        load(3100);
      });
    },4500);

    Pace.on('hide', function(){
   //   console.log('done');
    });

    var url="<?php echo base_url(); ?>";
    </script>
<style>
	.active-panel{
    	border-left: 6px solid #36BB24;
    }
    body {
padding-top: 4.5%;
}

.modal-content,.form-control
{
  border-radius: 0 !important;
}

legend{
	font-size:16px;
}
#main_c{
	
	-webkit-box-shadow: 0px 0px 1px 1px #615961;
	box-shadow: 0px 0px 1px 1px #615961;
}
</style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  
<body screen_capture_injected="true">
	
	<div class="container-fluid navbar-default navbar-fixed-top" role="navigation" style="background-color:white">
        <div class="container-fluid">
            <div class="navbar-header" id="st-trigger-effects">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="<?php echo base_url().'national';?>" >HCMP</a>

        </div>
        <div class="navbar-header" >
  
            <a href="<?php echo base_url().'national';?>">   
            <img style="display:inline-block;"  src="<?php echo base_url();?>assets/img/coat_of_arms_dash.png" class="img-responsive " alt="Responsive image" id="logo" ></a>
            
        </div>
        
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="<?php echo base_url().'national';?>">Home</a></li>
            <li class="active"><a href="<?php echo base_url().'national/reports';?>">Reports</a></li>
            <li class=""><a href="<?php echo base_url().'national/search';?>">Search</a></li>
            <li class=""><a href="<?php echo base_url().'home';?>"><span class="glyphicon glyphicon-user"></span>Log In</a></li>
            
          </ul>
          
                                        
        </div><!--/.nav-collapse -->

      </div>
    </div>
    
    <div class="container" style="max-width:80% " id="main_c">
    	
    	<div class="row-fluid" style="margin-top: 1%">
    		<fieldset>
    			<legend>County, Sub-county, Facility</legend>
    			
    			<div class="col-xs-4">
			  	<label for="county">Select County</label>
			    <select class="form-control input-md" id="county"> 
			    	<option>All Counties</option>
			    	<?php
							foreach ($county as $value => $county_list) :
									 $c_id = $county_list['id'];
									$c_name = $county_list['county'];
								    echo "<option value='$c_id'>$c_name</option>";
							endforeach;
					?>
			    	</select>
			  </div>
			  <div class="col-xs-4">
			  	<label for="county">Select Sub-County</label>
			    <select class="form-control input-md" id="sub_county"> 
			    	<option value="NULL">All Sub-Counties</option>
			    	
			    	</select>
			  </div>
			  
			  <div class="col-xs-4">
			  	<label for="county">Select Facility</label>
			    <select class="form-control input-md" id="facility_id"> 
			    	<option>All Facilities</option>
			    	
			    	</select>
			  </div>
			  
    		</fieldset>
			  
		</div>
		
		<div class="row-fluid" style="margin-top: 1%">
			<fieldset>
				<legend>Select Report type</legend>
				
				<div class="row">
				<div class="col-md-3">
					<input type="radio" name="criteria" value="Consumption" class=" " checked/> Consumption
				</div>
				<div class="col-md-3">
					<input type="radio" name="criteria" value="Stock"/> Stock Status
				</div>
				<div class="col-md-6">
					<div class="row-fluid">
						<div class="col-md-4" style="padding: 0"><input type="radio" name="criteria" value="Potential" class=" "/> Potential Expiries</div>
						<div class="col-md-8" style="padding: 0">
							<select class="form-control input-md" id="interval"> 
						    	<option value="0">Select Interval</option>
						    	<option value="3">Next 3 Months</option>
						    	<option value="6">Next 6 Months</option>
						    	<option value="12">Next 1 Year</option>
						    	
						    	</select>
						</div>
					</div>
				</div>
				
				
			</div>
			
			<div class="row" style="margin-top: 2%">
				<div class="col-md-3">
					<input type="radio" name="criteria" value="Orders"/> Orders
				</div>
				<div class="col-md-3">
					<input type="radio" name="criteria" value ="Actual"/> Actual Expiries
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
			</fieldset>
			
			
		</div>
		
		<div class="row-fluid" style="margin-top: 1%">
			<fieldset>
				<legend>Select Report type</legend>
				
			<div class="row" style="">
				<div class="col-md-3">
					<input type="radio" name="commodity_s" value="Tracer" class=" " checked/> Tracer Commodities
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
			<div class="row" style="margin-top: 2%">
				<div class="col-md-2">
					<input type="radio" name="commodity_s" value="Specify"/> Specify Commodity
				</div>
				<div class="col-md-4" style="padding: 0">
					<div class="" style="margin-top: 2%">
			  	
			    <select class="form-control input-md" id="commodity"> 
			    	<option>All Commodities</option>
			    	<?php
							foreach ($commodities as $value => $commodity) :
									 $c_id = $commodity['id'];
									$c_name = $commodity['commodity_name'];
								    echo "<option value='$c_id'>$c_name</option>";
							endforeach;
					?>
			    	</select>
			  </div>
				</div>
				<div class="col-md-3">
					
				</div>
			</div>
			
			<div class="row" style="margin-top: 0.5%">
				<div class="col-md-3">
					<input type="radio" name="commodity_s" value="All"/> All Commodities
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
			
			</fieldset>
			
			
		</div>
		
		<div class="row-fluid" style="margin-top: 1%">
			<fieldset>
				
				<legend>Duration</legend>
				<div class="col-xs-3">
			  	<label for="Year">Year</label>
			   <select class="form-control input-md" id="year"> 
						    	<option>Select Year</option>
						    	<option>2014</option>
						    	<option>2013</option>
						    	<option>2012</option>
						    	
						    	</select>
			  </div>
			  
			  <div class="col-xs-9">
			  	
			  </div>
				
			</fieldset>
		</div>
    	
    	<div class="row-fluid" style="margin-top: 1%">
			<fieldset>
				
				<fieldset style="">
			  		<legend>View as</legend>
			  		
			  		<section class="col-md-8">
						<section class="col-md-3">
							<input type="radio" name="doctype" value="PDF" class="" checked/> PDF
						</section>
						<section class="col-md-3">
							<input type="radio" name="doctype" value="Excel"/> Excel
						</section>
						
						<section class="col-md-3">
							<input type="radio" name="doctype" value="Graph"/> Web Graph
						</section>
						<section class="col-md-3">
							<input type="radio" name="doctype" value="Table"/> Web Table
						</section>
						</section>
			  	</fieldset>
			</fieldset>
		</div>
		
		
			<div class="modal-footer">
				<button type="button" class="btn btn-success edit_user">
				<span class="glyphicon glyphicon-file"></span>	Generate
				</button>
			</div>
    	
    </div>
    
    
    
    
    
</body>
</html>
<script>
    var url='<?php echo base_url(); ?>';
     $(document).ready(function () {
     	
     	$("#interval,#expfrom,#expto,#commodity").attr("disabled", 'disabled');
     	
     	$('#county').on('change', function(){
     		var county_val=$('#county').val()
    var drop_down='';
	 var facility_select = "<?php echo base_url(); ?>reports/get_sub_county_json_data/"+county_val;
  	$.getJSON( facility_select ,function( json ) {
     $("#sub_county").html('<option value="NULL" selected="selected">All Sub-Counties</option>');
      $.each(json, function( key, val ) {
        drop_down +="<option value='"+json[key]["id"]+"'>"+json[key]["district"]+"</option>"; 
      });
      $("#sub_county").append(drop_down);
    });
    
})	

$('#sub_county').on('change', function(){
     		var subcounty_val=$('#sub_county').val()
    var drop_down='';
	 var facility_select = "<?php echo base_url(); ?>reports/get_facility_json/"+subcounty_val;
  	$.getJSON( facility_select ,function( json ) {
     $("#facility_id").html('<option value="NULL" selected="selected">All Facilities</option>');
      $.each(json, function( key, val ) {
        drop_down +="<option value='"+json[key]["facility_code"]+"'>"+json[key]["facility_name"]+"</option>"; 
      });
      $("#facility_id").append(drop_down);
    });
    
})	
    		
    
    $( "#expfrom,#expto" ).datepicker();
    
     $("input:radio[name=criteria]").click(function() {
    var value = $(this).val();
    //alert (value)
    
   					 if(value=="Potential"){
						
						
						$("#interval").attr("disabled", false);
						$("#year").attr("disabled", 'disabled');
						 
						}else if(value=="Actual"){
							
							$("#expfrom,#expto").attr("disabled", false);
							$("#year,#interval").attr("disabled", 'disabled');
							
						}else{
							$("#interval,#expfrom,#expto").attr("disabled", 'disabled');
							$("#year").attr("disabled", false);
							
						}
});

$("input:radio[name=commodity_s]").click(function() {
    var val = $(this).val();
    //alert (value)
    
   					 if(val=="Specify"){
						
						$("#commodity").attr("disabled", false);
						 
						}else{
							
							$("#commodity").attr("disabled", 'disabled');
							
						}
});

});

    
    
    </script>
 <script src="<?php echo base_url().'assets/boot-strap3/js/bootstrap.min.js'?>" type="text/javascript"></script>
    <!-- Bootstrap core JavaScript===================== --> 
  <script src="<?php echo base_url().'assets/scripts/jquery-ui-1.10.4.custom.min.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/highcharts.js'?>" type="text/javascript"></script>
   <script src="<?php echo base_url().'assets/scripts/exporting.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/jquery.floatThead.min.js'?>" type="text/javascript"></script>  
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url().'assets/scripts/hcmp_shared_functions.js'?>" type="text/javascript"></script>
    <!--Datatables==========================  -->
  <script src="<?php echo base_url().'assets/datatable/jquery.dataTables.min.js'?>" type="text/javascript"></script>    
  <script src="<?php echo base_url().'assets/datatable/dataTables.bootstrap.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/datatable/TableTools.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/datatable/ZeroClipboard.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/datatable/dataTables.bootstrapPagination.js'?>" type="text/javascript"></script>
  <!-- validation ===================== -->
  <script src="<?php echo base_url().'assets/scripts/jquery.validate.min.js'?>" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/loadingbar.css'?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/elusive-webfont.css'?>" />
