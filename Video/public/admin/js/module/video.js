$(function() {

    $('#video-info-button').on('click', function(){
        var url = $(this).data('url');
        var videoDetail = $('#video-detail');

        $('input[name="videoId"]', videoDetail).val('');
        $('input[name="title"]', videoDetail).val('');
        $('textarea[name="summary"]', videoDetail).val('');
        $('img.img-thumbnail', videoDetail).attr('src', '../public/admin/img/noimage.jpg');
        $('input[name="imageUrl"]', videoDetail).val('');

        videoDetail.addClass('hide');

        $.post(url, {video: $('#video').val()}, function(response){
            if (! response.error){
                $('input[name="videoId"]', videoDetail).val(response.id);
                $('input[name="title"]', videoDetail).val(response.title);
                $('textarea[name="summary"]', videoDetail).val(response.description);
                $('img.img-thumbnail', videoDetail).attr('src', response.thumbnail);
                $('input[name="imageUrl"]', videoDetail).val(response.thumbnail);

                videoDetail.removeClass('hide');
            }

        }, 'json');

        return false;
    });

});