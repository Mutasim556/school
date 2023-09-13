$('#school_gallery_form').submit(function(e){
    e.preventDefault();
    $('#school_gallery_button').addClass('disabled');
    $('#school_gallery_button').html('INSERTING......');
    $.ajax({
        type : 'POST',
        url : 'school-gallery',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#school_gallery_button').removeClass('disabled');
            $('#school_gallery_button').html('Upload Informations');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Slider Inserted Successfully',
                showConfirmButton: true,
            }).then(()=>{
                $('#school_gallery_form').trigger('reset');
            });
        },
        error : (err)=>{
            $('#school_gallery_button').removeClass('disabled');
            $('#school_gallery_button').html('Upload Informations');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        }
    });
});
