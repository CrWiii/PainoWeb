<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/fullcalendar.min.js'></script>
<script src='fullcalendar/locale-all.js'></script>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.es.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css" />-->
<!--<script src="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
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
<script>

  $(document).ready(function() {

    

    $('#submitButton').on('click', function(e){
    e.preventDefault();

    doSubmit();
  });

  function doSubmit(){
    $("#createEventModal").modal('hide');
    console.log($('#apptStartTime').val());
    console.log($('#apptEndTime').val());
    console.log($('#apptAllDay').val());
    alert("form submitted");
        
    $("#calendar").fullCalendar('renderEvent',
        {
            title: $('#patientName').val(),
            start: new Date($('#apptStartTime').val()),
            end: new Date($('#apptEndTime').val()),
            allDay: ($('#apptAllDay').val() == "true"),
        },
        true);
   }
    var initialLocaleCode = 'en';


    $('#calendar').fullCalendar({
      locale: 'es',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
      },
      buttonIcons: false,
      weekNumbers: true,
      businessHours: true,
      navLinks: true,
      editable: true,
      eventLimit: true,
      editable: true,
        selectable: true,

      select: function(start, end, allDay) {
          //endtime = $.fullCalendar.formatDate(end,'h:mm tt');
          //starttime = $.fullCalendar.formatDate(start,'ddd, MMM d, h:mm tt');
          starttime = moment(start, 'DD-MM-YYYY hh:mm:ss').format('DD-MM-YYYY hh:mm:ss');
          endtime = moment(end, 'DD-MM-YYYY hh:mm:ss').format('DD-MM-YYYY hh:mm:ss');
          
          var mywhen = starttime + ' - ' + endtime;
          $('#createEventModal #apptStartTime').val(start);
          $('#createEventModal #apptEndTime').val(end);
          $('#createEventModal #apptAllDay').val(allDay);
          $('#createEventModal #when').text(mywhen);
          $('#createEventModal').modal();
       },
      events: {url:'{{URL::to('/api')}}'},

      eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#viewDateDetails').modal();
                    return false;
                },


      eventReceive: function(event){
        var title = event.title;
        var start = event.start.format("YYYY-MM-DD[T]HH:MM:SS");
        $.ajax({
          url: '/registerDate',
          data: 'type=new&title='+title+'&startdate='+start+'&zone='+zone,
          type: 'POST',
          dataType: 'json',
          success: function(response){
            event.id = response.eventid;
            $('#calendar').fullCalendar('updateEvent',event);
          },
          error: function(e){
            console.log(e.responseText);
          }
        });
          $('#calendar').fullCalendar('updateEvent',event);
      }


    });

    $('#locale-selector').on('change', function() {
      if (this.value) {
        $('#calendar').fullCalendar('option', 'locale', this.value);
      }
    });

    
  });
 $('#datetimepicker4').datetimepicker();

</script>
</head>
<body>
       <div id='calendar'></div>

       <div id="viewDateDetails" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div id="modalBody" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<a class="btn btn-primary" id="eventUrl" target="_blank">Event Page</a>-->
                </div>
            </div>
          </div>
        </div>


<div class="modal fade" id="createEventModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agendar Cita</h4>
        </div>
        <div class="modal-body">
        <form id="createAppointmentForm" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="inputPatient">Paciente:</label>
            <div class="controls">
                <input class="form-control" type="text" name="patientName" id="patientName" tyle="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]">
                  <input type="hidden" id="apptStartTime"/>
                  <input type="hidden" id="apptEndTime"/>
                  <input type="hidden" id="apptAllDay" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputPatient">DNI:</label>
            <div class="controls">
                <input class="form-control" type="text" name="dni" id="dni" tyle="margin: 0 auto;" >
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputPatient">Correo:</label>
            <div class="controls">
                <input class="form-control" type="text" name="email" id="email" tyle="margin: 0 auto;" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPatient">Teléfono:</label>
            <div class="controls">
                <input class="form-control" type="text" name="phone" id="phone" tyle="margin: 0 auto;" >
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="when">Fecha y Hora Inicio/Fin:</label> 
            <!--https://eonasdan.github.io/bootstrap-datetimepicker/-->
            <div class="controls controls-row" id="when" style="margin-top:5px;">
            </div>
        </div>
    </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button type="submit" class="btn btn-primary" id="submitButton">Guardar</button>
    </div>
      </div>
      
    </div>
  </div>
</body>
</html>
