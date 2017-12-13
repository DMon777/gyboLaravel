$(document).ready(function () {

    $('.reply-btn').bind('click',function(e){
        e.preventDefault();
        var comment_id = $(this).siblings('.input_comment_id').val();
        var commentator_name = $(this).siblings('.commentator_name').val();
        var str = "<p> ответить на комментарий - "+ commentator_name +" <button class='btn-danger' id='reject_answer'> отменить</button> </p>";
        $("#answer_message").empty();

        $('#answer_message').append(str);
        $('#your-name').focus();
        $('#parent_id').val(comment_id);
    })


    $("#answer_message").bind('click','#reject_answer',function(){

        $("#answer_message").empty();
        $('#parent_id').val('0');
    });

})