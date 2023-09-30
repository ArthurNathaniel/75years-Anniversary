<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - St. Theresa Catholic Church</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>


    <section id="hero-all">
        <div class="hero-texting">
            <p>
                Welcome to St. Theresa Catholic Church, Asawase
            </p>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide text-slide">
                        <h1><span>75th Years</span></h1>
                        <h1>Anniversary</h1>
                    </div>

                </div>

            </div>
        </div>
        <div class="hero-pic">
            <div class="pic">
                <img src="./images/one.png" alt="">
            </div>
            <div class="pic">
                <img src="./images/three.png" alt="">
            </div>
            <!-- <div class="pic">
                <img src="./gallery/home-3.jpg" alt="">
            </div> -->
        </div>
    </section>
    <section>
        <div class="welcome-grid">
            <div class="welcome-image">
                <img src="./images/father.png" alt="">
                <div class="name">
                    <h2>Rev. Fr. Gabriel Kofi Sekyere</h2>
                </div>
            </div>
            <div class="welcome-text">
                <h1>WELCOME MESSAGE</h1>
                <p>
                    I am deeply honored to welcome you to Asawase St. Theresa Catholic Church, a place of faith,
                    history, and community in
                    the heart of Kumasi. It is with immense pride that we celebrate our 75th anniversary as one of the
                    oldest and most
                    cherished churches in the Kumasi Archdiocese.
                </p>
                <p>
                    For three-quarters of a century, this sacred place has been a beacon of faith, hope, and love,
                    serving as a spiritual
                    home for generations of believers. Our church's rich history is a testament to the enduring power of
                    faith and the
                    dedication of countless individuals who have contributed to its growth and vitality.
                </p>
                <p>
                    As we reflect on our past, we also look forward to the future with great anticipation. At Asawase
                    St. Theresa Catholic
                    Church, we are committed to preserving our traditions while embracing the challenges and
                    opportunities of today's world.
                    We are a vibrant and welcoming community that seeks to carry the torch of faith into the next 75
                    years and beyond.
                </p>
                <p>
                    Located in the heart of Asawase, Kumasi, our church is not just a physical structure; it is a
                    gathering place for souls
                    seeking solace, spiritual nourishment, and fellowship. We invite you to explore our historic church
                    and join us in our
                    worship services, community events, and ministries.
                </p>
                <div class="welcome-btn">
                    <a href="">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="services">
            <div class="heading">
                <h1>OUR MASS</h1>
            </div>
            <div class="services-grid">
                <div class="card">
                    <div class="card-image" style="background-image: url(./images/first_mass.jpg);">

                    </div>
                    <div class="card-info">
                        <h1>TWI MASS</h1>
                        <p>(SUNDAY FIRST MASS)</p>
                        <h3>6:30AM - 8:30AM</h3>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image" style="background-image: url(./images/second_mass.jpg);">

                    </div>
                    <div class="card-info">
                        <h1>ENGLISH MASS</h1>
                        <p>(SUNDAY SECOND MASS)</p>
                        <h3>9:00AM - 11:00AM</h3>
                    </div>
                </div>


                <div class="card">
                    <div class="card-image" style="background-image: url(./images/weekdays.jpg);">

                    </div>
                    <div class="card-info">
                        <h1>WEEK DAYS MASS</h1>
                        <p>(MONDAY - SATURDAY)</p>
                        <h3>6:00AM - 7:00AM</h3>
                    </div>
                </div>
            </div>

            <div class="service-btn">
                <a href="">MORE ABOUT OUR SERVICES</a>
            </div>
        </div>
    </section>


    <section>
        <div class="banner">
            <h1>Roman Deɛ Ɛnoaa ne Asawase,
                <br>
                <span></span>
            </h1>
        </div>
    </section>

    <section>
        <div class="events">
            <div class="heading">
                <h1>OUR EVENTS</h1>
            </div>
            <div class="event-grid">



                <div class="event-bx">
                    <div class="event-image">

                    </div>
                    <div class="event-info">
                        <h2>HOME COMING</h2>
                        <p><i class="fa-solid fa-calendar-check"></i> SUNDAY 10TH SEPTEMBER,2023</p>
                        <p><i class="fa-solid fa-location-dot"></i> CHURCH PREMISES</p>
                        <p><i class="fa-solid fa-clock"></i> 7:00AM PROMPT</p>
                    </div>
                </div>

                <div class="event-bx">
                    <div class="event-image" style="background-image: url(./climax.jpg);">

                    </div>
                    <div class="event-info">
                        <h2>Anniversary Climax</h2>
                        <p><i class="fa-solid fa-calendar-check"></i> SUNDAY 1ST OCTOBER, 2023</p>
                        <p><i class="fa-solid fa-location-dot"></i> CHURCH PREMISES</p>
                        <p><i class="fa-solid fa-clock"></i> 7:00AM PROMPT</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php include './footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>
    <script src="anime.js"></script>
    <script>
        $(document).ready(function() {
            var typed = new Typed('.banner span', {
                strings: ['Wopɛ Ade pa bra Asawase'],
                typeSpeed: 100,
                loop: true,
                loopCount: Infinity,
                showCursor: false,
            });
        });
    </script>

</body>

</html>