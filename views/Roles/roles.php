
<?php headerAdmin($data); 
    getModal('modal_roles', $data);

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 d-flex">
            <h1><?php echo $data['page_title'];?></h1> 
            <button type="button" class="btn btn-primary ml-2" onclick="openModal();">
                <i class="fas fa-plus-circle"></i> Nuevo
            </button>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url();?>Home">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $data['page_name'];?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card bg-dark">
              <div class="card-header">
                <h3 class="card-title">Listado</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="tableRoles" class="table table-bordered table-striped table-dark table-hover" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Rol</th>
                      <th>Descripción</th>
                      <th>Status</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table><!--/Table-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php footerAdmin($data); ?>