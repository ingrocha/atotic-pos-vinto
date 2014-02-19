<script>
    /*** -----------------------------------------------------------------------------------------------
     
     ADMIN TEMPLATE | Boo Admin Template
     ----------------------------------------
     
     JS - Demo FullCalendar
     http://arshaw.com/fullcalendar/docs/
     
     -------------------------------------------------------------------------------------------------------------------------------- ***/
    $(document).ready(function() {
        demo_calendar.calBase();
        demo_calendar.calBaseStriped();        
        //* resize elements on window resize
        var lastWindowHeight = $(window).height();
        var lastWindowWidth = $(window).width();
        $(window).on("debouncedresize", function() {
            if ($(window).height() != lastWindowHeight || $(window).width() != lastWindowWidth) {
                lastWindowHeight = $(window).height();
                lastWindowWidth = $(window).width();
                //* rebuild calendar               
                $('#calendarS').fullCalendar('render');
            }
        });

        // DEMO CALENDAR initialize the external events
        // ------------------------------------------------------------------------------------------------ * -->
        $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });

        // DEMO CALENDAR initialize the calendar
        // ------------------------------------------------------------------------------------------------ * -->
        $('#calendarDemo').fullCalendar({
            header: {
                left: 'title,today',
                center: '',
                right: 'prev,month,agendaWeek,agendaDay,next'
            },
            buttonText: {
                prev: '<i class="fontello-icon-left-open-1"></i>',
                next: '<i class="fontello-icon-right-open-1"></i>',
                prevYear: '&nbsp;&lt;&lt;&nbsp;',
                nextYear: '&nbsp;&gt;&gt;&nbsp;',
                today: ' today <i class="fontello-icon-target-2 f-14"></i>'
            },
            aspectRatio: 2,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendarDemo').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
        });



    });

// CALENDAR SETTINGS
// ------------------------------------------------------------------------------------------------ * -->
    demo_calendar = {
        // new calendar
        calBase: function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'title,today',
                    center: '',
                    right: 'prev,month,agendaWeek,agendaDay,next'
                },
                buttonText: {
                    prev: '<i class="fontello-icon-left-open-1"></i>',
                    next: '<i class="fontello-icon-right-open-1"></i>',
                    prevYear: '&nbsp;&lt;&lt;&nbsp;',
                    nextYear: '&nbsp;&gt;&gt;&nbsp;',
                    today: ' today <i class="fontello-icon-target-2 f-14"></i>'
                },
                aspectRatio: 2,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent', {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                                );
                    }
                    calendar.fullCalendar('unselect');
                },
                editable: true,
                theme: false,
                events: [{
                        title: 'All Day Event',
                        start: new Date(y, m, 1),
                        color: '#61c261',
                        textColor: '#fff'
                    }, {
                        title: 'Long Event',
                        start: new Date(y, m, d - 5),
                        end: new Date(y, m, d - 2)
                    }, {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d + 8, 16, 0),
                        allDay: false
                    }, {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d + 15, 16, 0),
                        allDay: false
                    }, {
                        title: 'Meeting',
                        start: new Date(y, m, d + 12, 15, 0),
                        description: 'Here description for events',
                        allDay: false,
                        color: '#61c261',
                        textColor: '#fff'
                    }, {
                        title: 'Lunch',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false
                    }, {
                        title: 'Birthday Party',
                        start: new Date(y, m, d + 1, 19, 0),
                        end: new Date(y, m, d + 1, 22, 30),
                        allDay: false,
                        color: '#c6707e',
                        textColor: '#51262d'
                    }, {
                        title: 'Click for Google',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        color: '#028fdf',
                        textColor: '#fff',
                        url: 'http://google.com/'
                    }],
                eventColor: '#9dbdcd'
            })
        },
        // new calendar
        calBaseStriped: function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calendar = $('#calendarS').fullCalendar({
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
                dayNamesShort: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sab', 'Dom'],
//              buttonText: {
//                    prev: '&nbsp;&#9668;&nbsp;',
//                    next: '&nbsp;&#9658;&nbsp;',
//                    prevYear: '&nbsp;&lt;&lt;&nbsp;',
//                    nextYear: '&nbsp;&gt;&gt;&nbsp;',
//                    today: 'hoy',
//                    month: 'mes',
//                    week: 'semana',
//                    day: 'dia'
//                },
                titleFormat: {
                    month: 'MMMM yyyy',
                    week: "d [ yyyy]{ '&#8212;'[ MMM] d MMM yyyy}",
                    day: 'dddd, d MMM, yyyy'
                },
                columnFormat: {
                    month: 'ddd',
                    week: 'ddd d/M',
                    day: 'dddd d/M'
                },
                allDayText: 'dia todo',
                axisFormat: 'H:mm',
                timeFormat: {
                    '': 'H(:mm)',
                    agenda: 'H:mm{ - H:mm}'
                },
                header: {
                    left: 'title,today',
                    center: '',
                    right: 'prev,month,agendaWeek,agendaDay,next'
                },
                buttonText: {
                    prev: '<i class="fontello-icon-left-open-1"></i>',
                    next: '<i class="fontello-icon-right-open-1"></i>',
                    prevYear: '&nbsp;&lt;&lt;&nbsp;',
                    nextYear: '&nbsp;&gt;&gt;&nbsp;',
                    today: ' Hoy <i class="fontello-icon-target-2 f-14"></i>'
                },
                aspectRatio: 2,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent', {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                                );
                    }
                    calendar.fullCalendar('unselect');
                },
                editable: true,
                theme: false,
                events: [
                <?php foreach($reservas as $r): ?>
                    {
                        title: '<?php echo $r['Tipoevento']['nombre']; ?>',
                        start: '<?php echo $r['Reserva']['fecha']; ?> <?php echo $r['Reserva']['hora']; ?>',
                        allDay: false,
                        color: '#61c261',
                        textColor: '#fff'
                    },
                <?php endforeach; ?>    
                ],
                eventColor: '#9dbdcd'
            })
        }
    };
</script>
<div id="main-content" class="main-content container-fluid">    
    <?php
    echo $this->
            element('sidebar/reservas');
    ?>
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3>
                    <i class="aweso-icon-table opaci35">
                    </i>
                    Listado de Resrvas
                    <small>
                        reservas
                    </small>
                </h3>              
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- contenedor del calendario -->                    
                    <div class="row-fluid">                        
                        <div class="span7">
                            <div id="calendarS" class="well well-nice well-impressed fc-striped"> </div>
                        </div>
                        
                        <div class="span5">
                            <!--contenedor de la tabla-->                    
                    <div class="widget widget-simple widget-table">
                        <table id="exampleDTA" class="table boo-table table-striped table-hover dataTable">
                            <caption>
                                Reservas                                
                            </caption>
                            <thead>
                            <th scope="col">
                                ID
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Cliente
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Evento
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Personas
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Fecha
                                <span class="column-sorter">
                                </span>
                            </th>
                            <th scope="col">
                                Acciones
                                <span class="column-sorter">
                                </span>
                            </th>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                <?php foreach ($reservas as $r): ?>
                                    <?php $id = $r['Reserva']['id']; ?>
                                    <tr>
                                        <td>
                                            <?php echo $i=1;$i++; ?>
                                        </td>
                                        <td>
                                            <?php echo $r['Cliente']['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $r['Tipoevento']['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $r['Reserva']['cantidad_personas']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $fecha = $r['Reserva']['fecha'];
                                            echo $this->Utilidades->fechahoraes($fecha);
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $this->Html->image("edit.png", array("title" => "Salida Almacen", 'url' => array('action' => 'edit', $id)));
                                            ?>
                                            <?php
                                            echo $this->Html->image("elim.png", array("title" => "Salida Almacen", 'url' => array('action' => 'delete', $id)));
                                            ?>
                                            <?php
                                            echo $this->Html->image("edit.png", array("title" => "Ver", 'url' => array('action' => 'ver', $id)));
                                            ?>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                        </div>
                        
                    </div>
                    <!-- fin del contenedor del calendario-->
                    
                </div>
            </div>
        </section>
    </div>
</div>
<?php
//echo $this->Html->script('demo/demo-fullcalendar'); ?>