
<link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css' rel='stylesheet' />
<script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script>

<!-- Page Equipos Layout here -->
<div class="row top">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard" aria-hidden="true"></i> Inicio</li>
            <li class="active"><i class="fa fa-sticky-note" aria-hidden="true"></i> Solicitud</li>
        </ol>
    </div>
</div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-list-ul" aria-hidden="true"></i> Equipos en bodega
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="hidden">Id</th>
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  if (is_array($equipos) || is_object($equipos)) {
                                foreach ($equipos as $equipo):?>
                                <tr>
                                    <td class="hidden"><?php echo $equipo->id;?></td>
                                    <td class="text-center"><?php echo $equipo->equiDes;?></td>
                                    <td class="text-center"><span class="label label-default"><?php echo $equipo->estado;?></span></td>
                                </tr>
                            <?php  endforeach;} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-calendar" aria-hidden="true"></i> Itinerario de préstamo
                    </h3>
                </div>
                <div class="panel-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
    <!-- calendar modal -->


    <div class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="text-center">
                                <h4><i class="fa fa-sticky-note" aria-hidden="true"></i>Actualizar solicitud de préstamo</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body well">
                    <div id="testmodal">
                        <form id="antoform" class="form-horizontal calender" data-toggle="validator" role="form" method="">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <duv class="col-md-12">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">
                                                    <i class="fa fa-university" aria-hidden="true"></i> Equipo
                                                </label>
                                                <select class="form-control" id="regresarEquipo" name="regresarEquipo" data-error="* Campo requerido!" required>
                                                </select>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </duv>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Código del usuario</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-barcode" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" maxlength="9" class="form-control" id="sCodUser" name="codUser" data-error="* Campo requerido!" required autocomplete="off">
                                                </div>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Descripción del articulo</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" maxlength="9" class="form-control"  id="equiDes" name="equiDes" data-error="* Campo requerido!" required autocomplete="off">
                                                </div>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Fecha de préstamo</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control date" id="horaInicial" name="horaInicial" data-error="* Campo requerido!" required autocomplete="off">
                                                </div>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback ">
                                                <label class="control-label">Fecha de devolución</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control date" id="horaFinal" name="horaFinal" data-error="* Campo requerido!" required autocomplete="off">
                                                    <input type="hidden" class="form-control" id="fecha" name="fecha" data-error="* Campo requerido!" required autocomplete="off">
                                                </div>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#crearSolicitud"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#editarSolicitud"></div>
    <!-- /calendar modal -->
