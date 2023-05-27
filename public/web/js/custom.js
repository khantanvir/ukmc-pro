$(function(){
    $('.user-status-chnage').change(function(){
        var active = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
        var url = $(this).data('action');
            $.post(url,
            {
                user_id: user_id,
                active: active
            },
            function(data, status){
                console.log(data);
                if(data['result']['key']===101){
                    iziToast.show({
                        title: 'Status',
                        message: data['result']['val'],
                        position: 'topRight',
                        timeout: 8000,
                        color: 'red',
                        balloon: true,
                        close: true,
                        progressBarColor: 'yellow',
                    });
                }
                if(data['result']['key']===200){
                    iziToast.show({
                        title: 'Status',
                        message: data['result']['val'],
                        position: 'topRight',
                        timeout: 8000,
                        color: 'green',
                        balloon: true,
                        close: true,
                        progressBarColor: 'yellow',
                    });
                }
                //alert("Data: " + data + "\nStatus: " + status);
            });

    });
});

$(function(){
    $('.company-status-chnage').change(function(){
        var status = $(this).prop('checked') == true ? 1 : 0;
        var company_id = $(this).data('id');
        var url = $(this).data('action');
            $.post(url,
            {
                company_id: company_id,
                status: status
            },
            function(data, status){
                console.log(data);
                if(data['result']['key']===101){
                    iziToast.show({
                        title: 'Status',
                        message: data['result']['val'],
                        position: 'topRight',
                        timeout: 8000,
                        color: 'blue',
                        balloon: true,
                        close: true,
                        progressBarColor: 'yellow',
                    });
                }
                if(data['result']['key']===200){
                    iziToast.show({
                        title: 'Status',
                        message: data['result']['val'],
                        position: 'topRight',
                        timeout: 8000,
                        color: 'blue',
                        balloon: true,
                        close: true,
                        progressBarColor: 'yellow',
                    });

                }
                //alert("Data: " + data + "\nStatus: " + status);
            });

    });
});

function getRoleData(id){
    var user_id = $('#user_id').val(id);
    var role_id = $('.get-roll-data'+id).data('id');
}
function task_status_change(){
    var status = $('.task-status-change').val();
    var task_id = $('.task-status-change').data('id');
    var url = $('.task-status-change').data('action');
        $.post(url,
        {
            task_id: task_id,
            status: status
        },
        function(data, status){
            console.log(data);
            if(data['result']['key']===101){
                iziToast.show({
                    title: 'Status',
                    message: data['result']['val'],
                    position: 'topRight',
                    timeout: 8000,
                    color: 'orange',
                    balloon: true,
                    close: true,
                    progressBarColor: 'yellow',
                });
            }
            if(data['result']['key']===200){
                iziToast.show({
                    title: 'Status',
                    message: data['result']['val'],
                    position: 'topRight',
                    timeout: 8000,
                    color: 'orange',
                    balloon: true,
                    close: true,
                    progressBarColor: 'yellow',
                });

            }
            //alert("Data: " + data + "\nStatus: " + status);
        });
        setTimeout(function () {
            location.reload(true);
        }, 2000);
}
