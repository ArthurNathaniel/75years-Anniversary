  <div class="navbar-all">
      <a href="index.php">
          <div class="nav-logo"></div>
      </a>
      <div class="nav-items">
          <div class="nav-links">
              <a href="index.php">Home</a>
              <div class="dropdown">
                  <button class="dropbtn">About Us <i class="fa-solid fa-angle-down"></i></button>
                  <div class="dropdown-content">
                      <a href="welcome-message.php">Welcome Message</a>
                      <!-- <a href="our-history.php">Our History</a> -->
                      <a href="our-priest.php">Our Priests</a>
                      <a href="our-catechist.php">Our Catechist</a>
                      <a href="leader.php">Church Leaders</a>
                      <a href="pyc-executives.php">Pyc Executives</a>
                  </div>
              </div>
              <a href="audio-mass.php">Audio Mass</a>
              <a href="mass-intention.php">Mass Intention</a>
              <a href="photo-gallery.php">Gallery</a>
              <div class="dropdown">
                  <button class="dropbtn">YOUTH CORNER <i class="fa-solid fa-angle-down"></i></button>
                  <div class="dropdown-content">
                      <a href="">YOUTH CALENDAR</a>
                      <a href="">Church Doctrines</a>
                      <a href="">Question of the day</a>
                  </div>
              </div>

              <!-- <a href="">Announcement</a> -->
              <a href="contact.php">Contact Us</a>
          </div>
          <div class="nav-btn">
              <a href="" class="btnm" onclick="showAlert()">Donate Now</a>
          </div>
      </div>
      <button id="toggleButton">
          <i class="fa-solid fa-bars-staggered"></i> MENU
      </button>
  </div>

  <script>
      const toggleButton = document.getElementById("toggleButton");
      const navItems = document.querySelector(".nav-items");

      toggleButton.addEventListener("click", () => {
          console.log("Hello")

          navItems.classList.toggle("show-flex");
      });

      function showAlert() {
          alert("Momo Number: +233 54 104 6076 \nMomo Name: Gabriel Kofi Sekyere\nThank you for your donation!");
      }
  </script>