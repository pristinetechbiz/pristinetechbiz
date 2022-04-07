$(function () {
    $('#withdrawalForm').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function (data) {
                console.log(data);
                if (data.success) {
                    $('#withdrawalForm').hide();
                    $('#withdrawalSuccess').show();
                } else {
                    $('#withdrawalForm').hide();
                    $('#withdrawalError').show();
                }
            },
            error: function (data) {
                console.log(data.responseJSON);
                
                // $('#withdrawalForm').hide();
                $('#withdrawalError').show();
                $('#withdrawalError').html(data.responseJSON.message);
            }
        });
    });
 
 });