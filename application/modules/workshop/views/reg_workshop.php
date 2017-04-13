<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-reorder"></i>
			<span class="hidden-480">Daftar Workshop</span>
		</div>
	</div>
	<div class="portlet-body form">
		<form action="<?php echo site_url("/workshop/daftarWorkshop")?>" class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label">Workshop</label>
				<div class="controls">
					<select class="medium m-wrap" name="ID_WORKSHOP">
						<?php foreach($workshop as $ws):?>
						<option value="<?php echo $ws->ID_WORKSHOP;?>"><?php echo $ws->NAMA_W;?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Nama</label>
				<div class="controls">
					<input type="text" class="m-wrap medium" name="NAMA" value="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">No. Telepon</label>
				<div class="controls">
					<input type="text" class="m-wrap medium" name="NO_TELP" value="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Asal Kampus</label>
				<div class="controls">
					<select class="medium m-wrap" name="ASAL">
						<option value="STIKI">STIKI</option>
					</select>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn blue"><i class="icon-ok"></i> Daftar</button>
			</div>
		</form>
	</div>
</div>