import $ from 'jquery';

$(document).ready(function () {
    const video = $('.video_block');

    if (video.length) {
        var videoPlayer = videojs('#v-player', {
            autoplay: 'muted',
        });

        let videoBtn = video.find('.video-btn');

        video.click(function () {
            if (videoBtn.hasClass('pause-button')) {
                videoPlayer.pause();
                videoBtn.removeClass('pause-button');
            } else {
                videoPlayer.play();
                videoBtn.addClass('pause-button');
            }
        });

        video.on('touchend', function (e) {
            if (videoBtn.hasClass('pause-button')) {
                videoPlayer.pause();
                videoBtn.removeClass('pause-button');
            } else {
                videoPlayer.play();
                videoBtn.addClass('pause-button');
            }
        });

        videoBtn.on('touchstart', function (e) {
            e.stopPropagation();
            videoPlayer.play();
            videoBtn.addClass('pause-button');
        });
    }
});

