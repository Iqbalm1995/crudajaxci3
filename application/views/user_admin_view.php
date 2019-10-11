
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data User Admin</h1>
          <?php echo $this->session->userdata('message1') <> '' ? $this->session->userdata('message1') : ''; ?>
          <div class="col-md-12">
            <a class="btn btn-primary" href="<?php echo base_url('user_admin/tambah_data'); ?>">Tambah Data</a>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-2">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel User Admin</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">No.</th>
                      <th>Username</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach($user_admin as $r){ 
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $r->username ?></td>
                        <td><?php echo $r->keterangan ?></td>
                        <td>
                          <?php  
                            if ($r->id == 1) {?>
                             -
                          <?php  }else{ ?> 
                            <a href="<?php echo base_url('user_admin/edit/'.$r->id); ?>">Edit</a> | 
                            <a href="<?php echo base_url('user_admin/hapus/'.$r->id); ?>">Hapus</a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Script Data Tabel -->
        <script type="text/javascript">
          // Call the dataTables jQuery plugin
          $(document).ready(function() {
            $('#dataTable').DataTable();
          });
        </script>
        <!-- End Script Data Tabel -->
