<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Intention - St. Theresa Catholic Church</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="mass-intention.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="welcome-grid">
            <h1>MASS intention</h1>
        </div>
    </section>
    <div class="mass-intention">
        <form id="massIntentionForm">
            <h1>Mass Intention Request Form</h1>
            <br>
            <div class="form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
            </div>
            <div class="form">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email Address">
            </div>
            <div class="form">
                <label for="intentionType">Type of Intention</label>
                <input type="text" id="intentionType" name="intentionType" placeholder="Type of Intention" required>
            </div>
            <div class="form">
                <label for="intentionName">Intention Name:</label>
                <input type="text" id="intentionName" name="intentionName" placeholder="Name of Intention" required>
            </div>
            <div class="form">
                <label for="massDate">Day of the Mass:</label>
                <select id="massDate" name="massDate" required>
                    <option value="" selected hidden>Day of the Mass </option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="saturday">Saturday</option>
                    <option value="first_mass">First Mass</option>
                    <option value="second_mass">Second Mass</option>
                </select>
            </div>
            <div class="form">
                <label for="additionalInfo">Additional Information:</label>
                <textarea id="additionalInfo" name="additionalInfo" rows="4" cols="50"></textarea><br><br>
            </div>
            <div class="form">
                <button type="submit">
                    Send Intention
                </button>
            </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script src="mass-intention.js"></script>
</body>

</html>