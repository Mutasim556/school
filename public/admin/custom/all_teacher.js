$('#teacher_division').change(function(){
    $.ajax({
        type : 'get',
        url : 'get-district/'+$(this).val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#teacher_district').empty();
            $('#teacher_district').append('<option value="">Please Select</option>');
            $.each(data,function(key,value){
                $('#teacher_district').append('<option value="'+value.id+'">'+value.bn_name+'</option>')
            });
        },
        error : function(err){

        }
    });
});

$('#teacher_district').change(function(){
    $.ajax({
        type : 'get',
        url : 'get-upazila/'+$(this).val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#teacher_upazila').empty();
            $('#teacher_upazila').append('<option value="">Please Select</option>');
            $.each(data,function(key,value){
                $('#teacher_upazila').append('<option value="'+value.id+'">'+value.bn_name+'</option>')
            });
        },
        error : function(err){

        }
    });
});
$('#edit_teacher_form #teacher_division').change(function(){
    $.ajax({
        type : 'get',
        url : 'get-district/'+$(this).val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#edit_teacher_form #teacher_district').empty();
            $('#edit_teacher_form #teacher_district').append('<option value="">Please Select</option>');
            $.each(data,function(key,value){
                $('#edit_teacher_form #teacher_district').append('<option value="'+value.id+'">'+value.bn_name+'</option>')
            });
        },
        error : function(err){

        }
    });
});

$('#edit_teacher_form #teacher_district').change(function(){
    $.ajax({
        type : 'get',
        url : 'get-upazila/'+$(this).val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#edit_teacher_form #teacher_upazila').empty();
            $('#edit_teacher_form #teacher_upazila').append('<option value="">Please Select</option>');
            $.each(data,function(key,value){
                $('#edit_teacher_form #teacher_upazila').append('<option value="'+value.id+'">'+value.bn_name+'</option>')
            });
        },
        error : function(err){

        }
    });
});
$('#add_teacher_form').submit(function(e){
    $('#teacher_insert_button').addClass('disabled');
    $('#teacher_insert_button').html('Creating ......');
    e.preventDefault();
    $.ajax({
        type : 'POST',
        url : 'teacher-insert',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#teacher_insert_button').removeClass('disabled');
            $('#teacher_insert_button').html('Add Teacher');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Teacher added successfull',
                showConfirmButton: false,
                timer:1500,
            }).then(()=>{
                $('#add_teacher_form').trigger('reset');
                $('#modal_close').click();
            })
        },
        error : function(err){
            $('#teacher_insert_button').removeClass('disabled');
            $('#teacher_insert_button').html('Add Teacher');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
                
            })
        }
    })
})


$('#search_teacher_form').submit(function(e){
    e.preventDefault();
    $('#search_teacher_button').addClass('disabled');
    $('#search_teacher_button').html('Searching ......');
    $.ajax({
        type : 'POST',
        url : 'search-teacher',
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#search_teacher_button').removeClass('disabled');
            $('#search_teacher_button').html('Search <i class="icofont icofont-job-search"></i>');
            console.log(data);
            $('.ibox-body').empty();
            $('.ibox-body').removeClass('d-none');
            $('.ibox-body').append('<div class="dt-ext table-responsive theme-scrollbar"><table class="display" id="export-button"><thead><tr><th>Name</th></th><th>Image</th><th>Phone</th><th>PDS</th><th>Designation</th><th>Joining Date</th><th>Address</th><th>Others</th><th>Status</th><th>Action</th></thead><tbody id="search_body">');
            $('#search_body').empty();
            $.each(data.teachers,function(key,value){
                let checkbox ='checked';
                let disable ='';
                let subject ='';
                if(value.teacher_status=='Inactive'){
                    checkbox ='';
                }
                if(value.teacher_id==$('#my_id').val()){
                    disable ='disabled';
                }
                if(value.teacher_designation==='প্রধান শিক্ষক'){
                    subject ='';
                }else{
                    subject = '( '+value.teacher_subject+' )';
                }

                $('#search_body').append('<tr id="trid-'+value.teacher_id+'"><td>'+value.teacher_name+'</td><td><img style="height:100px" src='+value.teacher_image+'></td><td>'+value.teacher_phone+'</td><td>'+value.teacher_pdsid+'</td><td>'+value.teacher_designation+subject+'</td><td>'+value.teacher_joining_date+'</td><td>'+value.upazila+','+value.district+','+value.division+'<br>'+value.teacher_address+'</td><td>DOB : '+value.teacher_dob+'<br>Gender : '+value.teacher_gender+'<br> Email : '+value.teacher_email+'<br> Degree : '+value.teacher_degree+'</td><td id="td-'+value.teacher_id+'">'+value.teacher_status+' &nbsp;&nbsp;<input '+disable+' '+checkbox+' id="change_status" type="checkbox" data-myid='+$('#my_id').val()+' data-id="'+value.teacher_id+'" data-toggle="switchery" '+value.teacher_status+' data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" /></td><td><button '+disable+' class="btn btn-primary btn-square py-1 px-2 mt-2" id="edit_button" data-edit="'+value.teacher_id+'" data-bs-toggle="modal" data-bs-target="#exampleModalLongEdit" style="cursor:pointer"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>&nbsp;&nbsp;<button data-delete="'+value.teacher_id+'" id="delete_button" '+disable+' class="btn btn-danger btn-square py-1 px-2 ml-2 mt-2"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
            });
            $('.ibox-body').append('</tbody></table></div>');
            $('[data-toggle="switchery"]').each(function (idx, obj) {
                new Switchery($(this)[0], $(this).data());
            });
            $('#export-button').DataTable( {
                destroy: true, 
                select: true, 
                lengthMenu: [[10, 25, 50,-1], [10, 25, 50,'All']],
                displayLength: 10,
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'pageLength',
                ],
                
        
            });
        },
        error : function(err){
            
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            }).then(()=>{
                $('#search_teacher_button').removeClass('disabled');
                $('#search_teacher_button').html('Search <i class="icofont icofont-job-search"></i>');
            });
        }
    });
})

$(document).on("change","#change_status",function(){
    var id = $(this).data('id');
    var myid = $(this).data('myid');
    var tdid = $(this).closest('td').attr('id');
    var trid = $(this).closest('tr').attr('id');
    var prev = document.getElementById(tdid).innerHTML;
    $('#'+tdid).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>')
    $.ajax({
        type : 'GET',
        url : 'update-teacher-status/'+id,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(value){
            if(value.teacher_status=='Active'){
                if(value.teacher_id==myid){
                    $('#'+tdid).empty();
                    document.getElementById(tdid).innerHTML=value.teacher_status+' &nbsp;&nbsp;<input disabled checked id="change_status" type="checkbox" data-myid='+$('#my_id').val()+' data-id="'+value.teacher_id+'" data-toggle="switchery" '+value.teacher_status+' data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" />' 
                }else{
                    $('#'+tdid).empty();
                    document.getElementById(tdid).innerHTML=value.teacher_status+' &nbsp;&nbsp;<input checked id="change_status" type="checkbox" data-myid='+$('#my_id').val()+' data-id="'+value.teacher_id+'" data-toggle="switchery" '+value.teacher_status+' data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" />' 
                }
                
            }else{
                document.getElementById(tdid).innerHTML=value.teacher_status+' &nbsp;&nbsp;<input id="change_status" type="checkbox" data-myid='+$('#my_id').val()+' data-id="'+value.teacher_id+'" data-toggle="switchery" '+value.teacher_status+' data-secondary-color="#df3554" data-color="#18AD0C" data-size="small" />' 
            }

            $('[data-id="'+id+'"]').each(function (idx, obj) {
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


$(document).on("click","#edit_button",function(){
   
    var id = $(this).data('edit');
     var trid = $(this).closest('tr').attr('id');
    $.ajax({
        type : 'GET',
        url : 'get-teacher-info/'+id,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#edit_teacher_form').trigger('reset');
            $('#edit_teacher_form [name=teacher_name').attr('value',data.teacher_name);
            $('#edit_teacher_form [name=teacher_pdsid').attr('value',data.teacher_pdsid);
            $('#edit_teacher_form [name=pre_teacher_pdsid').attr('value',data.teacher_pdsid);
            $('#edit_teacher_form [name=pre_teacher_phone').attr('value',data.teacher_phone);
            $('#edit_teacher_form [name=pre_teacher_email').attr('value',data.teacher_email);
            $('#edit_teacher_form [name=teacher_id').attr('value',data.teacher_id);
            $('#edit_teacher_form [name=teacher_gender').empty();
            let male = '';
            let female = '';
            if(data.teacher_gender==='পুরুষ'){
                male = 'selected';
                $('#edit_teacher_form [name=teacher_designation]').empty();
                $('#edit_teacher_form [name=teacher_designation]').append('<option value="">Please Select</option><option value="প্রধান শিক্ষক">প্রধান শিক্ষক</option><option value="সহকারী প্রধান শিক্ষক">সহকারী প্রধান শিক্ষক</option><option value="সিনিয়র শিক্ষক">সিনিয়র শিক্ষক</option><option value="সহকারী শিক্ষক">সহকারী শিক্ষক</option>');
                $('#edit_teacher_form [name=teacher_designation]').val(data.teacher_designation);
            }else{
                female = 'selected';
                $('#edit_teacher_form [name=teacher_designation]').empty();
                $('#edit_teacher_form [name=teacher_designation]').append('<option value="">Please Select</option><option value="প্রধান শিক্ষিকা">প্রধান শিক্ষিকা</option><option value="সহকারী প্রধান শিক্ষিকা">সহকারী প্রধান শিক্ষিকা</option><option value="সিনিয়র শিক্ষিকা">সিনিয়র শিক্ষিকা</option><option value="সহকারী শিক্ষিকা">সহকারী শিক্ষিকা</option>');
            }
            $('#edit_teacher_form [name=teacher_gender').append('<option value="" selected disabled>Please Select</option><option value="পুরুষ" '+male+'>পুরুষ</option><option value="মহিলা" '+female+'>মহিলা</option>');
            $('#edit_teacher_form [name=teacher_email').attr('value',data.teacher_email);
            $('#edit_teacher_form [name=teacher_phone').attr('value',data.teacher_phone);
            $('#edit_teacher_form [name=teacher_subject]').val(data.teacher_subject);
            $('#edit_teacher_form [name=teacher_dob]').attr('value',data.teacher_dob);
            $('#edit_teacher_form [name=teacher_joining_date]').attr('value',data.teacher_joining_date);
            $('#edit_teacher_form [name=teacher_division]').val(data.teacher_division);
            $('#edit_teacher_form [name=teacher_district]').empty();
            $('#edit_teacher_form [name=teacher_district]').append('<option value="'+data.district_id+'">'+data.district+'</option>');
            $('#edit_teacher_form [name=teacher_upazila]').empty();
            $('#edit_teacher_form [name=teacher_upazila]').append('<option value="'+data.upazila_id+'">'+data.upazila+'</option>');
            $('#edit_teacher_form [name=teacher_address]').empty();
            $('#edit_teacher_form [name=teacher_address]').append(data.teacher_address);
            $('#edit_teacher_form [name=teacher_degree]').empty();
            $('#edit_teacher_form [name=teacher_degree]').append(data.teacher_degree);
            $('#edit_teacher_form #blah2').attr('src',data.teacher_image);
            // $('#teacher_id').attr('value',data.id);
            // $('#edit_email').attr('value',data.email);
            // $('#trid').attr('value',trid);
        },
        error : function(err){
            Swal.fire({
                type: 'error',
                title: '',
                text: 'Something went wrong !',
                showConfirmButton: true,
            });
        },
    });
})

$('#edit_teacher_form').submit(function(e){
    e.preventDefault();
    $('#edit_teacher_button').addClass('disabled');
    $('#edit_teacher_button').html('Updating ......');
    $.ajax({
        type : 'POST',
        url : 'update-teacher',
        data: new FormData(this),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success : function(data){
            $('#edit_teacher_button').removeClass('disabled');
            $('#edit_teacher_button').html('Update Teacher');
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Teacher details updated successfully',
                showConfirmButton: true,
            }).then(()=>{
                $('#search_teacher_button').click();
                // $('#'+$('#trid').val()).children('td:nth-child(1)').html(data.teacher_name);
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html('<img src="'+data.teacher_image+'">');
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html(data.teacher_phone);
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html(data.teacher_email);
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html(data.teacher_email);
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html(data.teacher_email);
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html(data.teacher_email);
                // $('#'+$('#trid').val()).children('td:nth-child(2)').html(data.teacher_email);
                $('#edit_teacher_form').trigger('reset');
                $('#edit_modal_close').click();
                
                // $(id).children('td:nth-child(3)').html(data.user.phone);
            });
        },
        error : function(err){
            $('#edit_teacher_button').removeClass('disabled');
            $('#edit_teacher_button').html('Update Teacher');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        },
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
        confirmButtonClass: 'btn btn-success btn-square mx-3 mt-2',
        cancelButtonClass: 'btn btn-danger btn-square mx-3 mt-2',
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                type : 'GET',
                url : 'delete-teacher/'+id,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'JSON',
                success : function(data){
                    if(data.message==1){
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'User has been deleted.',
                            type: 'success'
                        }).then(()=>{
                            $('#trid-'+id).css("display", "none");
                        });
                    }else{
                        Swal.fire({
                        title: 'Opps!',
                        text: 'Something went wrong.',
                        type: 'error'
                        })
                    }
                },
                error : function(){
                    Swal.fire({
                    title: 'Opps!',
                    text: 'Something went wrong.',
                    type: 'error'
                    })
                }
            })
            
        } else if(result.dismiss === Swal.DismissReason.cancel){
            Swal.fire({
            title: 'Cancelled',
            text: 'Delete request cancelled'+id,
            type: 'error'
            })
        }
    });
})
