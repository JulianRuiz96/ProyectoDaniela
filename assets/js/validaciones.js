
    function limpiarCampos() {
    	document.getElementById("tipousuario").reset();
    }

    function validarTipo() {
        var Tipo = document.getElementById("tuserDes");
        if (Tipo.value == "" || Tipo.value == null) {
            notif({
                msg: "<span class='glyphicon glyphicon-exclamation-sign'></span> Porfavor ingrese una descripción!",
                type: "warning",
                position: "center",
                timeout: 2000
            });
            Tipo.focus();
            return false;
        } else {
            document.getElementById("tuserDes").val();
        }

        var estado = document.getElementById("estado");
        if (estado.value == "" || estado.value == null) {
            notif({
                msg: "<span class='glyphicon glyphicon-exclamation-sign'></span> Selecciona un estado!",
                type: "warning",
                position: "center",
                timeout: 2000
            });
            estado.focus();
            return false;
        } else {
            estado = $('#estado').val();
        }
    }