$('#insert_slider_image_form').submit(function(e){
    e.preventDefault();
    $('#insert_slider_image_buuton').addClass('disabled');
    $('#insert_slider_image_buuton').html('INSERTING......');
    $.ajax({
        type : 'POST',
        url : 'insert-main-slider',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#insert_slider_image_buuton').removeClass('disabled');
            $('#insert_slider_image_buuton').html('INSERT SLIDER IMAGE');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Slider Inserted Successfully',
                showConfirmButton: true,
            }).then(()=>{
                $('#insert_slider_image_form').trigger('reset');
            });
        },
        error : (err)=>{
            $('#insert_slider_image_buuton').removeClass('disabled');
            $('#insert_slider_image_buuton').html('INSERT SLIDER IMAGE');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        }
    });
});

$(document).on("click","#delete_button",function(){
    var id = $(this).data('delete');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success mt-2',
        cancelButtonClass: 'btn btn-danger ml-2 mt-2',
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                type : 'GET',
                url : 'delete-main-slider/'+id,
                dataType: 'JSON',
                success : function(data){
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Content deleted successfully',
                        showConfirmButton: true,
                    }).then(()=>{
                        location.reload();
                    })
                },
                error : function(err){
                    Swal.fire({
                        type: 'error',
                        title: '',
                        text: err.responseJSON.message,
                        showConfirmButton: true,
                    }).then(()=>{
                        location.reload();
                    })
                }
            })
        }else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            Swal.fire({
            title: 'Cancelled',
            text: 'Delete request cancelled',
            type: 'error'
            })
        }
    })
    
});