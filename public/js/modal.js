
$(document).on('click', '#mediumButton', function(event) {
    event.preventDefault();
    let href = $(this).attr('data-attr');
    $.ajax({
        url: href,
        beforeSend: function() {
            $('#loader').show();
        },
        // return the result
        success: function(result) {
            $('#mediumModal').modal("show");
            $('#mediumBody').html(result).show();
        },
        complete: function() {
            $('#loader').hide();
        },
        error: function(jqXHR, testStatus, error) {
            console.log(error);
            alert("Page " + href + " cannot open. Error:" + error);
            $('#loader').hide();
        },
        timeout: 8000
    })
});
$(document).on('click', '#updateColor', function(event) {
    event.preventDefault();
    let href = $(this).attr('data-attr');
    $.ajax({
        url: href,
        beforeSend: function() {
            $('#loader').show();
        },
        // return the result
        success: function(result) {
            $('#updateModal').modal("show");
            $('#updateColorBody').html(result).show();
        },
        complete: function() {
            $('#loader').hide();
        },
        error: function(jqXHR, testStatus, error) {
            console.log(error);
            alert("Page " + href + " cannot open. Error:" + error);
            $('#loader').hide();
        },
        timeout: 8000
    })
});
$(document).on('click', '#smallButton', function(event) {
    event.preventDefault();
    let href = $(this).attr('data-attr');
    $.ajax({
        url: href
        , beforeSend: function() {
            $('#loader').show();
        },
        // return the result
        success: function(result) {
            $('#smallModal').modal("show");
            $('#smallBody').html(result).show();
        }
        , complete: function() {
            $('#loader').hide();
        }
        , error: function(jqXHR, testStatus, error) {
            console.log(error);
            alert("Page " + href + " cannot open. Error:" + error);
            $('#loader').hide();
        }
        , timeout: 8000
    })
});
$(document).on('click', '#addTravel', function(event) {
    event.preventDefault();
    let href = $(this).attr('data-attr');
    $.ajax({
        url: href
        , beforeSend: function() {
            $('#loader').show();
        },
        // return the result
        success: function(result) {
            $('#smallModal').modal("show");
            $('#smallBody').html(result).show();
        }
        , complete: function() {
            $('#loader').hide();
        }
        , error: function(jqXHR, testStatus, error) {
            console.log(error);
            alert("Page " + href + " cannot open. Error:" + error);
            $('#loader').hide();
        }
        , timeout: 8000
    })
});