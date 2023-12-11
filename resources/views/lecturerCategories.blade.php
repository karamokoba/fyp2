<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="{{ asset('css/lecturerCategories.css') }}" />
    </head>
    <body>
        <div class="exam-type-lecturer">
            <div class="div">
            <div class="group">
                <div class="user-wrapper" id="userDropdown">
                    <img class="user" src="images/userprofil.svg" alt="User Profile" id="userIcon" />
                    <div class="dropdown-content" id="dropdownContent">
                        <!-- Add the content you want to display in the dropdown here -->
                        <a href="/resultLecturer">
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
                        <div class="frame">
                            <div class="group-2">
                                <div class="img">
                                    <div class="overlap-group-2">
                                        <a href="/lecturerWritingQ/form"><img class="img" src="images/iiii.jpg" /></a>
                                        <div class="text-wrapper">Writing</div>
                                    </div>
                                </div>
                                <div class="genre">
                                    <div class="overlap-group-2">
                                        <a href="/lecturerReadingQ/create"><img class="img" src="images/reading-new.jpg" /></a>
                                        <div class="text-wrapper">Reading</div>
                                    </div>
                                </div>
                                <div class="overlap-wrapper">
                                    <div class="overlap-group-2">
                                        <a href="/lecturerBarQ/form"><img class="img" src="images/writing-bar-graph.jpg" /></a>
                                        <div class="text-wrapper">Graph</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="div-wrapper"><div class="text-wrapper-2">Log out</div></div> -->
                        </div>
                        <div class="circle-with-triangle">
                            <div class="polygon-wrapper"></div>
                        </div>
                    </div>
                    <div class="double-square">
                        <div class="overlap-2">
                            <div class="rectangle"></div>
                            <div class="rectangle-2"></div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-3">Select Type of Exam</div>
                <div class="text-wrapper-4">IIUM Placement Test Scheduling</div>
                <!-- <div class="overlap-group-wrapper"> -->
                    <div class="overlap-2">
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
            </div>
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
