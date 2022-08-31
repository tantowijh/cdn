<?php
function mp4upload_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return <<<MP4UPLOAD
<iframe src="https://mp4upload.com/embed-{$id}.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%" allowfullscreen="true"></iframe>
MP4UPLOAD;
}
add_shortcode ('mp4upload', 'mp4upload_sc' );

function yourupload_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return <<<YOURUPLOAD
<IFRAME SRC="https://www.yourupload.com/embed/{$id}" allowfullscreen="true" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=100%></IFRAME>
YOURUPLOAD;
}
add_shortcode ('yourupload', 'yourupload_sc' );

function acefile_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<ACEFILE
<iframe src="//acefile.co/player/{$id}/" scrolling="no" frameborder="0" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
ACEFILE;
}
add_shortcode ('acefile', 'acefile_sc' );

function mirrorace_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<MIRRORACE
<iframe src="https://mirrorace.com/m/embed/{$id}" scrolling="no" frameborder="0" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
MIRRORACE;
}
add_shortcode ('mirrorace', 'mirrorace_sc' );

function fembed_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<FEMBED
<iframe width="100%" height="100%" src="https://www.fembed.com/v/{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
FEMBED;
}
add_shortcode ('fembed', 'fembed_sd' );

function cloudvideo_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<CLOUDVIDEO
<iframe width="100%" height="100%" src="https://cloudvideo.tv/embed-{$id}.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CLOUDVIDEO;
}
add_shortcode ('cloudvideo', 'cloudvideo_sd' );

function youtube_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<YOUTUBE
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
YOUTUBE;
}
add_shortcode ('youtube', 'youtube_sd' );

function gdrive_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<GDRIVE
<iframe width="100%" height="100%" src="https://drive.google.com/file/d/{$id}/preview" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
GDRIVE;
}
add_shortcode ('gdrive', 'gdrive_sd' );

function dood_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<DOOD
<iframe width="100%" height="100%" src="https://dood.watch/e/{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
DOOD;
}
add_shortcode ('dood', 'dood_sd' );

function okru_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<OKRU
<iframe width="100%" height="100%" src="https://ok.ru/videoembed/{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
OKRU;
}
add_shortcode ('okru', 'okru_sd' );

function mixdrop_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<MIXDROP
<iframe width="100%" height="100%" src="https://mixdrop.co/e/{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
MIXDROP;
}
add_shortcode ('mixdrop', 'mixdrop_sd' );

function streamsb_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<STREAMSB
<iframe width="100%" height="100%" src="https://sbplay1.com/e/{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
STREAMSB;
}
add_shortcode ('streamsb', 'streamsb_sd' );

function general_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
return <<<GENERAL
<iframe width="100%" height="100%" src="{$id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
GENERAL;
}
add_shortcode ('general', 'general_sd' );

function videohtml_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => '',
		'poster' => '',
    ), $atts ) );
return <<<VIDEOHTML
<video controls width="100%" height="100%" poster="{$poster}"><source src="{$id}"></video>
VIDEOHTML;
}
add_shortcode ('videohtml', 'videohtml_sd' );

function hlsplayer_sd( $atts ) {
    extract( shortcode_atts( array (
        'id' => '',
		'poster' => '',
    ), $atts ) );
return <<<HLSPLAYER
<script src="https://cdn.jsdelivr.net/npm/hls.js@canary"></script>
<video controls crossorigin playsinline id="player" data-poster="{$poster}">
<source type="video/mp4" src="{$id}">
</video>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const video = document.querySelector("video");
    const source = video.getElementsByTagName("source")[0].src;
    var fileExtension = source.split('.').pop();
    const defaultOptions = {};
	
        if (Hls.isSupported()) {
        var hls = new Hls({
          debug: true,
        });
        hls.loadSource(source);
        hls.attachMedia(video);
        hls.on(Hls.Events.MEDIA_ATTACHED, function () {
          video.muted = false;
          video.play();
        });
      }
      // hls.js is not supported on platforms that do not have Media Source Extensions (MSE) enabled.
      // When the browser has built-in HLS support (check using `canPlayType`), we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video element through the `src` property.
      // This is using the built-in support of the plain video element, without using hls.js.
      else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = source;
        video.addEventListener('canplay', function () {
          video.play();
        });
      }
    });
</script>
HLSPLAYER;
}
add_shortcode ('hlsplayer', 'hlsplayer_sd' );
?>