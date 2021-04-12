<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('layout/header');
$this->load->view('layout/sidebar');

?>
<div class="main-content">
    <div class="mid-content">
		<div>
			<a href="<?php echo base_url()?>">Back</a>
		</div>
	<!-- <div id="assoc_tabs">
		<div class="row">
			<div class="col-md-8">
				<div class="col-sm-4">					
					<a class="as-link" href="assoc"><i id="count_list"></i>&nbsp;&nbsp;&nbsp;Active Associate</a>
				</div>
				<div class="col-sm-4">					
					<a href="<?php echo base_url()?>lu-assoc" style="font-size: 20px;"><i> </i>Less Used Associate</a>					
				</div>
				<div class="col-sm-4">
					<a href="<?php echo base_url()?>ia-assoc" style="font-size: 20px;"><i id="iat_count_list"></i>&nbsp;&nbsp;&nbsp;Inactive Associate</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-sm-3">
						
					</div>
					<div class="col-sm-3">
						<button class="btn btn-default">update</button>
					</div>
					<div class="col-sm-6">
						<button class="btn btn-default">Add New Associate</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row m-5">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="">
					
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'active')"><i id="count_list"></i>&nbsp;&nbsp;&nbsp;Active Associate</button>
  <button class="tablinks" onclick="openCity(event, 'less-used')"><i id="lu_count_list"></i>&nbsp;&nbsp;&nbsp;Less Used Associate</button>
  <button class="tablinks" onclick="openCity(event, 'Inactive')"><i id="iat_count_list"></i>&nbsp;&nbsp;&nbsp;Inactive Associate</button>
  <div class="row d-flex">
	<div type="button" class="update-btn"><i class="zmdi zmdi-refresh-alt"></i>  update</div>
  <div type="button" class="add-btn"><i class="zmdi zmdi-plus"></i>  Add New Associate</div>
  </div>
  
</div>

<div id="active" class="tabcontent">
  <table class="table table-hover" id="at_assoc_list">
  </table>
</div>

<div id="less-used" class="tabcontent">
	 <table class="table table-hover" id="lu_assoc_list">
  	</table>
</div>

<div id="Inactive" class="tabcontent">
 	<table class="table table-hover" id="iat_assoc_list">
	</table>
</div>



	
<?php $this->load->view('layout/footer'); ?>