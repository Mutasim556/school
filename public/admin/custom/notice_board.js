

$('#notice_insert_form').submit(function(e){
    e.preventDefault();
    console.log('hello');
    $.ajax({
        type : 'POST',
        url : 'notice-insert',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Notice uploaded success',
                showConfirmButton: false,
                timer:1500,
            }).then(()=>{
                $('#notice_insert_form').trigger('reset');
            })
        },
        error : function(err){
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            })
        }
    })
});
$('#notice_search_form').submit(function(e){
    e.preventDefault();
    $('#notice_search_button').addClass('disabled');
    $('#notice_search_button').html('Searching &nbsp; <i class="mdi mdi-rotate-right mdi-spin"></i>');
    $('#notice_table').html('<h5 class="text-center">Geting data .........<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> </h5>');
    $.ajax({
        type : 'POST',
        url : 'notice-search',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : (data)=>{
            $('#notice_search_button').removeClass('disabled');
            $('#notice_search_button').html('Search');
            if(data.length>0){
                
                $('#notice_table').css('display','block');
                $('#notice_table').empty();
                $('#notice_table').append('<table class="table" ><thead><tr class="border-bottom-primary"><th scope="col">Id</th><th scope="col" style="text-align:center">Notice</th><th scope="col" width="25%">Status</th><th scope="col">Action</th></tr></thead><tbody id="notice_table_body"></tbody></table>');
                $('#notice_table_body').empty();
                $.each(data,function(key,value){
                    let checkbox ='checked';
                    if(value.notice_status=='Inactive'){
                        checkbox ='';
                    }
                    $('#notice_table_body').append('<tr id="dtrides-'+value.notice_id+'" class="border-bottom-dark"><td>'+value.notice_id+'</td><td><a target="__blank" href="'+value.notice_file+'">'+value.notice_title+'</a></td><td id="dtdes'+value.notice_id+'">'+value.notice_status+'&nbsp;&nbsp; <input '+checkbox+' id="change_notice_status" type="checkbox" data-des-status="'+value.notice_id+'" data-toggle="switchery-notice" data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" /></td><td><button data-delete="'+value.notice_id+'" id="notice_delete_button" class="btn btn-danger btn-square py-1 px-2"><i class="fa fa-trash"></i></button></td></tr>');
                });
                $('[data-toggle="switchery-notice"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            }else{
                $('#notice_table').empty();
                $('#notice_table').html('<h5 class="text-center">No Data Found</h5>');
            }      
            
        },
        error : (err)=>{
            $('#notice_search_button').removeClass('disabled');
            $('#notice_search_button').html('Search');
            $('#notice_table').empty();
            $('#notice_table').html('<h5 class="text-center">Server Error</h5>');
        }
    });
});

$(document).on("change","#change_notice_status",function(){
    var id = $(this).data('des-status');
    var tdid = $(this).closest('td').attr('id');
    var prev = document.getElementById(tdid).innerHTML;
    $('#'+tdid).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>')
    $.ajax({
        type : 'GET',
        url : 'notice-status-update/'+id,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(value){
            if(value.notice_status=='Active'){
                $('#'+tdid).empty();
                document.getElementById(tdid).innerHTML=value.notice_status+' &nbsp;&nbsp; <input checked id="change_notice_status" type="checkbox" data-des-status="'+value.notice_id+'" data-toggle="switchery-notice" data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" />' ;
            }else{
                document.getElementById(tdid).innerHTML=value.notice_status+' &nbsp;&nbsp; <input id="change_notice_status" type="checkbox" data-des-status="'+value.notice_id+'" data-toggle="switchery-notice" data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" />' 
            }

            $('[data-des-status="'+id+'"]').each(function (idx, obj) {
                new Switchery($(this)[0], $(this).data());
            });  
            
        },
        error : function(err){
            document.getElementById(tdid).innerHTML=prev;
            Swal.fire({
                type: 'error',
                title: '',
                text: 'Something went wrong !',
                showConfirmButton: true,
            });
        }
    });
});

$(document).on("click","#notice_delete_button",function(){
    var id = $(this).data('delete');
    var tdid = $(this).closest('tr').attr('id');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success btn-square mx-3 mt-2',
        cancelButtonClass: 'btn btn-danger btn-square mx-3 mt-2',
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                type : 'GET',
                url : 'notice-delete/'+id,
                dataType: 'JSON',
                success : function(data){
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Notice deleted successfully',
                        showConfirmButton: true,
                    }).then(()=>{
                        $('#'+tdid).hide();
                        if(data.length==0){
                            $('#notice_search_button').click();
                        }
                    })
                },
                error : function(err){
                    Swal.fire({
                        type: 'error',
                        title: '',
                        text: err.responseJSON.message,
                        showConfirmButton: true,
                    }).then(()=>{
                        $('#notice_search_button').click();
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