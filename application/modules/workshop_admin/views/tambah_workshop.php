<div class="modal hide fade tambah_workshop" tabindex="-1" data-width="600">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h3>Tambah Workshop</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
		<form action="<?php echo base_url();?>workshop_admin/tambahWorkshop" method="POST" class="form-horizontal">
			<div class="control-group">
				<label class="control-label">Nama Workshop</label>
				<div class="controls">
					<input type="text" class="span10 m-wrap" name="NAMA_W"/>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn red">Batal</button>
		<input type="submit" name="Tambah" value="Tambah" class="btn green"/>
	</div>
	</form>
</div>