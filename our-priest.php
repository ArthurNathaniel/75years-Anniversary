<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Priests- St. Theresa Catholic Church</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="welcome-grid">
            <h1>OUR PRIESTS</h1>
        </div>
    </section>
    <style>
        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            padding-left: 10%;
            padding-right: 10%;
            margin-top: 70px;
        }

        @media only screen and (max-width: 1122px) {
            .profile-grid {
                display: grid;
                grid-template-columns: 1fr;
            }
        }
    </style>
    <section>
        <div class="profile-grid">
            <div class="profile">
                <div class="profile-image" style="background-image: url(./images/father_gab.jpg);">

                </div>
                <div class="profile-info">
                    <h3>Rev Fr. Gabriel Kofi Sekyere</h3>
                    <p>
                        Parish Priest
                    </p>
                </div>
            </div>

            <div class="profile">
                <div class="profile-image" style="background-image: url(./images/father_louis.jpg);">

                </div>
                <div class="profile-info">
                    <h3>Rev Fr. Louis Asamoah</h3>
                    <p>

                        Assistant Priest
                    </p>
                </div>
            </div>


        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>