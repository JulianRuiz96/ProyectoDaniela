  <!-- Page Configuration Layout here -->
  <div class="row top">
    <div class="col-md-12">
        <ol class="breadcrumb">
          <li><i class="fa fa-dashboard" aria-hidden="true"></i> Inicio</li>
          <li class="active"><i class="fa fa-wrench" aria-hidden="true"></i> Configuración de la cuenta</li>
        </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-picture-o" aria-hidden="true"></i> Avatar
          </h3>
        </div>
        <div class="panel-body">
          <img src="<?php echo base_url('assets/images/face.jpg'); ?>" alt="" class="img-circle img-responsive center-block profile">
          <hr>
          <ul class="list-group">
            <li class="list-group-item">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Rol : <?php echo $this->session->userdata('rolDes')?>
            </li>
            <li class="list-group-item">
              <i class="fa fa-user-circle" aria-hidden="true"></i> Tipo : <?php echo $this->session->userdata('tuserDes')?>
            </li>
          </ul>
        </div>
      </div><!-- /.panel -->
    </div><!-- /.col-md-4 -->
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-address-card-o" aria-hidden="true"></i> Información personal
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Información completa</a></li>
            <li><a href="#setting" data-toggle="tab">Editar información</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="row info">
                <div class="col-md-6">
                  <strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> Nombres</strong>
                  <p class="text-muted"><?php echo $this->session->userdata('nombres')?></p>
                  <hr>
                  <strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> Apellidos</strong>
                  <p class="text-muted"><?php echo $this->session->userdata('apellidos')?></p>
                  <hr>
                  <strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</strong>
                  <p class="text-muted"><?php echo $this->session->userdata('email')?></p>
                  <hr>
                </div><!-- /.col-md-6-->
                <div class="col-md-6">
                  <strong># Código</strong>
                  <p class="text-muted"><?php echo $this->session->userdata('codUser')?></p>
                  <hr>
                  <strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> Rol</strong>
                  <p class="text-muted"><?php echo $this->session->userdata('rolDes')?></p>
                  <hr>
                  <strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> Tipo de Usuario</strong>
                  <p class="text-muted"><?php echo $this->session->userdata('tuserDes')?></p>
                  <hr>
                </div><!-- /.col-md-6-->
              </div><!-- /.row -->
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="setting">
              <form data-toggle="validator" role="form" method="POST" action="">
                <div class="box-body">
                  <div class="row info">
                    <div class="col-md-6">
                      <div class="form-group has-feedback">
                        <label>Nombres</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                          </span>
                          <input type="text" class="form-control" id="upNombres" placeholder="Nombres" data-error="* Campo obligatorio" required>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Apellidos</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                          </span>
                          <input type="text" class="form-control" id="upApellidos" placeholder="Apellidos" data-error="* Campo obligatorio" required>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Email</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                          </span>
                          <input type="email" class="form-control" id="upEmail" placeholder="Email" data-error="* Campo obligatorio" required>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                      <div class="form-group has-feedback">
                        <label>Contraseña</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                          </span>
                          <input type="password" class="form-control" data-minlength="6" id="inputPassword" placeholder="Contraseña nueva" data-error="* Campo obligatorio" required>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Confirmar contraseña</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                          </span>
                          <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Vaya, éstas no coinciden!" placeholder="Confirmar contraseña" required>
                        </div>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success btn-flat">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar cambios
                  </button>
                </div>
              </form><!-- /.form-->
            </div><!-- /.tab-aboutme -->
          </div><!-- /.tab-content -->
        </div><!-- /.panel-body -->
      </div><!-- /.panel -->
    </div><!-- /.col-md-8 -->
  </div><!-- /.row -->