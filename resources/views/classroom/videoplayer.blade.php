<head>
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
<style>
    body {
        margin: 5%;
        align: center;
    }
    .container {
        align: center;
        margin: auto;
    }
</style>

<div class="container">
    <h3>
        {{ $material->title }}
    </h3>
    <video
            id="my-video"
            class="video-js"
            controls
            preload="auto"
            width="640"
            height="264"
            poster="MY_VIDEO_POSTER.jpg"
            data-setup="{}"
    >
        <source src="/storage/{{ $material->link }}" type="video/mp4" />
        <p class="vjs-no-js">
            Проблема с браузером, пожалуйста обновите
            <a href="https://videojs.com/html5-video-support/" target="_blank"
            >браузер</a
            >
        </p>
    </video>
    <h4>
        {{ $material->description }}
    </h4>
</div>


<script src="https://vjs.zencdn.net/7.5.5/video.js"></script>
</body>