
	    <div class="container-fluid">

	    	<!-- Page Heading -->
	        <h1 class="h3 mb-4 text-gray-800">Update Kategori</h1>
	        <div class="col-md-12">
	            <a class="btn btn-secondary" href="<?php echo base_url('kategori/'); ?>">Kembali</a>
	        </div>
	        <?php foreach($kategori as $u){ ?>
	        <div class="card shadow mb-4 mt-2">
	        	<div class="card-header py-3">
	            	<h6 class="m-0 font-weight-bold text-primary">Form Kategori</h6>
	            </div>
	            <div class="offset-md-2 col-md-8 offset-md-2 card-body">
	            	<form action="<?php echo base_url('kategori/proses_ubah'); ?>" method="post">
	            		<input type="hidden" name="id" value="<?php echo $u->id ?>">
					  	<div class="form-group">
					    	<label>Nama Kategori</label>
					    	<input type="text" name="nama_kategori" class="form-control" placeholder="Isi Nama Kategori" value="<?php echo $u->nama_kategori ?>" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Keterangan</label>
					    	<textarea class="form-control" name="keterangan" placeholder="Keterangan (Opsional)"><?php echo $u->keterangan ?></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
	            </div>
	        </div>
	        <?php } ?>
	    </div>
