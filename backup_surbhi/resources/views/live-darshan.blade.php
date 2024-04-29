<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <title>Live Darshan</title>
    <!-- Include any CSS stylesheets or JavaScript libraries as needed -->
    <style>
        /* resources/css/live-darshan.css */

/* Resetting default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    color: #333;
}

/* Container styles */
#video-container {
    max-width: 2000px; /* Adjust width as needed */
    margin: 0 auto;
    padding: 20px;
}

/* Video styles */
#live-video {
    width: 100%; /* Ensure video fills its container */
    height: auto; /* Maintain aspect ratio */
    display: block;
    background-color: #000; /* Fallback color for browsers that do not support video */
}

/* Heading styles */
h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
}

/* Responsive styles (optional) */
@media screen and (max-width: 768px) {
    #video-container {
        padding: 10px;
    }
    h1 {
        font-size: 20px;
    }
}

    </style>
</head>
<body>
    <h1>Live Darshan</h1>
    <div id="video-container">
        <video id="live-video" autoplay playsinline controls></video>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const streamingServerUrl = 'https://th.bing.com/th/id/OIP.G1ZIKCKkKJZTU9caDwmdOgHaEK?w=314&h=180&c=7&r=0&o=5&dpr=1.8&pid=1.7';

            const videoElement = document.getElementById('live-video');
            videoElement.src = streamingServerUrl;
        });
    </script>

</body>
</html>
