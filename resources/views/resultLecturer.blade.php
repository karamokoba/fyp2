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
            <div class="grade-box">
                <h3>Writing</h3>
                <!-- Textarea to display the text for Writing -->
                <textarea readonly class="text-to-mark"></textarea>
                <form>
                    @csrf
                    <label for="mark1">Mark:</label>
                    <input type="number" name="mark1" required>
                    <label for="comments1">Comments:</label>
                    <input type="text" name="comments1" required>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <div class="grade-box">
                <h3>Reading</h3>
                <!-- Textarea to display the text for Reading -->
                <textarea readonly class="text-to-mark"></textarea>
                <form>
                    @csrf
                    <label for="mark2">Mark:</label>
                    <input type="number" name="mark2" required>
                    <label for="comments2">Comments:</label>
                    <input type="text" name="comments2" required>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <div class="grade-box">
                <h3>Graph</h3>
                <!-- Textarea to display the text for Graph -->
                <textarea readonly class="text-to-mark"></textarea>
                <form>
                    @csrf
                    <label for="mark3">Mark:</label>
                    <input type="number" name="mark3" required>
                    <label for="comments3">Comments:</label>
                    <input type="text" name="comments3" required>
                    <button type="submit">Submit</button>
                </form>
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
