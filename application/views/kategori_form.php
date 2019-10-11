
	    <div class="container-fluid">

	    	<!-- Page Heading -->
	        <h1 class="h3 mb-4 text-gray-800">Tambah kategori</h1>
	        <div class="col-md-12">
	            <a class="btn btn-secondary" href="<?php echo base_url('kategori/'); ?>">Kembali</a>
	        </div>
	        
	        <div class="card shadow mb-4 mt-2">
	        	<div class="card-header py-3">
	            	<h6 class="m-0 font-weight-bold text-primary">Form kategori</h6>
	            </div>
	            <div class="offset-md-2 col-md-8 offset-md-2 card-body">
	            	<form action="<?php echo base_url('kategori/proses_tambah'); ?>"  method="post" enctype="multipart/form-data">
					  <div class="form-group">
					    <label>Nama Kategori</label>
					    <input type="text" name="nama_kategori" class="form-control" placeholder="Isi Nama Kategori" required>
					  </div>
					  <div class="form-group">
					    <label>Keterangan</label>
					    <textarea class="form-control" name="keterangan" placeholder="Keterangan (Opsional)"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Simpan</button>
					</form>
	            </div>
	        </div>

	    </div>
