@if(Auth::check() && Auth::user()->role=='teacher' || Auth::user()->role=='adminManager')
<script>
    var userId = {{ Auth::user()->id }};

    // Enable Pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('ef4fd77f0ef3365b974c', {
        cluster: 'ap2'
    });

    var channel = pusher.subscribe('task.'+userId);
    channel.bind('tasknotice', function(data) {
        //alert(JSON.stringify(data));
        iziToast.show({
            title: 'Task:',
            message: data.message+' <a style="color:blue;" href="'+data.url+'">View Task</a>',
            position: 'bottomRight',
            timeout: 8000,
            color: 'green',
            balloon: true,
            close: true,
            progressBarColor: 'yellow',
        });
    });
</script>
@endif