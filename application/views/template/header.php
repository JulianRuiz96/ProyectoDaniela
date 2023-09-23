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
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('bower_components/datatables/media/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/notifIt/css/notifIt.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/images/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon">
        <!-- fullCalendar -->
        <link href='<?php echo base_url('bower_components/fullcalendar/dist/fullcalendar.min.css');?>' rel='stylesheet' />
        <link href='<?php echo base_url('bower_components/fullcalendar/dist/fullcalendar.print.min.css');?>' rel='stylesheet' media='print' />
        <link href="<?php echo base_url('assets/css/bootstrap-colorpicker.min.css');?> "rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/bootstrap-timepicker.min.css');?>" rel="stylesheet" />
    </head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="<?php echo base_url('assets/images/logo-u.png'); ?>" alt="Logo de la Universidad">
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li  class="active">
                        <a href="<?php echo base_url('home'); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('equipos'); ?>">
                            <i class="fa fa-desktop" aria-hidden="true"></i> Equipos
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('solicitudes'); ?>">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i> Solicitud
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-circle"></span> Usuario</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url('carreras'); ?>">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i> Carreras
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo base_url('rol'); ?>">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i> Roles
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo base_url('tipos'); ?>">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i> Tipo de Usuario
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo base_url('usuarios'); ?>">
                                    <i class="fa fa-users" aria-hidden="true"></i> Usuarios
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('reportes'); ?>">
                            <i class="fa fa-area-chart" aria-hidden="true"></i> Reportes
                        </a>
                    </li>
                    <li class="dropdown">
    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->session->userdata('nombres')?> <span class="glyphicon glyphicon-off"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url('configuracion'); ?>">
                                    <i class="fa fa-wrench" aria-hidden="true"></i> Configuración
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo base_url('login/log_out'); ?>">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">          