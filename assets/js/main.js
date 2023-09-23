$(function(){

    var currentDate; // Holds the day clicked when adding a new event
    var currentEvent; // Holds the event object when editing an event
    var codigoUser;
        

    //$('#color').colorpicker(); // Colopicker
    $('#fecha').timepicker({
        minuteStep: 5,
        showInputs: false,
        disableFocus: true,
        showMeridian: false
    });  // Timepicker

    var base_url='http://localhost/daniela/'; // Here i define the base_url

    $.getJSON( base_url + 'solicitudes/returnCodUser', function( data ){
        console.log(parseInt(data));
        $('#sCodUser').val(parseInt(data));
    });

    $.getJSON( base_url + 'solicitudes/getEquipos', function(equipos)
    {
        $.each(equipos, function(i, equipo){
            $('#regresarEquipo').append($('<option>', { 
                value: equipo.id,
                text : equipo.equiDes 
            }));
        })
    });
    
     // Fullcalendar
    $('#calendar').fullCalendar({
        timeFormat: 'H(:mm)',
        header: {
            left: 'prev, next, today',
            center: 'title',
             right: 'month, basicWeek, basicDay'
        },
        // Get all events stored in database

        eventLimit: true, // allow "more" link when too many events
        events: base_url+'solicitudes/getEvents',

         // Handle Day Click
        dayClick: function(date, event, view) {
            currentDate = date.format();
            // Open modal to add event
            modal({
                // Available buttons when adding
                buttons: {
                    add: {
                        id: 'add-event', // Buttons id
                        css: 'btn-success', // Buttons class
                        label: 'Añadir' // Buttons label
                    }
                },
                title: 'Add Event (' + date.format() + ')' // Modal title
            });
        },
   
        editable: true, // Make the event draggable true 
   
        eventDrop: function(event, delta, revertFunc) {  
            $.post(base_url+'solicitudes/dragUpdateEvent',{                            
                id:event.id,
                date: event.start.format()
            }, function(result){
                if(result)
                {
                    notif({
                        type: "success",
                        msg: "¡Great!... La solicitud se modifico correctamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
                else
                {
                    notif({
                        type: "warning",
                        msg: "¡Ops!... Datos incorrectos, intentelo nuevamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
            });
        },
        eventRender: function(event, element) { 
            element.append(" " + event.equiDes); 
        },
          // Event Mouseover
        eventMouseover: function(calEvent, jsEvent, view){

            var tooltip = '<div class="event-tooltip">' + calEvent.date + '</div>';
            $("body").append(tooltip);

            $(this).mouseover(function(e) {
                $(this).css('z-index', 10000);
                $('.event-tooltip').fadeIn('500');
                $('.event-tooltip').fadeTo('10', 1.9);
            }).mousemove(function(e) {
                $('.event-tooltip').css('top', e.pageY + 10);
                $('.event-tooltip').css('left', e.pageX + 20);
            });
        },
        eventMouseout: function(calEvent, jsEvent) {
            $(this).css('z-index', 8);
            $('.event-tooltip').remove();
        },
        // Handle Existing Event Click
        eventClick: function(calEvent, jsEvent, view) {
            // Set currentEvent variable according to the event clicked in the calendar
            currentEvent = calEvent;

            // Open modal to edit or delete event
            modal({
                // Available buttons when editing
                buttons: {
                    delete: {
                        id: 'delete-event',
                        css: 'btn-danger',
                        label: 'Eliminar'
                    },
                    update: {
                        id: 'update-event',
                        css: 'btn-success',
                        label: 'Actualizar'
                    }
                },
                title: 'Edit Event "' + calEvent.title + '"',
                event: calEvent
            });
        }

    });

    // Prepares the modal window according to data passed
    function modal(data) {
        // Set modal title
        $('.modal-title').append(' ' + data.title);
        // Clear buttons except Cancel
        $('.modal-footer button:not(".btn-default")').remove();
        // Set input values
        $('#equiDes').val(data.event ? data.event.equiDes : '');
        $('#horaInicial').val(data.event ? data.event.horaInicial : '');
        $('#horaFinal').val(data.event ? data.event.horaFinal : '')
        if( ! data.event) {
            // When adding set timepicker to current time
            var now = new Date();
            var time = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' + now.getMinutes() : now.getMinutes());
        } else {
            // When editing set timepicker to event's time
            var time = data.event.date.split(' ')[1].slice(0, -3);
            time = time.charAt(0) === '0' ? time.slice(1) : time;
        }
        $('#fecha').val(time);
        // Create Butttons
        $.each(data.buttons, function(index, button){
            $('.modal-footer').prepend('<button type="button" id="' + button.id  + '" class="btn ' + button.css + '">' + button.label + '</button>')
        })
        //Show Modal
        $('.modal').modal('show');
    }

    // Handle Click on Add Button
    $('.modal').on('click', '#add-event',  function(e){
        if(validator(['sCodUser', 'equiDes', 'horaInicial', 'horaFinal'])) {
            $.post(base_url+'solicitudes/addEvent', {
                equiDes: $('#equiDes').val(),
                codUser: $('#sCodUser').val(),
                horaInicial: $('#horaInicial').val(),
                horaFinal: $('#horaFinal').val(),
                date: currentDate + ' ' + getTime(),
                estado: 'Inhabilitado',
                id: $('#regresarEquipo').val()
            }, function(result){
                if(result)
                {
                    notif({
                        type: "success",
                        msg: "¡Great!... La solicitud se agrego correctamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
                else
                {
                    notif({
                        type: "warning",
                        msg: "¡Ops!... Datos incorrectos, intentelo nuevamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
                $('.modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
            });
        }
    });


    // Handle click on Update Button
    $('.modal').on('click', '#update-event',  function(e){
        if(validator(['sCodUser', 'equiDes', 'horaInicial', 'horaFinal'])) {
            $.post(base_url+'solicitudes/updateEvent', {
                id: currentEvent._id,
                equiDes: $('#equiDes').val(),
                codUser: $('#sCodUser').val(),
                horaInicial: $('#horaInicial').val(),
                horaFinal: $('#horaFinal').val(),
                date: currentEvent.date.split(' ')[0]  + ' ' +  getTime()
            }, function(result){
                if(result)
                {
                    notif({
                        type: "success",
                        msg: "¡Great!... La solicitud se modifico correctamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
                else
                {
                    notif({
                        type: "warning",
                        msg: "¡Ops!... Datos incorrectos, intentelo nuevamente.",
                        position: "right",
                        width: 400,
                        height: 60,
                        autohide: true
                    });
                }
                $('.modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
            });
        }
    });



    // Handle Click on Delete Button
    $('.modal').on('click', '#delete-event',  function(e){
        $.get(base_url+'solicitudes/deleteEvent?id=' + currentEvent._id, function(result){
            if(result)
            {
                notif({
                    type: "success",
                    msg: "¡Great!... La solicitud se elimino correctamente.",
                    position: "right",
                    width: 400,
                    height: 60,
                    autohide: true
                });
            }
            else
            {
                notif({
                    type: "warning",
                    msg: "¡Ops!... Datos incorrectos, intentelo nuevamente.",
                    position: "right",
                    width: 400,
                    height: 60,
                    autohide: true
                });
            }
            $('.modal').modal('hide');
            $('#calendar').fullCalendar("refetchEvents");
        });
    });


    // Get Formated Time From Timepicker
    function getTime() {
        var time = $('#fecha').val();
        return (time.indexOf(':') == 1 ? '0' + time : time) + ':00';
    }

    // Dead Basic Validation For Inputs
    function validator(elements) {
        var errors = 0;
        $.each(elements, function(index, element){
            if($.trim($('#' + element).val()) == '') errors++;
        });
        if(errors) {
            $('.error').html('Please insert title and description');
            return false;
        }
        return true;
    }
});