<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Akun</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('datapelanggan'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Akun</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Data Akun</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <a class="btn btn-primary" href="<?=base_url('dataakun/add_user'); ?>">Tambah User</a>
                </div> <br>
                Check All <input id="checkAll" class="checkAll" type="checkbox">
                <div class="">
                  Legend <br>
                  <span class="text-danger">Akun Disabled</span> <span>Akun Enabled</span>
                </div>
                <div class="table-responsive">
                <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Service</th>
        <th>Profile</th>
        <th>Remote Address</th>
    </tr>
    <?php foreach ($secrets as $secret): ?>
    <tr>
        <td><?php echo $secret['.id']; ?></td>
        <td><?php echo $secret['name']; ?></td>
        <td><?php echo $secret['service']; ?></td>
        <td><?php echo $secret['profile']; ?></td>
        <td><?php echo $secret['remote-address']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
              </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-danger" id="deletebluck">Hapus Selected</button>
                <span id="oke_gan"></span>
              </div>
            </div>
          </div>