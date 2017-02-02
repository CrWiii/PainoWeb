<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<!--<link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/fullcalendar.min.js'></script>
<script src='fullcalendar/locale-all.js'></script>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>-->


<link href='http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css' rel='stylesheet' media='print' />
<script src='http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js'></script>
<link href='http://cdn.jsdelivr.net/fullcalendar/1.5.4/fullcalendar.css' rel='stylesheet' media='print' />
<script src='http://cdn.jsdelivr.net/fullcalendar/1.5.4/fullcalendar.js'></script>
<link href='http://cdn.jsdelivr.net/fullcalendar/1.5.4/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='http://cdn.jsdelivr.net/fullcalendar/1.5.4/gcal.js'></script>
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
<script type="text/javascript">
	$(document).ready(function() {

      var calendar = $('#calendar').fullCalendar({
      defaultView: 'agendaWeek',
      editable: true,
        selectable: true,
      //header and other values
      select: function(start, end, allDay) {
          endtime = $.fullCalendar.formatDate(end,'h:mm tt');
          starttime = $.fullCalendar.formatDate(start,'ddd, MMM d, h:mm tt');
          var mywhen = starttime + ' - ' + endtime;
          $('#createEventModal #apptStartTime').val(start);
          $('#createEventModal #apptEndTime').val(end);
          $('#createEventModal #apptAllDay').val(allDay);
          $('#createEventModal #when').text(mywhen);
          $('#createEventModal').modal('show');
       }
    });

  $('#submitButton').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
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
});
</script>

<body>
<div id="calendar"></div>

<div id="createEventModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel1">Create Appointment</h3>
    </div>
    <div class="modal-body">
    <form id="createAppointmentForm" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="inputPatient">Patient:</label>
            <div class="controls">
                <input type="text" name="patientName" id="patientName" tyle="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]">
                  <input type="hidden" id="apptStartTime"/>
                  <input type="hidden" id="apptEndTime"/>
                  <input type="hidden" id="apptAllDay" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="when">When:</label>
            <div class="controls controls-row" id="when" style="margin-top:5px;">
            </div>
        </div>
    </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
    </div>
</div>

</body>
</html>