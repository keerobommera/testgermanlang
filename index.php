<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css<?php echo '?v=' . time(); ?>">
    <title>Special German sounds</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.itemswrapper .items');
            const audios = document.querySelectorAll('.audios .mp3');
            items.forEach((item, idx) => {
                item.addEventListener('click', function() {
                    audios.forEach(audio => audio.pause());
                    audios.forEach(audio => audio.classList.remove('playing'));
                    if (audios[idx]) {
                        audios[idx].currentTime = 0;
                        audios[idx].play();
                        audios[idx].classList.add('playing');
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="audios">
        <audio src="assets/audios/01.mp3" class="mp3"></audio>
        <audio src="assets/audios/02.mp3" class="mp3"></audio>
        <audio src="assets/audios/03.mp3" class="mp3"></audio>
        <audio src="assets/audios/04.mp3" class="mp3"></audio>
        <audio src="assets/audios/07.mp3" class="mp3"></audio>
        <audio src="assets/audios/08.mp3" class="mp3"></audio>
        <audio src="assets/audios/10.mp3" class="mp3"></audio>
        <audio src="assets/audios/11.mp3" class="mp3"></audio>
        <audio src="assets/audios/12.mp3" class="mp3"></audio>
        <audio src="assets/audios/15.mp3" class="mp3"></audio>
        <audio src="assets/audios/16.mp3" class="mp3"></audio>
        <audio src="assets/audios/17.mp3" class="mp3"></audio>
        <audio src="assets/audios/19.mp3" class="mp3"></audio>
        <audio src="assets/audios/37.mp3" class="mp3"></audio>
        <audio src="assets/audios/01.mp3" class="mp3"></audio>
        <audio src="assets/audios/02.mp3" class="mp3"></audio>
        <audio src="assets/audios/03.mp3" class="mp3"></audio>
        <audio src="assets/audios/04.mp3" class="mp3"></audio>
        <audio src="assets/audios/07.mp3" class="mp3"></audio>
        <audio src="assets/audios/08.mp3" class="mp3"></audio>
        <audio src="assets/audios/10.mp3" class="mp3"></audio>
        <audio src="assets/audios/11.mp3" class="mp3"></audio>
    </div>
    <div class="wrapper">
        <div class="soundbartitle icon-volume-medium">Special German Sounds</div>
        <div class="itemswrapper">
            <div class="items">
                <div class="phonetics">ä</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ü</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ö</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">aa</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ee</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ie</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">au <br> eu</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ei</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ch</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ch</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ck</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">II</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">pf</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">sch</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">st</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">sp</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">ß <br> ss</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">s</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">v</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">W</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">tz <br> z</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
            <div class="items">
                <div class="phonetics">d-&gt;t <br>g-&gt;k <br>b-&gt;p</div>
                <div class="ref-image">
                    <img src="assets/cuevas.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>