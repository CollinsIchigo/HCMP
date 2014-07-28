<div class="col-md-2" style="border-right: solid 1px #ccc;padding-right: 20px;">
    <select id="switch_county" style="max-width: 220px;background-color: #ffffff;border: 1px solid #cccccc;">
        <option>-- Select county --</option>
        <?php echo $option; ?>
    </select>

    <select id="switch_month" style="max-width: 220px;background-color: #ffffff;border: 1px solid #cccccc;">
        <option>-- <?php echo $englishdate;?> --</option>
        <?php for ($i=1; $i <12 ; $i++) { 
        $month = date('m', strtotime("-$i month")); 
        $year = date('Y', strtotime("-$i month")); 
        $month_value = $month.$year;
        $month_text =  date('F', strtotime("-$i month")); 
        $month_text = "-- ".$month_text." ".$year." --"; ?>
        <option value="<?php echo $month_value ?>"><?php echo $month_text ?></option>;
    <?php } ?>
    </select>

    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo base_url().'rtk_management/county_home'?>">Summary</a></li>        
        <li><a href="<?php echo base_url().'rtk_management/rca_districts'?>">Districts</a></li>
        <li><a href="<?php echo base_url().'rtk_management/rca_pending_facilities'?>">Pending Facilities</a></li>
        <li><a href="<?php echo base_url().'rtk_management/rca_facilities_reports' ?>">Reports</a></li>
        <li><a href="<?php echo base_url().'rtk_management/county_admin/users' ?>">Users</a></li>
        <li><a href="<?php echo base_url().'rtk_management/county_admin/facilities' ?>">Facilities</a></li>

    </ul>
</div>