
	    <div class="container-fluid">

	    	<!-- Page Heading -->
	        <h1 class="h3 mb-4 text-gray-800">Update User Admin</h1>
	        <div class="col-md-12">
	            <a class="btn btn-secondary" href="<?php echo base_url('user_admin/'); ?>">Kembali</a>
	        </div>
	        <?php foreach($user_admin as $u){ ?>
	        <div class="card shadow mb-4 mt-2">
	        	<div class="card-header py-3">
	            	<h6 class="m-0 font-weight-bold text-primary">Form User Admin</h6>
	            </div>
	            <div class="offset-md-2 col-md-8 offset-md-2 card-body">
	            	<form action="<?php echo base_url('user_admin/proses_ubah'); ?>" method="post">
	            		<input type="hidden" name="id" value="<?php echo $u->id ?>">
					  	<div class="form-group">
					    	<label>Username</label>
					    	<input type="text" name="username" class="form-control" placeholder="Isi Username" value="<?php echo $u->username ?>" required>
					  	</div>
					  	<div class="form-group">
					    	<label>Password Baru</label>
					    	<input type="password" name="password" class="form-control" placeholder="Isi Password" required>
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
