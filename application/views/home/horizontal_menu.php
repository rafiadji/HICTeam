<div class="navbar hor-menu hidden-phone hidden-tablet">
	<div class="navbar-inner">
		<ul class="nav">
			<li class="visible-phone visible-tablet">
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
			<li <?php if($this->uri->total_segments() == 0){?> class="active" <?php }?>>
				<a href="<?php echo base_url()?>">
				<span class="selected"></span>
				Dashboard
				</a>
			</li>
			<li <?php if($this->uri->total_segments() > 0 && $this->uri->segment(1) == "workshop"){?> class="active" <?php }?>>
				<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
				<span class="selected"></span>
				Workshop
				<span class="arrow"></span>     
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url()?>workshop">
						Daftar Workshop
					</a></li>
					<li><a href="">
						Daftar Ulang Workshop
					</a></li>
				</ul>
				<b class="caret-out"></b>                        
			</li>
		</ul>
	</div>
</div>