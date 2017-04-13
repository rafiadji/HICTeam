<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->        
	<ul class="page-sidebar-menu">
		<li>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		</li>
		<li>
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<form class="sidebar-search">
				<div class="input-box">
					<a href="javascript:;" class="remove"></a>
					<input type="text" placeholder="Search..." />
					<input type="button" class="submit" value=" " />
				</div>
			</form>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
		</li>
		<li class="start <?php if($this->uri->segment(1) == "dashboard"){ echo 'active';}?>">
			<a href="<?php echo base_url();?>dashboard">
			<i class="icon-home"></i> 
			<span class="title">Dashboard</span>
			<span class="selected"></span>
			</a>
		</li>
		<li class="<?php if($this->uri->segment(1) == "workshop_admin"){ echo 'active';}?>">
			<a href="<?php echo base_url();?>workshop_admin">
			<i class="icon-home"></i> 
			<span class="title">Workshop</span>
			<span class="selected"></span>
			</a>
		</li>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->