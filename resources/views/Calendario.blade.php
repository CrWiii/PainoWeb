<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/fullcalendar.min.js'></script>
<script src='fullcalendar/locale-all.js'></script>
<script src="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
  body {
  font-family: Arial, Helvetica, sans-serif;
}

table {
  font-size: 1em;
}

.ui-draggable, .ui-droppable {
  background-position: top;
}
</style>

<!--<script>
        $(document).ready(function() {
            var currentLangCode = 'es';//cambiar el idioma al español
 
            $('#calendar').fullCalendar({
                eventClick: function(calEvent, jsEvent, view) {
 
                    $(this).css('background', 'red');
                    //al evento click; al hacer clic sobre un evento cambiara de background
                    //a color rojo y nos enviara a los datos generales del evento seleccionado
                },
 
                header: {
                    left: 'prev,next today myCustomButton',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
 
                lang:currentLangCode,
                editable: true,
                eventLimit: true,
                events:{
                    //para obtener los resultados del controlador y mostrarlos en el calendario
                    //basta con hacer referencia a la url que nos da dicho resultado, en el ejemplo
                    //en la propiedad url de events ponemos el enlace
                    //y listo eso es todo ya el plugin se encargara de acomodar los eventos
                    //segun la fecha.
                    url: "{{URL::to('/api')}}"
                }
            });
 
        });
    </script>-->
<script>

  $(document).ready(function() {
    var initialLocaleCode = 'en';


    $('#calendar').fullCalendar({
      locale: 'es',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
      },
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      businessHours: true,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      //navLinks: true, // can click day/week names to navigate views
      /*selectable: true,
      selectHelper: true,
      select: function(start, end) {
        var title = prompt('cita:');
        var name = prompt('Nombre:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
        }
        $('#calendar').fullCalendar('unselect');
      },*/
      editable: true,
      events: {url:'{{URL::to('/api')}}'} 
/*
      [
        {
          title: 'Julia Luisa Guerra Pesantes',
          start: '2017-01-03T10:00:00',
          end: '2017-01-03T10:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Sandra de Oliveira',
          start: '2017-01-03T11:00:00',
          end: '2017-01-03T11:45:00',
          constraint: ''
        },
        {
          title: 'Julia Valverde Naranjo',
          start: '2017-01-03T12:00:00',
          end: '2017-01-03T12:45:00',
          constraint: 'businessHours'

        },
        {
          title: 'Doris Julca León',
          start: '2017-01-03T13:00:00',
          end: '2017-01-03T13:45:00',
          constraint: 'businessHours'

        },
        {
          title: 'Gonzalo Cabello Solis',
          start: '2017-01-04T11:00:00',
          end: '2017-01-04T11:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Francisco Maltre Villas',
          start: '2017-01-04T12:30:00',
          end: '2017-01-04T13:15:00',
          constraint: 'businessHours'
        },
        {
          title: 'David Bolton',
          start: '2017-01-04T15:30:00',
          end: '2017-01-04T16:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Ursula Benavides Pinillos',
          start: '2017-01-04T16:00:00',
          end: '2017-01-04T16:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Margaretha de Boer',
          start: '2017-01-05T10:00:00',
          end: '2017-01-05T10:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Margaretha de Boer',
          start: '2017-01-05T10:00:00',
          end: '2017-01-05T10:45:00',
          constraint: 'businessHours'
        }
        ,
        {
          title: 'Margaretha de Boer',
          start: '2017-01-05T10:00:00',
          end: '2017-01-05T10:45:00',
          constraint: 'businessHours'
        },

        {
          title: 'Julia Luisa Guerra Pesantes',
          start: '2017-02-03T10:00:00',
          end: '2017-02-03T10:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Sandra de Oliveira',
          start: '2017-02-03T11:00:00',
          end: '2017-02-03T11:45:00',
          constraint: ''
        },
        {
          title: 'Julia Valverde Naranjo',
          start: '2017-02-03T12:00:00',
          end: '2017-02-03T12:45:00',
          constraint: 'businessHours'

        },
        {
          title: 'Doris Julca León',
          start: '2017-02-03T13:00:00',
          end: '2017-02-03T13:45:00',
          constraint: 'businessHours'

        },
        {
          title: 'Gonzalo Cabello Solis',
          start: '2017-02-04T11:00:00',
          end: '2017-02-04T11:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Francisco Maltre Villas',
          start: '2017-02-04T12:30:00',
          end: '2017-02-04T13:15:00',
          constraint: 'businessHours'
        },
        {
          title: 'David Bolton',
          start: '2017-02-04T15:30:00',
          end: '2017-02-04T16:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Ursula Benavides Pinillos',
          start: '2017-02-04T16:00:00',
          end: '2017-02-04T16:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Margaretha de Boer',
          start: '2017-02-05T10:00:00',
          end: '2017-02-05T10:45:00',
          constraint: 'businessHours'
        },
        {
          title: 'Margaretha de Boer',
          start: '2017-02-05T10:00:00',
          end: '2017-02-05T10:45:00',
          constraint: 'businessHours'
        }
        ,
        {
          title: 'Margaretha de Boer',
          start: '2017-02-05T10:00:00',
          end: '2017-02-05T10:45:00',
          constraint: 'businessHours'
        }

      ]*/
    });

    // build the locale selector's options
    $.each($.fullCalendar.locales, function(localeCode) {
      $('#locale-selector').append(
        $('<option/>')
          .attr('value', localeCode)
          .prop('selected', localeCode == initialLocaleCode)
          .text(localeCode)
      );
    });

    // when the selected option changes, dynamically change the calendar option
    $('#locale-selector').on('change', function() {
      if (this.value) {
        $('#calendar').fullCalendar('option', 'locale', this.value);
      }
    });
  });


//fc-day fc-widget-content fc-tue fc-other-month fc-past

  $( function() {
    var dialog, form,
 
      // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
      emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
      name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );
 
      valid = valid && checkLength( name, "username", 3, 16 );
      valid = valid && checkLength( email, "email", 6, 80 );
      valid = valid && checkLength( password, "password", 5, 16 );
 
      valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
      valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
      valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
 
      if ( valid ) {
        $( "#users tbody" ).append( "<tr>" +
          "<td>" + name.val() + "</td>" +
          "<td>" + email.val() + "</td>" +
          "<td>" + password.val() + "</td>" +
        "</tr>" );
        dialog.dialog( "close" );
      }
      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 400,
      width: 350,
      modal: true,
      buttons: {
        "Create an account": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $( "#create-user" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
  } );




  $(document).ready(function() {
    $myCalendar = $('#myCalendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: ''
        },
        theme: true,
        selectable: true,
        selectHelper: true,
        height: 500,
        dayClick: function(date, allDay, jsEvent, view) {
    var now = new Date();
    if (date.setHours(0,0,0,0) < now.setHours(0,0,0,0)){
        alert('test');
    }
    else{
         //do something
    }
},
        select: function(start, end, allDay) {
            $('#eventStart').datepicker("setDate", new Date(start));
            $('#eventEnd').datepicker("setDate", new Date(end));
            $('#calEventDialog').dialog('open');
        },
        eventClick: function(calEvent, jsEvent, view) {
            $('#eventStart').datepicker("setDate", new Date(calEvent.start));
            $('#eventEnd').datepicker("setDate", new Date(calEvent.end));
            $('#calEventDialog #eventTitle').val(calEvent.title);
            //                    alert(calEvent.className);
            //                alert(calEvent.className=="gbcs-halfday-event"?"1":"2");
            //                    $('#allday[value="' + calEvent.className=="gbcs-halfday-event"?"1":"2" + '"]').prop('checked', true);
            $('#calEventDialog #allday').val([calEvent.className == "gbcs-halfday-event" ? "1" : "2"]).prop('checked', true);
            $("#calEventDialog").dialog("option", "buttons", [
                {
                text: "Save",
                click: function() {
                    $(this).dialog("close");
                }},
            {
                text: "Delete",
                click: function() {
                    $(this).dialog("close");
                }},
            {
                text: "Cancel",
                click: function() {
                    $(this).dialog("close");
                }}
            ]);
            $("#calEventDialog").dialog("option", "title", "Edit Event");
            $('#calEventDialog').dialog('open');
        },
        editable: true
    });
    
    var title = $('#eventTitle');
    var start = $('#eventStart');
    var end = $('#eventEnd');
    var eventClass, color;
    $('#calEventDialog').dialog({
        resizable: false,
        autoOpen: false,
        title: 'Add Event',
        width: 400,
        buttons: {
            Save: function() {
                if ($('input:radio[name=allday]:checked').val() == "1") {
                    eventClass = "gbcs-halfday-event";
                    color = "#9E6320";
                    end.val(start.val());
                }
                else {
                    eventClass = "gbcs-allday-event";
                    color = "#875DA8";
                }
                if (title.val() !== '') {
                    $myCalendar.fullCalendar('renderEvent', {
                        title: title.val(),
                        start: start.val(),
                        end: end.val(),
                        allDay: true,
                        className: eventClass,
                        color: color
                    }, true // make the event "stick"
                    );
                }
                $myCalendar.fullCalendar('unselect');
                $(this).dialog('close');
            },
            Cancel: function() {
                $(this).dialog('close');
            }
        }
    });
});

</script>
<style>

  body {
    margin: 0;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
  }

  #calendar {
    max-width: 900px;
    margin: 10px auto;
    padding: 0 10px;
  }

</style>
</head>
<body>

  <!--  <div id='top'>

    Locales:
    <select id='locale-selector'></select>

  </div>-->
  
<!--
<div id="calEventDialog">
    <form>
        <fieldset>
        <label for="eventTitle">Title</label>
        <input type="text" name="eventTitle" id="eventTitle" /><br>
        <label for="eventStart">Start Date</label>
        <input type="text" name="eventStart" id="eventStart" /><br>
        <label for="eventEnd">End Date</label>
        <input type="text" name="eventEnd" id="eventEnd" /><br>
        <input type="radio" id="allday" name="allday" value="1">
        Half Day
        <input type="radio" id="allday" name="allday" value="2">
        All Day
        </fieldset>
    </form>
</div>
-->
<!--<div style="border:solid 2px red;">-->
       <div id='calendar'></div>
<!--</div>-->
</body>
</html>
