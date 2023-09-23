<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sistema de Solicitud</title>
        <!-- Custom Core CSS -->
        <link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'bower_components/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets/css/login.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets/notifIt/css/notifIt.css';?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url().'assets/images/favicon.ico';?>" rel="shortcut icon" type="image/x-icon">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h4>
                    Sistema de Gestión de Préstamo 
                    <small><i class="fa fa-code-fork" aria-hidden="true"></i> 1.5</small>
                </h4>
            </div>
            <div class="row vertical-offset-100">
                <!-- Contenido de la vista LOGIN-->
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row">
                                <img id="logo" src="<?php echo base_url('assets/images/calendar.png'); ?>" class="img-responsive center-block" alt="Conxole Admin"/>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="regresarLogin" action="<?php echo base_url('login/log_in')?>" method="POST" role="form" data-toggle="validator">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" maxlength="9" class="form-control" id="codUser" name="codUser" data-error="* Campo requerido!" required>
                                        </div>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors"></div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            </span>
                                            <input type="password" class="form-control" id="contrasena" name="contrasena" data-error="* Campo requerido!" required>
                                        </div>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors"></div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i> Iniciar Sesión
                                        </button>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-12-->
                            </form><!-- /.form -->
                        </div>
                    </div>
                    <h6><i class="fa fa-copyright" aria-hidden="true"></i> Todos los Derechos Reservados - 2016</h6>
                </div><!-- /.col-md-4 col-md-offset-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <!-- jQuery Bootstrap Core JavaScript-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'bower_components/bootstrap-validator/dist/validator.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/notifIt/js/notifIt.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/login.js';?>"></script>
    </body>
</html>