<?php if($this->session->flashdata('notif')): ?>
<div class="span12">
	<div class="alert alert-<?=@$this->session->flashdata('mod');?>">
		<button class="close" data-dismiss="alert"></button>
		<?=@$this->session->flashdata('notif');?>
	</div>
</div>
<?php endif; ?>
<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption"><i class="icon-edit"></i>Workshop HIC</div>
	</div>
	<div class="portlet-body">
		<div class="clearfix">
			<div class="btn-group">
				<button class="btn green" data-toggle="modal" data-target=".tambah_workshop"> <i class="icon-plus"></i> Tambah </button>
			</div>
		</div>
		<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
			<thead>
				<tr>
					<th width="1%">No</th>
					<th>Nama Workshop</th>
					<th width="22%">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php if($workshop):?>
				<?php $i = 1; foreach($workshop as $ws):?>
				<tr>
					<td width="1%"><?php echo $i?></td>
					<td><?php echo $ws->NAMA_W?></td>
					<td width="22%">
						<a href="#" class="btn purple mini">Ubah</a>
						<a href="#" class="btn blue mini">Lihat Peserta</a>
						<a href="<?php echo site_url("/excel/to_excel/".$ws->ID_WORKSHOP)?>" class="btn green mini">Export Excel</a>
					</td>
				</tr>
				<?php $i++; endforeach;?>
				<?php endif;?>
			</tbody>
		</table>
	</div>
</div>
<?php include('tambah_workshop.php');?>