$('#class_six_form [name=section]').change(function(){
    
    $.ajax({
        type : 'get',
        url : 'get-student-number/'+$('#class_six_form [name=class_shift]').val()+'/'+$('#class_six_form [name=class_name]').val()+'/'+$('#class_six_form [name=section]').val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            if(data!=0){
                $('#class_six_form [name=boys]').val(data.boys)
                $('#class_six_form [name=girls]').val(data.girls)
                $('#class_six_form [name=total]').val(data.boys+data.girls)
                $('#class_six_form [name=children]').val(data.children)
                $('#class_six_form [name=children_of_children]').val(data.children_of_children)
                $('#class_six_form [name=otistik]').val(data.otistik)
                $('#class_six_form [name=physically_unfit]').val(data.physically_unfit)
                $('#class_six_form [name=science]').val(data.science)
                $('#class_six_form [name=commerce]').val(data.commerce)
                $('#class_six_form [name=arts]').val(data.arts)
                $('#class_six_form [name=muslim]').val(data.muslim)
                $('#class_six_form [name=hindu]').val(data.hindu)
                $('#class_six_form [name=christian]').val(data.christian)
                $('#class_six_form [name=buddhism]').val(data.buddhism)
            }else{
                $('#class_six_form [name=boys]').val('')
                $('#class_six_form [name=girls]').val('')
                $('#class_six_form [name=total]').val('')
                $('#class_six_form [name=children]').val('')
                $('#class_six_form [name=children_of_children]').val('')
                $('#class_six_form [name=otistik]').val('')
                $('#class_six_form [name=physically_unfit]').val('')
                $('#class_six_form [name=science]').val('')
                $('#class_six_form [name=commerce]').val('')
                $('#class_six_form [name=arts]').val('')
                $('#class_six_form [name=muslim]').val('')
                $('#class_six_form [name=hindu]').val('')
                $('#class_six_form [name=christian]').val('')
                $('#class_six_form [name=buddhism]').val('')
            }
            
        },
        error : function(err){

        }
    });
});

$('#class_six_form').submit(function(e){
    e.preventDefault();
    $('#class_six_form #update_button').addClass('disabled');
    $('#class_six_form #update_button').html('Updating ......');
    $.ajax({
        type : 'POST',
        url : 'update-student-number',
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#class_six_form #update_button').removeClass('disabled');
            $('#class_six_form #update_button').html('UPDATE');
            $('#class_six_form [name=total]').val(data);
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Admin details updated successfully',
                showConfirmButton: true,
            });
        },
        error : function(err){
            $('#class_six_form #update_button').removeClass('disabled');
            $('#class_six_form #update_button').html('UPDATE');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        },
    });
});


// class seven

$('#class_seven_form [name=section]').change(function(){
    
    $.ajax({
        type : 'get',
        url : 'get-student-number/'+$('#class_seven_form [name=class_shift]').val()+'/'+$('#class_seven_form [name=class_name]').val()+'/'+$('#class_seven_form [name=section]').val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            if(data!=0){
                $('#class_seven_form [name=boys]').val(data.boys)
                $('#class_seven_form [name=girls]').val(data.girls)
                $('#class_seven_form [name=total]').val(data.boys+data.girls)
                $('#class_seven_form [name=children]').val(data.children)
                $('#class_seven_form [name=children_of_children]').val(data.children_of_children)
                $('#class_seven_form [name=otistik]').val(data.otistik)
                $('#class_seven_form [name=physically_unfit]').val(data.physically_unfit)
                $('#class_seven_form [name=science]').val(data.science)
                $('#class_seven_form [name=commerce]').val(data.commerce)
                $('#class_seven_form [name=arts]').val(data.arts)
                $('#class_seven_form [name=muslim]').val(data.muslim)
                $('#class_seven_form [name=hindu]').val(data.hindu)
                $('#class_seven_form [name=christian]').val(data.christian)
                $('#class_seven_form [name=buddhism]').val(data.buddhism)
            }else{
                $('#class_seven_form [name=boys]').val('')
                $('#class_seven_form [name=girls]').val('')
                $('#class_seven_form [name=total]').val('')
                $('#class_seven_form [name=children]').val('')
                $('#class_seven_form [name=children_of_children]').val('')
                $('#class_seven_form [name=otistik]').val('')
                $('#class_seven_form [name=physically_unfit]').val('')
                $('#class_seven_form [name=science]').val('')
                $('#class_seven_form [name=commerce]').val('')
                $('#class_seven_form [name=arts]').val('')
                $('#class_seven_form [name=muslim]').val('')
                $('#class_seven_form [name=hindu]').val('')
                $('#class_seven_form [name=christian]').val('')
                $('#class_seven_form [name=buddhism]').val('')
            }
            
        },
        error : function(err){

        }
    });
});

$('#class_seven_form').submit(function(e){
    e.preventDefault();
    $('#class_seven_form #update_button').addClass('disabled');
    $('#class_seven_form #update_button').html('Updating ......');
    $.ajax({
        type : 'POST',
        url : 'update-student-number',
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#class_seven_form #update_button').removeClass('disabled');
            $('#class_seven_form #update_button').html('UPDATE');
            $('#class_seven_form [name=total]').val(data);
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Admin details updated successfully',
                showConfirmButton: true,
            });
        },
        error : function(err){
            $('#class_seven_form #update_button').removeClass('disabled');
            $('#class_seven_form #update_button').html('UPDATE');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        },
    });
});

// class eight
$('#class_eight_form [name=section]').change(function(){
    
    $.ajax({
        type : 'get',
        url : 'get-student-number/'+$('#class_eight_form [name=class_shift]').val()+'/'+$('#class_eight_form [name=class_name]').val()+'/'+$('#class_eight_form [name=section]').val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            if(data!=0){
                $('#class_eight_form [name=boys]').val(data.boys)
                $('#class_eight_form [name=girls]').val(data.girls)
                $('#class_eight_form [name=total]').val(data.boys+data.girls)
                $('#class_eight_form [name=children]').val(data.children)
                $('#class_eight_form [name=children_of_children]').val(data.children_of_children)
                $('#class_eight_form [name=otistik]').val(data.otistik)
                $('#class_eight_form [name=physically_unfit]').val(data.physically_unfit)
                $('#class_eight_form [name=science]').val(data.science)
                $('#class_eight_form [name=commerce]').val(data.commerce)
                $('#class_eight_form [name=arts]').val(data.arts)
                $('#class_eight_form [name=muslim]').val(data.muslim)
                $('#class_eight_form [name=hindu]').val(data.hindu)
                $('#class_eight_form [name=christian]').val(data.christian)
                $('#class_eight_form [name=buddhism]').val(data.buddhism)
            }else{
                $('#class_eight_form [name=boys]').val('')
                $('#class_eight_form [name=girls]').val('')
                $('#class_eight_form [name=total]').val('')
                $('#class_eight_form [name=children]').val('')
                $('#class_eight_form [name=children_of_children]').val('')
                $('#class_eight_form [name=otistik]').val('')
                $('#class_eight_form [name=physically_unfit]').val('')
                $('#class_eight_form [name=science]').val('')
                $('#class_eight_form [name=commerce]').val('')
                $('#class_eight_form [name=arts]').val('')
                $('#class_eight_form [name=muslim]').val('')
                $('#class_eight_form [name=hindu]').val('')
                $('#class_eight_form [name=christian]').val('')
                $('#class_eight_form [name=buddhism]').val('')
            }
            
        },
        error : function(err){

        }
    });
});

$('#class_eight_form').submit(function(e){
    e.preventDefault();
    $('#class_eight_form #update_button').addClass('disabled');
    $('#class_eight_form #update_button').html('Updating ......');
    $.ajax({
        type : 'POST',
        url : 'update-student-number',
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#class_eight_form #update_button').removeClass('disabled');
            $('#class_eight_form #update_button').html('UPDATE');
            $('#class_eight_form [name=total]').val(data);
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Admin details updated successfully',
                showConfirmButton: true,
            });
        },
        error : function(err){
            $('#class_eight_form #update_button').removeClass('disabled');
            $('#class_eight_form #update_button').html('UPDATE');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        },
    });
});


// class nine
$('#class_nine_form [name=section]').change(function(){
    
    $.ajax({
        type : 'get',
        url : 'get-student-number/'+$('#class_nine_form [name=class_shift]').val()+'/'+$('#class_nine_form [name=class_name]').val()+'/'+$('#class_nine_form [name=section]').val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            if(data!=0){
                $('#class_nine_form [name=boys]').val(data.boys)
                $('#class_nine_form [name=girls]').val(data.girls)
                $('#class_nine_form [name=total]').val(data.boys+data.girls)
                $('#class_nine_form [name=children]').val(data.children)
                $('#class_nine_form [name=children_of_children]').val(data.children_of_children)
                $('#class_nine_form [name=otistik]').val(data.otistik)
                $('#class_nine_form [name=physically_unfit]').val(data.physically_unfit)
                $('#class_nine_form [name=science]').val(data.science)
                $('#class_nine_form [name=commerce]').val(data.commerce)
                $('#class_nine_form [name=arts]').val(data.arts)
                $('#class_nine_form [name=muslim]').val(data.muslim)
                $('#class_nine_form [name=hindu]').val(data.hindu)
                $('#class_nine_form [name=christian]').val(data.christian)
                $('#class_nine_form [name=buddhism]').val(data.buddhism)
            }else{
                $('#class_nine_form [name=boys]').val('')
                $('#class_nine_form [name=girls]').val('')
                $('#class_nine_form [name=total]').val('')
                $('#class_nine_form [name=children]').val('')
                $('#class_nine_form [name=children_of_children]').val('')
                $('#class_nine_form [name=otistik]').val('')
                $('#class_nine_form [name=physically_unfit]').val('')
                $('#class_nine_form [name=science]').val('')
                $('#class_nine_form [name=commerce]').val('')
                $('#class_nine_form [name=arts]').val('')
                $('#class_nine_form [name=muslim]').val('')
                $('#class_nine_form [name=hindu]').val('')
                $('#class_nine_form [name=christian]').val('')
                $('#class_nine_form [name=buddhism]').val('')
            }
            
        },
        error : function(err){

        }
    });
});

$('#class_nine_form').submit(function(e){
    e.preventDefault();
    $('#class_nine_form #update_button').addClass('disabled');
    $('#class_nine_form #update_button').html('Updating ......');
    $.ajax({
        type : 'POST',
        url : 'update-student-number',
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#class_nine_form #update_button').removeClass('disabled');
            $('#class_nine_form #update_button').html('UPDATE');
            $('#class_nine_form [name=total]').val(data);
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Admin details updated successfully',
                showConfirmButton: true,
            });
        },
        error : function(err){
            $('#class_nine_form #update_button').removeClass('disabled');
            $('#class_nine_form #update_button').html('UPDATE');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        },
    });
});

// class ten
$('#class_ten_form [name=section]').change(function(){
    
    $.ajax({
        type : 'get',
        url : 'get-student-number/'+$('#class_ten_form [name=class_shift]').val()+'/'+$('#class_ten_form [name=class_name]').val()+'/'+$('#class_ten_form [name=section]').val(),
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            if(data!=0){
                $('#class_ten_form [name=boys]').val(data.boys)
                $('#class_ten_form [name=girls]').val(data.girls)
                $('#class_ten_form [name=total]').val(data.boys+data.girls)
                $('#class_ten_form [name=children]').val(data.children)
                $('#class_ten_form [name=children_of_children]').val(data.children_of_children)
                $('#class_ten_form [name=otistik]').val(data.otistik)
                $('#class_ten_form [name=physically_unfit]').val(data.physically_unfit)
                $('#class_ten_form [name=science]').val(data.science)
                $('#class_ten_form [name=commerce]').val(data.commerce)
                $('#class_ten_form [name=arts]').val(data.arts)
                $('#class_ten_form [name=muslim]').val(data.muslim)
                $('#class_ten_form [name=hindu]').val(data.hindu)
                $('#class_ten_form [name=christian]').val(data.christian)
                $('#class_ten_form [name=buddhism]').val(data.buddhism)
            }else{
                $('#class_ten_form [name=boys]').val('')
                $('#class_ten_form [name=girls]').val('')
                $('#class_ten_form [name=total]').val('')
                $('#class_ten_form [name=children]').val('')
                $('#class_ten_form [name=children_of_children]').val('')
                $('#class_ten_form [name=otistik]').val('')
                $('#class_ten_form [name=physically_unfit]').val('')
                $('#class_ten_form [name=science]').val('')
                $('#class_ten_form [name=commerce]').val('')
                $('#class_ten_form [name=arts]').val('')
                $('#class_ten_form [name=muslim]').val('')
                $('#class_ten_form [name=hindu]').val('')
                $('#class_ten_form [name=christian]').val('')
                $('#class_ten_form [name=buddhism]').val('')
            }
            
        },
        error : function(err){

        }
    });
});

$('#class_ten_form').submit(function(e){
    e.preventDefault();
    $('#class_ten_form #update_button').addClass('disabled');
    $('#class_ten_form #update_button').html('Updating ......');
    $.ajax({
        type : 'POST',
        url : 'update-student-number',
        data: $(this).serialize(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'JSON',
        success : function(data){
            $('#class_ten_form #update_button').removeClass('disabled');
            $('#class_ten_form #update_button').html('UPDATE');
            $('#class_ten_form [name=total]').val(data);
            Swal.fire({
                type: 'success',
                title: '',
                text: 'Admin details updated successfully',
                showConfirmButton: true,
            });
        },
        error : function(err){
            $('#class_ten_form #update_button').removeClass('disabled');
            $('#class_ten_form #update_button').html('UPDATE');
            Swal.fire({
                type: 'error',
                title: '',
                text: err.responseJSON.message,
                showConfirmButton: true,
            });
        },
    });
});