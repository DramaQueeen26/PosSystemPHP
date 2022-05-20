$(document).ready(function() {

    // AJAX FORM

	$('form').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var response = $('.response');
        var action = form.attr('action');
        var method = form.attr('method');
        var formdata = new FormData(this);
        var loader = $('#global-loader');

        loader.show();
        
        $.ajax({
            type: method,
            url: action,
            data: formdata ? formdata : form.serialize(),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                loader.hide();
                response.html(data);
            },
            error: function (data) {
                loader.hide();
                response.html(data);
            }
        });
        return false;
    });

});