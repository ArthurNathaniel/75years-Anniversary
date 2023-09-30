
        (function() {
            emailjs.init('mJW_o6PyBi_FvJzFc'); // Replace with your EmailJS User ID
        })();

        document.getElementById("massIntentionForm").addEventListener("submit", function(event) {
            event.preventDefault();
            sendMail();
        });

        function sendMail() {
            var submitBtn = document.querySelector("button[type=submit]");
            var originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = "Please Wait...";

            var params = {
                name: document.getElementById("name").value,
                phoneNumber: document.getElementById("phoneNumber").value,
                email: document.getElementById("email").value,
                intentionType: document.getElementById("intentionType").value,
                intentionName: document.getElementById("intentionName").value,
                massDate: document.getElementById("massDate").value,
                additionalInfo: document.getElementById("additionalInfo").value,
            };

            const serviceID = "service_x7zr3bq";
            const templateID = "template_w73t7mj";

            emailjs.send(serviceID, templateID, params)
                .then(function(response) {
                    document.getElementById("massIntentionForm").reset();
                    console.log("Sent:", response);
                    alert("Your message was sent successfully!");
                })
                .catch(function(error) {
                    console.log("Error:", error);
                    alert("There was an error sending your message. Please try again later.");
                })
                .finally(function() {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });
        }
    