<!-- Vertically centered scrollable modal -->


<!-- Modal -->
<div class="modal fade" id="modalFormNewRol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary ">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="formRol" name="formRol">
                <div class="card-body">
                  <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del Rol" >
                  </div>
                  <div class="form-group">
                    <label class="control-label">Descripcion</label>
                    <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" 
                    placeholder="Descripcion del Rol" ></textarea>
                  </div>
                  <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control" id="listStatus" name="listStatus" >
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->
                <!--Button container-->
                <div class="card-footer d-flex">
                    <div class="col-md-6 text-left">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times-circle"></i> Cancelar
                    </button>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle"></i> Guardar
                        </button>
                    </div>
                  
                  
                </div>

              </form>
            </div>
      </div>
      
    </div>
  </div>
</div>