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
                        title: 'Info',
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
                        title: 'Info',
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

function getRoleData(id){
    var user_id = $('#user_id').val(id);
    var role_id = $('.get-roll-data'+id).data('id');
}
