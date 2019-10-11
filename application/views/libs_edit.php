
	    <div class="container-fluid">

	    	<!-- Page Heading -->
	        <h1 class="h3 mb-4 text-gray-800">Tambah Assets</h1>
	        <div class="col-md-12">
	            <a class="btn btn-secondary" href="<?php echo base_url('libs/'); ?>">Kembali</a>
	        </div>
	        <?php foreach($libs as $u){ ?>
	        <div class="card shadow mb-4 mt-2">
	        	<div class="card-header py-3">
	            	<h6 class="m-0 font-weight-bold text-primary">Form Assets</h6>
	            </div>
	            <div class="offset-md-2 col-md-8 offset-md-2 card-body">
	            	<form action="<?php echo base_url('libs/proses_ubah'); ?>"  method="post" enctype="multipart/form-data">
	            	  <input type="hidden" name="id" value="<?php echo $u->id ?>">
	            	  <div class="form-group">
	            	  	<select name="kategori_id" id="kategori_id" class="form-control">
                          <?php foreach ($kategori as $rd){ ?>
                              <option value="<?php echo $rd->id; ?>" <?php if ($rd->id == $u->kategori_id) {echo "selected";} ?>><?php echo $rd->nama_kategori; ?></option>
                          <?php }; ?>
                        </select>
	            	  </div>
					  <div class="form-group">
					    <label>Nama File</label>
					    <input type="text" name="nama_file" class="form-control" placeholder="Isi Nama File" value="<?php echo $u->nama_file ?>" required>
					  </div>
					  <div class="form-group">
					    <label>Upload File</label>
					    <input name="upload_file" type="file" class="form-control">
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
