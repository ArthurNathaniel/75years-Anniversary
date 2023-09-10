<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="audio-mass.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="welcome-grid">
            <h1>CHURCH DOCTRINES</h1>
        </div>
    </section>

    <div class="search">
        <input type="text" id="search-input" placeholder="Search">

    </div>

    <div class="audio-grid">
        <div class="audio-play">
            <audio id="audio-player" controls style="display: none;">
                <source id="audio-source" src="" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="play-indicator" style="display: none;">
                <i class="fas fa-volume-up"></i>
            </div>
        </div>
        <div class="audio-list">

        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="church-doctrines.js"></script>
<script src="search-function.js"></script>
</body>
</html>