jQuery(document).ready(function($){

    /*var setWidth = $(window).width() * (50/100);
    var setHeight = $(window).height() * (50/100);
    $('.modal-content').css('width', setWidth +'px');
    $('#cartoonVideo').css('width', setWidth +'px');
    $('#cartoonVideo').css('height', setHeight +'px');*/

    $(window).click(function(){
        $("#myModal").modal('hide');
    });

    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    //var url = url.replace("watch?v=", "embed/");
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });

    $("#myModal").modal('show');

});