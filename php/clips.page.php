<head>
    <title><?php echo $lang['clips'] ?></title>
</head>

<div id="content" class="bg-white">
    <h1><?php echo $lang['clips-title'] ?></h1>
    <!-- Erstes Clip-Paar -->
    <div class="twitch_clips">
        <!-- Erster Clip des Paares-->
        <div class="clip_left">
            <h2><?php echo $lang['clip1'] ?></h2>
            <p><?php echo $lang['clip1-p1'] ?></p>
            <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                   preload="auto" width="454" height="264" poster=""
                   data-setup="{}">
                <source src="" type='video/mp4'>
                <source src="" type='video/webm'>
                <source src="" type='video/ogg'>
                <p class="vjs-no-js"><?php echo $lang['clips-nojs'] ?></p>
            </video>
        </div>
        <!-- Zweiter Clip des Paares -->
        <div class="clip_right">
            <h2><?php echo $lang['clip2'] ?></h2>
            <p><?php echo $lang['clip2-p1'] ?></p>
            <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
                   preload="auto" width="454" height="264" poster=""
                   data-setup="{}">
                <source src="" type='video/mp4'>
                <source src="" type='video/webm'>
                <source src="" type='video/ogg'>
                <p class="vjs-no-js"><?php echo $lang['clips-nojs'] ?></p>
            </video>
        </div>
    </div>
</div>
