$('#about_school_form').submit(function(e){
    e.preventDefault();
    $('#about_school_button').addClass('disabled');
    $('#about_school_button').html('Updating Informations &nbsp; <i class="mdi mdi-rotate-right mdi-spin"></i>');
    $.ajax({
        type : 'POST',
        url : 'school-introduction-update',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#about_school_button').removeClass(' disabled');
            $('#about_school_button').html('UPDATE INFORMATION');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'School introduction updated successfully',
                showConfirmButton: true,
            })
        },
        error : function(err){
            $('#about_school_button').removeClass(' disabled');
            $('#about_school_button').html('UPDATE INFORMATION');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            })
        }
    });
});

$('#headmaster_speech_form').submit(function(e){
    e.preventDefault();
    $('#headmaster_speech_button').addClass('disabled');
    $('#headmaster_speech_button').html('Updating Informations &nbsp; <i class="mdi mdi-rotate-right mdi-spin"></i>');
    $.ajax({
        type : 'POST',
        url : 'headmaster-speech-update',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#headmaster_speech_button').removeClass(' disabled');
            $('#headmaster_speech_button').html('UPDATE INFORMATION');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'School introduction updated successfully',
                showConfirmButton: true,
            })
        },
        error : function(err){
            $('#headmaster_speech_button').removeClass(' disabled');
            $('#headmaster_speech_button').html('UPDATE INFORMATION');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            })
        }
    });
});

$('#address_school_form').submit(function(e){
    e.preventDefault();
    $('#address_school_button').addClass('disabled');
    $('#address_school_button').html('Updating Informations &nbsp; <i class="mdi mdi-rotate-right mdi-spin"></i>');
    $.ajax({
        type : 'POST',
        url : 'school-address-update',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#address_school_button').removeClass(' disabled');
            $('#address_school_button').html('UPDATE INFORMATION');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'School address and contact updated successfully',
                showConfirmButton: true,
            })
        },
        error : function(err){
            $('#address_school_button').removeClass(' disabled');
            $('#address_school_button').html('UPDATE INFORMATION');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            })
        }
    });
});
