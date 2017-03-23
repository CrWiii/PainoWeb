<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href="{{url('fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
<link href="{{url('fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print' />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="{{url('fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{url('fullcalendar/lib/jquery.min.js')}}"></script>
<script src="{{url('fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{url('fullcalendar/locale-all.js')}}"></script>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.es.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css" />-->
<!--<script src="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<style>
  body {margin:0;padding:0;font-family:"Lucida Grande",Helvetica,Arial,Verdana,sans-serif;font-size:14px;}
  #top {background:#eee;border-bottom:1px solid#ddd;padding:0 10px;line-height:40px;font-size:12px;}
  #calendar {max-width:900px;margin:10px auto;padding:0 10px;}
</style>
<script>
  $(document).ready(function(){
    var sh;
    var eh;
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
      defaultView: 'agendaWeek',
      buttonIcons: true,
      weekNumbers: true,
      //hiddenDays: [0,1,5,6],
      navLinks: true,
      businessHours: true,
      editable: true,
      eventLimit: true,
      editable: true,
      selectable: true,

      businessHours: {
        dow: [ 2, 3, 4 ],
        start: '10:00',
        end: '17:00',
      },
      select: function(start, end, allDay) {
        if (start.format("ddd") !== "sáb." && start.format("ddd") !== "dom." && start.format("ddd") !== "vie." && start.format("ddd") !== "lun."){
          if (start.format("HH") < 10 || start.format("HH") > 17) {
            alert("No estamos atentiendo en el horario seleccionado, por favor seleccione entre las horas 10:00AM to 5:00PM");
            }
            else if (end.format("HH") > 17) {
              alert("No estamos atentiendo en el horario seleccionado, por favor seleccione entre las horas 10:00AM to 5:00PM");
            }
            else if (end.format("HH") == 17 && end.format("mm") > 00) {
              alert("No estamos atentiendo en el horario seleccionado, por favor seleccione entre las horas 10:00AM to 5:00PM");
            }
            else {
              starttime = moment(start, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
              endtime = moment(end, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
              var mywhens = starttime;
              var mywhene = endtime;
              $('#createEventModal #apptStartTime').val(start);
              $('#createEventModal #apptEndTime').val(end);
              $('#createEventModal #apptAllDay').val(allDay);
              $('#createEventModal #whens').text(mywhens);
              $('#createEventModal #whene').text(mywhene);
              $('#createEventModal #whenss').val(mywhens);
              $('#createEventModal #whenee').val(mywhene);
              $('#fullname, #dni, #email, #phone, #description').val('');
              $('#createEventModal').modal();
            }
          }else{
            alert("Lo sentimos, solo agendamos citas los dias Martes, Miércoles y Jueves");
          }
       },
      events: {url:'{{URL::to('/api')}}'},
      eventClick:  function(event, jsEvent, view){
        ss = moment(event.start, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
        es = moment(event.end, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
        console.log(event);
                    $('#modalTitle').html(event.title);
                    //$('#modalBody #ff').html(event.description);
                    $('#modalBody #Paciente').html(event.title);
                    $('#modalBody #DNI').html(event.dni);
                    $('#modalBody #Correo').html(event.mail);
                    $('#modalBody #Telefono').html(event.place);
                    $('#modalBody #Comentarios').html(event.description);
                    $('#modalBody #sh').html(ss);
                    $('#modalBody #eh').html(es);
                    $('#eventUrl').attr('href',event.url);
                    $('#eventid').attr('value',event.id);
                    //$('#statusDate').attr('value',event.state);
                    if(event.state=='PROGRAMADO'){$('#Aprobar').hide();}else{$('#Aprobar').show();}
                    $('#viewDateDetails').modal();
                    return false;
      },
      eventDrop: function(event, delta, revertFunc){
         //var title = event.title;
         //var start = event.start.format();
         var id = event.id;
         var start = moment(event.start, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
         var end = moment(event.end, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');//event.end.format();//(event.end == null) ? start : event.end.format();
         $.ajax({
            url: 'updateDate',
            data: '&start='+start+'&end='+end+'&id='+id,
            type: 'GET',
            success: function(response){
              /*if(response.status != 'success')
              revertFunc();*/
              $('#calendar').fullCalendar('refetchEvents');
            },
            error: function(e){
              /*revertFunc();
              alert('Error processing your request: '+e.responseText);*/
            }
            });
      },
      eventResize: function(event, delta, revertFunc){
        var id = event.id;
        var start = moment(event.start, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
        var end = moment(event.end, 'DD-MM-YYYY HH:mm:ss').format('DD-MM-YYYY HH:mm:ss');
        $.ajax({
            url: 'updateDate',
            data: '&start='+start+'&end='+end+'&id='+id,
            type: 'GET',
            success: function(response){
              /*if(response.status != 'success')
              revertFunc();*/
              $('#calendar').fullCalendar('refetchEvents');
            },
            error: function(e){
            }
            });
      },
      eventReceive: function(event){
        var title = event.title;
        var start = event.start.format("YYYY-MM-DD[T]HH:MM:SS");
        $.ajax({
          url: 'api',
          //data: 'type=new&title='+title+'&startdate='+start+'&zone='+zone,
          type: 'get',
          dataType: 'json',
          success: function(response){
            event.id = response.eventid;
            $('#calendar').fullCalendar('updateEvent',event);
            $('#calendar').fullCalendar('refetchEvents');
          },
          error: function(e){
            console.log(e.responseText);
          }
        });
          $('#calendar').fullCalendar('updateEvent',event);
          $('#calendar').fullCalendar('refetchEvents');
      }
    });
    $('#locale-selector').on('change', function() {
      if (this.value) {
        $('#calendar').fullCalendar('option', 'locale', this.value);
      }
    });
  });
$(document).on('click', '#saveDate', function(){
  var fullname = $('#fullname').val();
  var dni = $('#dni').val();
  var email = $('#email').val();
  var phone = $('#phone').val();
  var astrt = $('#whenss').val();
  var aendt = $('#whenee').val();
  var description = $('#description').val();
  $("#createEventModal").modal('hide');
  $.ajax({
    url: '/registerDate',
    data: '&fullname='+fullname+'&dni='+dni+'&email='+email+'&phone='+phone+'&astrt='+astrt+'&aendt='+aendt+'&description='+description,
    type: 'get',
    success: function(response){
      $('#AgenDate').modal();
      $('#calendar').fullCalendar('refetchEvents');
    },
    error: function(e){}
  });
 });


$(document).on('click', '#Aprobar', function(){
  $('#modalApprove').modal();
});

$(document).on('click','#AprobarBtn',function(){
  var eventid = $('#eventid').val();
  $.ajax({
    url: 'approveDate',
    data: '&eventid='+eventid,
    type: 'get',
    success: function(response){
      $('#modalApprove').modal('hide');
      $('#viewDateDetails').modal('hide');
      $('#calendar').fullCalendar('refetchEvents');
    }
  });
});



$eventid = '';
$(document).on('click', '#removeEvent', function(){
  
  $('#modalRemove').modal();
});
$(document).on('click', '#removeBtn', function(){
  var eventid = $('#eventid').val();
  $.ajax({
    url: 'removeDate',
    data: '&eventid='+eventid,
    type: 'get',
    success: function(response){
      $('#modalRemove').modal('hide');
      $('#viewDateDetails').modal('hide');
      $('#calendar').fullCalendar('refetchEvents');
    }
  });
});
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
                <div id="modalBody" class="modal-body">
                  <label>Paciente:</label> <p id="Paciente"></p>
                  <label>DNI:</label> <p id="DNI"></p>
                  <label>Correo:</label> <p id="Correo"></p>
                  <label>Teléfono:</label> <p id="Telefono"></p>
                  <label>Comentarios:</label> <p id="Comentarios"></p>
                  <label>Fecha y Hora Inicio:</label> <p id="sh"></p>
                  <label>Fecha y Hora Fin:</label> <p id="eh"></p>
                  <input type="hidden" value="" id="eventid">
                  <input type="hidden" value="" id="statusDate">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="Aprobar" type="button">Aprobar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" io="Close">Close</button>
                    <button type="button" class="btn btn-default" id="removeEvent">Eliminar</button>
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
          <form>
            <div class="control-group">
              <label class="control-label" for="inputPatient">Paciente:</label>
              <div class="controls">
                <input class="form-control" type="text" name="fullname" id="fullname">
                <input type="hidden" id="apptStartTime"/>
                <input type="hidden" id="apptEndTime"/>
                <input type="hidden" id="apptAllDay" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPatient">DNI:</label>
              <div class="controls">
                  <input class="form-control" type="text" name="dni" id="dni">
              </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPatient">Correo:</label>
                <div class="controls">
                    <input class="form-control" type="text" name="email" id="email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPatient">Teléfono:</label>
                <div class="controls">
                    <input class="form-control" type="text" name="phone" id="phone">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPatient">Comentarios:</label>
                <div class="controls">
                    <textarea class="form-control" name="description" id="description" rows="3" cols="50"> </textarea> 
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="when">Fecha y Hora Inicio:</label> 
                  <div class="controls controls-row" id="whens">
                  </div>
                  <input type="hidden" id="whenss" />
                <label class="control-label" for="when">Fecha y Hora Fin:</label>   
                  <div class="controls controls-row" id="whene">
                  </div>
                  <input type="hidden" id="whenee" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <button class="btn btn-primary" id="saveDate" type="button">Guardar</button>
        </div>
    </div>     
  </div>
</div>

<div class="modal fade" id="modalRemove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
       <h4>¿Está seguro que desea eliminar la cita?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="removeBtn">Remove</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalApprove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
       <h4>¿Está seguro que desea Aprobar la cita?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="AprobarBtn">Aprobar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AgenDate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
       <h4>Estamos verificando tu cita. En breves momentos nos comunicaremos con usted para confirmar la disponibilidad.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>