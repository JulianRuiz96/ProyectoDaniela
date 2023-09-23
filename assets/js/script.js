$(document).on("ready", main);

    var base_url = 'http://localhost/daniela/';
    function main(){
        $('.date').datetimepicker({format: 'YYYY-MM-DD HH:mm'});
        $("html").niceScroll();
        $('.form').validator();

        function reload() {
            window.location.reload(true);
        }

        $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        });

        $('.solo-letras').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z]/g, '');
        });
        // Función para agregar un Equipo
        $('#equipo').submit(function(event){
            event.preventDefault();
            $.ajax({
                url: 'equipos/add',
                type:'POST',
                data: $( this ).serialize() ,
                success:function(resp){
                    if (resp === "1") {
                        notif({
                            type: "success",
                            msg: "¡Great!... Equipo creado exitosamente!",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                        setInterval(reload,800);
                    }else if(resp === "-1"){
                        notif({
                            type: "warning",
                            msg: "¡Ops!... Equipo no fue guardado, intentelo nuevamente.",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                    }
                }// End success
            });// End Ajax
        });// End Add Equipo

        // Función para agregar un Rol
        $('#rol').submit(function(event){
            event.preventDefault();
            $.ajax({
                url: 'rol/add',
                type:'POST',
                data: $( this ).serialize() ,
                success:function(resp){
                    if (resp === "1") {
                        notif({
                            type: "success",
                            msg: "¡Great!... Rol creado exitosamente!",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                        setInterval(reload,800);
                    }else if(resp === "-1"){
                        notif({
                            type: "warning",
                            msg: "¡Ops!... Rol no fue guardado, intentelo nuevamente.",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                    }
                }// End success
            });// End Ajax
        });// End Add Rol

        // Función para agregar un Tipo de usuario
        $('#tipousuario').submit(function(event){
            event.preventDefault();
            $.ajax({
                url: 'tipos/add',
                type:'POST',
                data: $( this ).serialize() ,
                success:function(resp){
                    if (resp === "1") {
                        notif({
                            type: "success",
                            msg: "¡Great!... Tipo de usuario creado exitosamente!",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                        setInterval(reload,800);
                    }else if(resp === "-1"){
                        notif({
                            type: "warning",
                            msg: "¡Ops!... Tipo de usuario no fue guardado, intentelo nuevamente.",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                    }
                }// End success
            });// End Ajax
        });// End Add Tipo de usuario

        // Función para agregar un Usuario
        $( '#usuario' ).submit(function(event)
        {
            event.preventDefault();
             $.post( base_url+'usuarios/add', {
                nombres: $('#nombres').val(),
                apellidos: $('#apellidos').val(),
                codUser: $('#codUser').val(),
                email: $('#email').val(),
                sede: $('#sede option:selected').text(),
                contrasena: $('#inputPassword').val(),
                rolDes: $('#rolDes option:selected').text(),
                tuserDes: $('#tuserDes option:selected').text(),
                carDes: $('#carDes option:selected').text()

            }, function( data ){
                if (data === "1") {
                    notif({
                        type: "success",
                        msg: "¡Great!... Usuario creado exitosamente!",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                    setInterval(reload,800);
                }else if(data === "-1"){
                    notif({
                        type: "warning",
                        msg: "¡Ops!... Usuario no fue guardado, intentelo nuevamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
            }); //End Ajax
           // console.log("nombres: " + $('#nombres').val() + "apellidos: " + $('#apellidos').val() + "codUser: " + $('#codUser').val() + "email: " + $('#email').val() + "sede: " + $('#sede').text() + "contrasena: " + $('#inputPassword').val() + "rolDes: " + $('#rolDes option:selected').text() + "tuserDes: " + $('#tuserDes option:selected').text() + "carDes: " +  $('#carDes option:selected').text());
        }); //End add Usuario

        // Función para agregar una Carrera
        $('#carrera').submit(function(event){
            event.preventDefault();
            $.ajax({
                url: 'carreras/add',
                type:'POST',
                data: $( this ).serialize() ,
                success:function(resp){
                    if (resp === "1") {
                        notif({
                            type: "success",
                            msg: "¡Great!... Carrera creado exitosamente!",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                        setInterval(reload,800);
                    }else if(resp === "-1"){
                        notif({
                            type: "warning",
                            msg: "¡Ops!... Carrera no fue guardado, intentelo nuevamente.",
                            position: "right",
                            width: 400,
                            height: 60,
                            autohide: true
                        });
                    }
                }// End success
            });// End Ajax
        });// End Add Carrera
    }
