<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resultLecturer.css') }}">
</head>
<body>
    <div class="categories">
        <div class="group">
            <div class="user-wrapper" id="userDropdown">
                <img class="user" src="images/userprofil.svg" alt="User Profile" id="userIcon" />
                <div class="dropdown-content" id="dropdownContent">
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

        <div class="div">IIUM Placement Test Scheduling</div>
        <div class="double-square">
            <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="rectangle-2"></div>
            </div>
        </div>
        <div class="circle-with-triangle">
            <div class="overlap">
                <!-- <img class="polygon" alt="Polygon" src="polygon-2.svg" /> -->
            </div>
        </div>
        <div class="overlap-wrapper">
            <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="rectangle-2"></div>
            </div>
        </div>
        <div class="overlap-2">
            <div class="triangle-with-circle">
                <div class="overlap-3">
                    <img class="polygon" src="{{ asset('images/polygon.svg') }}" />
                </div>
            </div>
            <img class="screenshot" src="images/logo-remove.png" />
        </div>

        <div class="text-wrapper-2">Grade Student Papers</div>
        
        <!-- Three boxes aligned horizontally -->
        <div class="box-container">
        <!-- Writing Section -->
        <div class="grade-box">
            <h3>Writing</h3>
            <textarea readonly class="text-to-mark">{{ $writingAnswer ? $writingAnswer->answers : '' }}</textarea>
        </div>

        <!-- Reading Section -->
        <div class="grade-box">
            <h3>Reading</h3>
            <textarea readonly class="text-to-mark">{{ $readingAnswer ? $readingAnswer->answers : '' }}</textarea>
        </div>

        <!-- Graph Section -->
        <div class="grade-box">
            <h3>Graph</h3>
            <textarea readonly class="text-to-mark">{{ $graphAnswer ? $graphAnswer->answers : '' }}</textarea>
        </div>
    </div>

    <div class="gradeForm">
        <form method="post" action="{{ route('submitResults') }}">
            @csrf

            <label for="writing_mark">Writing Mark:</label>
            <input type="number" id="writing_mark" name="writing_mark" required>

            <label for="writing_comment">Writing Comment:</label>
            <input type="text" id="writing_comment" name="writing_comment" required>

            <label for="reading_mark">Reading Mark:</label>
            <input type="number" id="reading_mark" name="reading_mark" required>

            <label for="reading_comment">Reading Comment:</label>
            <input type="text" id="reading_comment" name="reading_comment" required>

            <label for="graph_mark">Graph Mark:</label>
            <input type="number" id="graph_mark" name="graph_mark" required>

            <label for="graph_comment">Graph Comment:</label>
            <input type="text" id="graph_comment" name="graph_comment" required>

            <button type="submit"onclick="submitForm()" class="submitButton">Submit</button>
        </form>
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
function submitForm() {
        // Disable the submit button to prevent multiple clicks
        document.querySelector('.submitButton').disabled = true;

        // Submit the form
        document.forms[0].submit();

        // Display the success alert
        setTimeout(function () {
            alert('Marks Successfully Submitted. Click OK to go back.');
            window.location.href = '/lecturerCategories'; // Redirect to the desired page
        }, 500); // Introduce a small delay to allow the form submission to complete
    }
</script>
