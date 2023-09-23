<!-- Page Rol Layout here -->
<div class="row top">
    <div class="col-md-12">
        <ol class="breadcrumb">
          <li><i class="fa fa-dashboard" aria-hidden="true"></i> Inicio</li>
          <li><i class="fa fa-users" aria-hidden="true"></i> Usuarios</li>
          <li class="active"><i class="fa fa-user-secret" aria-hidden="true"></i> Roles</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-list-ul" aria-hidden="true"></i> Roles creados
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="hidden">Id</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if (is_array($roles) || is_object($roles))
                            { 
                                foreach ($roles as $rol):?>
                                <tr>
                                    <td class="hidden"><?php echo $rol->id;?></td>
                                    <td class="text-center"><?php echo $rol->rolDes;?></td>
                                    <td class="text-center">
                                        <span class="label label-default"><?php echo $rol->estado;?></span>
                                    </td>
                                    <td align="center">
                                        <!-- Editar Rol-->
                                        <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#editarRol_<?php echo $rol->id;?>">
                                            <i class="fa fa-pencil fa-1x" aria-hidden="true"></i>
                                        </a>
                                        <div id="editarRol_<?php echo $rol->id;?>" class="modal fade" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <div class="text-center">
                                                                    <h4>
                                                                        <i class="fa fa-refresh" aria-hidden="true"></i> Modificar
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" action="<?php echo base_url('rol/update/'.$rol->id);?>" method="POST" data-toggle="validator" role="form">
                                                            <div class="form-group  has-feedback">
                                                                <label class="col-md-2 control-label">Descripción</label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class=" form-control" id="rolDes" name="rolDes" value="<?php echo $rol->rolDes;?>">
                                                                </div>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <div class="form-group  has-feedback">
                                                                <label class="col-md-2 control-label">Estado</label>
                                                                <div class="col-md-10">
                                                                    <select class="form-control" id="estado" name="estado" data-error="*Campo requerido!" required>
                                                                        <?php if ($rol->estado == 'Habilitado'): ?>
                                                                            <option value="Habilitado" selected="selected">Habilitado</option>
                                                                            <option value="Inhabilitado">Inhabilitado</option>
                                                                        <?php else: ?>
                                                                            <option value="Habilitado">Habilitado</option>
                                                                            <option value="Inhabilitado" selected="selected">Inhabilitado</option>
                                                                        <?php endif ?>
                                                                    </select>
                                                                </div>
                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="btn-group btn-group-justified" role="group">
                                                                        <input type="hidden" name="id" id="id" value="<?php echo $rol->id;?>">
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
                                        <!-- Eliminar Rol-->
                                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarRol_<?php echo $rol->id;?>">
                                            <i class="fa fa-trash-o fa-1x" aria-hidden="true"></i>
                                        </a>
                                        <div id="eliminarRol_<?php echo $rol->id;?>" class="modal fade" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
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
                                                                    ¿ Está seguro que desea eliminar este ROL tipo: <?php echo $rol->rolDes;?>?
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
                                                                    <a href="<?php echo base_url('rol/delete/'.$rol->id);?>" type="button" class="btn btn-danger">
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
    </div><!-- /.col-md-6 -->
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user-o" aria-hidden="true"></i> Gestión de rol del sistema
                </h3>
            </div>
            <div class="panel-body well">
                <form id="rol" class="form-horizontal col-md-12" action="" method="" role="form">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Descripción</label>
                        <div class="input-group col-md-10">
                            <span class="input-group-addon">
                                <i class="fa fa-tag" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id="rolDes" name="rolDes" required>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="col-md-2 control-label">Estado</label>
                        <div class="input-group col-md-10">
                            <span class="input-group-addon">
                                <i class="fa fa-tag" aria-hidden="true"></i>
                            </span>
                            <select class="form-control" id="estado" name="estado" required>
                                <option value=""></option>
                                <option value="Habilitado">Habilitado</option>
                                <option value="Inhabilitado">Inhabilitado</option>
                            </select>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <hr>
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default" onclick="return limpiarCampos();">
                                        <i class="fa fa-times" aria-hidden="true"></i> Cancelar
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary ">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Crear rol
                                    </button>
                                </div>
                            </div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.form-group -->
                </form><!-- /.form -->
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-md-6 -->
</div><!-- /.row -->