import $ from 'jquery';


$('.site').each(function (i, elem) {
    if ($("section").hasClass("video_block")) {
        var videoPlayer = videojs('#v-player', {
            autoplay: 'muted',
        });
        $(document).ready(function () {

            $('.video_block').each(function () {
                const videoBtn = $(this).find('.video-btn');


                $(this).click(function () {
                    if (videoBtn.hasClass('pause-button')) {
                        videoPlayer.pause();
                        videoBtn.removeClass('pause-button')
                    } else {
                        videoPlayer.play();
                        videoBtn.addClass('pause-button')
                    }
                });

                $(this).on('touchstart', function () {
                    if (videoBtn.hasClass('pause-button')) {
                        console.log('nothave')
                        videoPlayer.pause();
                        videoBtn.removeClass('pause-button')
                    } else {
                        console.log('have')
                        videoPlayer.play();
                        videoBtn.addClass('pause-button')
                    }
                });
            });

        });
    }
});