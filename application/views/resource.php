 <?php 
                                echo validation_errors();
                                echo form_open('user/login', 'id="login" class="form" role="form"'); 
                                echo form_fieldset();
                            ?>
                                <div class="col-md-12 form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" maxlength="9" class="form-control" id="user" name="user" data-error="El Id del usuario es requerido!" required autocomplete="off" placeholder="Usuario">
                                    </div>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </span>
                                        <input type="password" class="form-control" id="pass" name="pass" data-error="La clave de usuario es requerida!" required autocomplete="off" placeholder="Contraseña">
                                    </div>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                    <!--
                                    <div class="col-md-12 form-group has-feedback">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            </span>
                                            <select class="form-control" id="tUser" name="tUser" data-error="Tipo de usuario requerido!" required>
                                                <option value=""> Tipo de Usuario</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Estandar">Estandar</option>
                                            </select>
                                        </div>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors"></div>
                                    </div>-->
                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Iniciar Sesión
                                </button>
                            <?php 
                                echo form_fieldset_close(); 
                                echo form_close();
                            ?>

usuarios {id, nombres, apellidos, codUser, contrasena, email, rolDes, tuserDes}
rol {id, rosDes, estado}
equipo {id, equiDes, estado}
tipoUsuario {id, tuserDes, estado}
solicitudes {id, equiDes, codUser, horaInicial, horaFinal, fecha}



                            <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['contenido'] ='home';
            $this->load->view('template/template_base',$data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */


        $result = $this->db->get('usuarios');
        $data  = array('consulta' => $result );
<div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                    <table id="equipos" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="hidden">Id</th>
                                <th class="text-center">nombres</th>
                                <th class="text-center">apellidos</th>
                                <th class="text-center">codigo</th>
                                <th class="text-center">email</th>
                                <th class="text-center">rol</th>
                                <th class="text-center">tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if (is_array($consulta) || is_object($consulta))
                                { 
                                    foreach ($consulta->result() as $user):?>
                                <tr>
                                    <td class="hidden"><?php echo $user->id;?></td>
                                    <td class="text-center"><?php echo $user->nombres;?></td>
                                    <td class="text-center"><?php echo $user->apellidos;?></td>
                                    <td class="text-center"><?php echo $user->codUser;?></td>
                                    <td class="text-center"><?php echo $user->email;?></td>
                                    <td class="text-center"><?php echo $user->rolDes;?></td>
                                    <td class="text-center"><?php echo $user->tuserDes;?></td>
                                </tr>
                            <?php  endforeach;} ?>
                        </tbody>
                    </table>
                </div>
            </div>



<fieldset>
                        <legend>Crear equipo nuevo</legend>
                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label">Descripción</label>
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-tag" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control" id="equiDes" name="equiDes" data-error="* Campo requerido!" required>
                            </div>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div><!-- /.form-group -->
                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label">Estado</label>
                            <div class="input-group col-sm-10">
                                <span class="input-group-addon">
                                    <i class="fa fa-tag" aria-hidden="true"></i>
                                </span>
                                <select class="form-control" id="estado" name="estado" data-error="*Campo requerido!" required>
                                    <option value="">Seleccionar</option>
                                    <option value="Habilitado">Habilitado</option>
                                    <option value="Inhabilitado">Inhabilitado</option>
                                </select>
                            </div>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div><!-- /.form-group -->
                        <hr>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-info btn-lg btn-block">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar equipo
                                </button>
                            </div>
                        </div><!-- /.form-group -->
                    </fieldset><!-- /.fieldset -->





            
                                                        