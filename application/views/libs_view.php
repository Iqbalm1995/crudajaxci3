
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Assets</h1>
          <?php echo $this->session->userdata('message1') <> '' ? $this->session->userdata('message1') : ''; ?>
          <div class="col-md-12">
            <a class="btn btn-primary" href="<?php echo base_url('libs/tambah_data'); ?>">Tambah Data</a>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-2">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Assets</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">No.</th>
                      <th>Kategori</th>
                      <th>Nama File</th>
                      <th>Keterangan</th>
                      <th>Upload File</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Kategori</th>
                      <th>Nama File</th>
                      <th>Keterangan</th>
                      <th>Upload File</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach($libs as $r){ 

                        $kategori_val    = $this->libs->get_id_val($r->kategori_id,'t_kategori');
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $kategori_val['nama_kategori'] ?></td>
                        <td><?php echo $r->nama_file ?></td>
                        <td><?php echo $r->keterangan ?></td>
                        <td><a href="<?php echo base_url('upload_file/'.$r->upload_file) ?>" target="_blank"><?php echo $r->upload_file ?></a>
                          <small>(<a href="<?php echo base_url('libs/download_file/'.$r->upload_file) ?>" target="_blank">Download</a>)</small>
                        </td>
                        <td><small><?php echo $r->tanggal ?></small></td>
                        <td>
                          <a href="<?php echo base_url('libs/edit/'.$r->id); ?>">Edit</a> | 
                          <a href="<?php echo base_url('libs/hapus/'.$r->id); ?>">Hapus</a>
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
