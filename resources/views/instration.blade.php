<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="{{ asset('css/instration.css') }}" />
    </head>
    <body>
        <div class="categories">
        <div class="group">
                <div class="user-wrapper" id="userDropdown">
                    <img class="user" src="images/userprofil.svg" alt="User Profile" id="userIcon" />
                    <div class="dropdown-content" id="dropdownContent">
                        <!-- Add the content you want to display in the dropdown here -->
                        <a href="/result">
                            <span class="icon">
                            <i class="fas fa-envelope-open" style="padding-right: 10px"></i>
                            </span>
                            Results
                        </a>
                        <a href="/logout">
                            <span class="icon">
                            <i class="fas fa-sign-out-alt" style="padding-right: 10px"></i>
                            </span>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
            <div class="overlap">
                <div class="overlap-group">
                    <div class="circle-with-triangle">
                        <div class="polygon-wrapper"></div>
                    </div>
                    <p class="the-international">
                        The International Islamic University Malaysia has established rules to ensure academic integrity among its
                        community of academics, staff, and students. The university aims to produce individuals who can become
                        agents of positive change in society. The university&#39;s mission, vision, and philosophy of education
                        serve as the foundation for the responsibilities that the community should shoulder. The community is
                        expected to actively participate in knowledge generation and dissemination, taking into account the concepts
                        of integrated knowledge, sustainable development, Islamization, Islamic-moral spiritual values, the
                        international community, intercultural dialogue, and social responsibility. The university adopts a holistic
                        approach, which requires a high level of integrity from its community members. Integrity, which comes from
                        the Latin word &#34;integer,&#34; refers to an individual&#39;s complete internal strengths. It involves
                        honesty, adherence to academic and moral principles, values, and ethics, accuracy, and truthfulness in
                        fulfilling responsibilities. Amanah is a crucial attribute that stems from iman and aman, which means faith
                        and peace, respectively. It is the internal state of iman that allows individuals to receive and deliver
                        amanah. Failure to maintain this attribute compromises the integrity of individuals and weakens the
                        institution.
                    </p>
                </div>
                <div class="double-square">
                    <div class="div">
                        <div class="rectangle"></div>
                        <div class="rectangle-2"></div>
                    </div>
                </div>
                <div class="overlap-2">
                    <div class="rectangle-3"></div>
                    <a href="examCategories"><div class="text-wrapper-2">Agree</div></a>
                </div>
            </div>
            <div class="text-wrapper-3">IIUM Placement Test Scheduling</div>
            <div class="overlap-group-wrapper">
                <div class="div">
                    <div class="rectangle"></div>
                    <div class="rectangle-2"></div>
                </div>
            </div>
            <div class="overlap-3">
                <div class="triangle-with-circle">
                    <div class="overlap-4">
                    <img class="polygon" src="{{ asset('images/polygon.svg') }}" />
                    </div>
                </div>
                <img class="screenshot" src="images/logo-remove.png" />
            </div>
            <p class="INTERNATIONAL">INTERNATIONAL ISLAMIC UNIVERSITY MALAYSIA<br />ACADEMIC INTEGRITY RULES</p>
        </div>
        <div class="footer-basic">
        <footer>
            <p style="color: white;" class="copyright">Copyright © 2023 <img class="logo" src="images/logo-remove.png" /> International Islamic University Malaysia </p>
        </footer>
    </div>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Toggle the dropdown when the user icon is clicked
    $("#userIcon").click(function(e) {
        e.stopPropagation(); // Prevent the click event from propagating to the document

        $("#dropdownContent").toggle();
    });

    // Close the dropdown when clicking outside of it
    $(document).click(function(e) {
        if (!$(e.target).is("#userDropdown, #userIcon")) {
            $("#dropdownContent").hide();
        }
    });
});
</script>