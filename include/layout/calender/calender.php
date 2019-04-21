<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'googleCalendar', 'timeGrid', 'bootstrap' ],
    defaultView: 'timeGridWeek',
    themeSystem: 'bootstrap',
    header: {
      left: 'prev',
      center: '',
      right: 'next'
    },
    googleCalendarApiKey: 'AIzaSyDopbC1bLqWbKCJqANeUjvxD3uFzx74K9Y',
    events: {
      googleCalendarId: 'o98c40q376vvqv3v63khqqakas@group.calendar.google.com',
      className: 'gcal-event',
    }
  });

  calendar.render();
});
</script>
<div id='calendar'></div>
