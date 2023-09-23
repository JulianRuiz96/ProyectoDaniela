<!-- Page Usuarios Layout here -->
<div class="row top">
    <div class="col-md-12">
        <ol class="breadcrumb">
          <li><i class="fa fa-dashboard" aria-hidden="true"></i> Inicio</li>
          <li><i class="fa fa-users" aria-hidden="true"></i> Usuarios</li>
          <li class="active"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Usuario</li>
        </ol>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> Gestión de usuario del sistema
                </h3>
            </div>
            <div class="panel-body well">
                <form id="usuario" class="form-horizontal" action="" method="" data-toggle="validator" role="form">
                	<div class="col-md-5 col-md-offset-1">
                		<div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-tag" aria-hidden="true"></i> Nombres
	                        </label>
	                        <input type="text" class="form-control solo-letras" id="nombres" name="nombres" data-error="* Campo requerido!">
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
	                    <div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-tag" aria-hidden="true"></i> Apellidos
	                        </label>
	                        <input type="text" class="form-control solo-letras" id="apellidos" name="apellidos" data-error="* Campo requerido!" required>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
	                    <div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-barcode" aria-hidden="true"></i> Código
	                        </label>
	                        <input type="text" class="form-control solo-numero" id="codUser" name="codUser" data-error="* Campo requerido!" required>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
	                    <div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-envelope" aria-hidden="true"></i> Email
	                        </label>
	                        <input type="email" class="form-control" id="email" name="email" data-error="* Campo requerido!" required>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
                        <div class="form-group has-feedback">
                            <label class="control-label">
                                <i class="fa fa-university" aria-hidden="true"></i> Sede
                            </label>
                            <select class="form-control" id="sede" name="sede" data-error="* Campo requerido!" required>
                                <option value=""></option>
                                <option value="Principal">Principal</option>
                                <option value="García Herreros">García Herreros</option>
                                <option value="Colegio Americano">Colegio Americano</option>
                            </select>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div><!-- /.form-group -->
                	</div><!-- /.col-md-5 col-md-offset-1 -->
                	<div class="col-md-5 col-md-offset-1">
                		<div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-key" aria-hidden="true"></i> Contraseña
	                        </label>
	                        <input type="password" name="contrasena" class="form-control" data-minlength="6" id="inputPassword" data-error="* Campo obligatorio" required>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
	                    <div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-key" aria-hidden="true"></i> Confirmar contraseña
	                        </label>
	                        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Ops!, éstas contraseñas no coinciden!" required>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
	                    <div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-user-circle-o" aria-hidden="true"></i> Rol de usuario
	                        </label>
	                        <select class="form-control" id="rolDes" name="rolDes" data-error="* Campo requerido!" required>
	                        	<option value=""></option>
                                <?php if (is_array($roles) || is_object($roles)) {
                                    foreach ($roles as $rol): ?>
                                    <?php echo "<option value='".$rol->rolDes."'>".$rol->rolDes."</option>"?>
                                <?php endforeach;} ?>
							</select>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
	                    <div class="form-group has-feedback">
	                        <label class="control-label">
	                        	<i class="fa fa-user-circle-o" aria-hidden="true"></i> Tipo de usuario
	                        </label>
	                        <select class="form-control" id="tuserDes" name="tuserDes" data-error="* Campo requerido!" required>
                                <option value=""></option>
                                <?php if (is_array($tipos) || is_object($tipos)) {
                                    foreach ($tipos as $tipo): ?>
                                    <?php echo "<option value='".$tipo->tuserDes."'>".$tipo->tuserDes."</option>"?>
                                <?php endforeach;} ?>
                            </select>
	                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	                        <div class="help-block with-errors"></div>
	                    </div><!-- /.form-group -->
                        <div class="form-group has-feedback">
                            <label class="control-label">
                                <i class="fa fa-university" aria-hidden="true"></i> Carera
                            </label>
                            <select class="form-control" id="carDes" name="carDes" data-error="* Campo requerido!" required>
                                <option value=""></option>
                                <?php if (is_array($carreras) || is_object($carreras)) {
                                    foreach ($carreras as $carrera): ?>
                                    <?php echo "<option value='".$carrera->carDes."'>".$carrera->carDes."</option>"?>
                                <?php endforeach;} ?>
                            </select>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div><!-- /.form-group -->
                	</div><!-- /.col-md-5 col-md-offset-1 -->
                	<div class="row">
					  	<div class="col-md-6 col-md-offset-3">
                            <div class="btn-group btn-group-justified" role="group">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        <i class="fa fa-times" aria-hidden="true"></i> Cancelar
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar usuario
                                    </button>
                                </div>
                            </div>
					  	</div><!-- /.col-md-6 col-md-offset-3 -->
					</div><!-- /.row -->
                </form><!-- /.form -->
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
	</div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-users" aria-hidden="true"></i> Usarios creados
                </h3>
            </div>
            <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="hidden">Id</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">Código</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Rol</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Sede</th>
                            <th class="text-center">Carrera</th>
                            <th class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if (is_array($usuarios) || is_object($usuarios))
                            { 
                                foreach ($usuarios as $usuario):?>
                                <tr>
                                    <td class="hidden"><?php echo $usuario->id;?></td>
                                    <td class="text-center"><?php echo $usuario->nombres;?></td>
                                    <td class="text-center"><?php echo $usuario->apellidos;?></td>
                                    <td class="text-center"><?php echo $usuario->codUser;?></td>
                                    <td class="text-center"><?php echo $usuario->email;?></td>
                                    <td class="text-center"><?php echo $usuario->rolDes;?></td>
                                    <td class="text-center"><?php echo $usuario->tuserDes;?></td>
                                    <td class="text-center"><?php echo $usuario->sede;?></td>
                                    <td class="text-center"><?php echo $usuario->carrera;?></td>
                                    <td align="center">
                                        <!-- Editar Usuario-->
                                        <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#editarUsuario_<?php echo $usuario->id;?>">
                                            <i class="fa fa-pencil fa-1x" aria-hidden="true"></i>
                                        </a>
                                        <div id="editarUsuario_<?php echo $usuario->id;?>" class="modal fade" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog  modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <div class="text-center">
                                                                    <h4>
                                                                        <i class="fa fa-refresh" aria-hidden="true"></i> Modificar usuario
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form class="form-horizontal" action="<?php echo base_url('usuarios/update/'.$usuario->id);?>" method="POST" data-toggle="validator" role="form">
                                                            <div class="row mBottom">
                                                                <div class="col-md-6 col-sm-12 has-feedback">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Nombres <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="col-md-12"  id="nombres" name="nombres" value="<?php echo $usuario->nombres;?>">
                                                                    </div>
                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                        <div class="help-block with-errors"></div>
                                                                </div>
                                                                <div class="col-md-6  col-sm-12">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Apellidos <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="col-md-12"  id="apellidos" name="apellidos" value="<?php echo $usuario->apellidos;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mBottom">
                                                                <div class="col-md-6">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Código <i class="fa fa-barcode" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="col-md-12" id="codUser" name="codUser" value="<?php echo $usuario->codUser;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Email <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="email" class="col-md-12" id="email" name="email" value="<?php echo $usuario->email;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mBottom">
                                                                <div class="col-md-6">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Rol <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <select class="col-md-12" id="rolDes" name="rolDes" data-error="*Campo requerido!" required>
                                                                            <?php if ($equipo->rolDes == 'Docente'): ?>
                                                                                <option value="Docente" selected="selected">Docente</option>
                                                                                <option value="Estudiante">Estudiante</option>
                                                                            <?php else: ?>
                                                                                <option value="Docente">Docente</option>
                                                                                <option value="Estudiante" selected="selected">Estudiante</option>
                                                                            <?php endif ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                     <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Tipo <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <select class="col-md-12" id="tuserDes" name="tuserDes" data-error="*Campo requerido!" required>
                                                                            <?php if ($equipo->tuserDes == 'Administador'): ?>
                                                                                <option value="Administador" selected="selected">Administador</option>
                                                                                <option value="Estandar">Estandar</option>
                                                                            <?php else: ?>
                                                                                <option value="Administador">Administador</option>
                                                                                <option value="Estandar" selected="selected">Estandar</option>
                                                                            <?php endif ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mBottom">
                                                                <div class="col-md-6">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Sede <i class="fa fa-university" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="col-md-12" id="sede" name="sede" value="<?php echo $usuario->sede;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="col-md-3">
                                                                        <label class="control-label pull-right">
                                                                            Carrera <i class="fa fa-university" aria-hidden="true"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="col-md-12" id="carrera" name="carrera" value="<?php echo $usuario->carrera;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mBottom">
                                                                <hr>
                                                                <div class="col-md-8 col-md-offset-2">
                                                                    <div class="btn-group btn-group-justified" role="group">
                                                                        <input type="hidden" name="id" id="id" value="<?php echo $usuario->id;?>">
                                                                        <div class="btn-group" role="group">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                <i class="fa fa-times" aria-hidden="true"></i> Cancelar
                                                                            </button>
                                                                        </div>
                                                                        <div class="btn-group" role="group">
                                                                            <button type="submit" class="btn btn-info">
                                                                                <i class="fa fa-check" aria-hidden="true"></i> Actualizar
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <!-- Eliminar Usuario-->
                                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarUsuario_<?php echo $usuario->id;?>">
                                            <i class="fa fa-trash-o fa-1x" aria-hidden="true"></i>
                                        </a>
                                        <div id="eliminarUsuario_<?php echo $usuario->id;?>" class="modal fade" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <div class="text-center">
                                                                    <h4>
                                                                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atención
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="text-center">
                                                                    ¿Está seguro que desea eliminar al usuario: <?php echo $usuario->nombres;?>?
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="btn-group btn-group-justified">
                                                                    <a href="" class="btn btn-default" data-dismiss="modal">
                                                                        <i class="fa fa-times" aria-hidden="true"></i> Cancelar
                                                                    </a>
                                                                    <a href="<?php echo base_url('usuarios/delete/'.$usuario->id);?>" type="button" class="btn btn-danger">
                                                                        <i class="fa fa-check" aria-hidden="true"></i> Eliminar
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </td>
                                </tr>
                        <?php endforeach;} ?>
                    </tbody>
                </table>
            </div>
        </div><!-- /.panel -->
    </div><!-- /.col-md-12 -->
</div><!-- /.row -->