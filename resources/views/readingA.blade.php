<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="{{ asset('css/readingA.css') }}"/>
    </head>
    <body>
        <div class="writing-answers">
            <div class="overlap-wrapper">
                <div class="overlap">
                <div class="group">
                <div class="user-wrapper" id="userDropdown">
                    <!-- <img class="user" src="images/userprofil.svg" alt="User Profile" id="userIcon" /> -->
                    <img class="user" src="{{ asset('images/userprofil.svg') }}" alt="User Profile" id="userIcon" />
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
                    <div class="overlap-group">
                        <!-- <div class="frame">
                            <div class="div-wrapper"><div class="text-wrapper">Submit</div></div>
                        </div>
                        <div class="frame-wrapper">
                            <a href="/examCategories"><div class="div-wrapper"><div class="text-wrapper">Back</div></div></a>
                        </div> -->
                        <div class="div">
                            <div class="text-wrapper-2">Write down your answers</div>
                            <div class="circle-with-triangle">
                                <div class="polygon-wrapper"></div>
                            </div>
                            <!-- <textarea class="reading-text" name="" id="" cols="30" rows="10" placeholder="Write your answer here..."></textarea> -->
                            <br><br><br>
                            <div class="uploaded-questions">
                                <h3 style="display: inline-block; margin-right: 10px;">Reading Questions: </h3>
                                @foreach ($questions as $question)
                                    <div style="display: inline-block; margin-right: 20px; margin-bottom: 10px;"> <!-- Added margin-bottom for vertical space -->
                                        {{-- Link to download the file --}}
                                        <a href="{{ route('readingA/download', ['filename' => $question->file]) }}" class="btn btn-primary" download="{{ $question->title }}.pdf">Download the file here</a>
                                        
                                        <!-- Added space between the "Download the file" link and the "Marks" display -->
                                        <span style="margin-left: 10px;"></span>

                                        <h3 style="display: inline-block;">Marks: {{ $question->marks }}</h3>
                                    </div>
                                @endforeach
                            </div>
                            <form action="{{ route('readingA.submitAnswer') }}" method="post">
                                @csrf
                                <textarea name="answers" class="reading-text" cols="30" rows="10" placeholder="Write your answer here..."></textarea>
                                <br>
                                <button type="submit" onclick="submitForm()" class="submitButton">Submit Answer</button>
                                <div id="timer"></div>
                            </form>
                        </div>
                        <div class="double-square">
                            <div class="overlap-group-2">
                                <div class="rectangle"></div>
                                <div class="rectangle-2"></div>
                            </div>
                        </div>
                        <div class="triangle-with-circle">
                            <div class="overlap-2">
                            <img class="polygon" src="{{ asset('images/polygon.svg') }}" />
                            <img class="screenshot" src="{{ asset('images/logo-remove.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="text-wrapper-4">IIUM Placement Test Scheduling</div>
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <div class="rectangle"></div>
                            <div class="rectangle-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-basic">
        <footer>
            <p style="color: white;" class="copyright">Copyright © 2023 <img class="logo" src="{{ asset('images/logo-remove.png') }}" /> International Islamic University Malaysia </p>
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
        document.querySelector('.submitButton').disabled = true;
        // Submit the form
        document.forms[0].submit();

        // Display the success alert
        setTimeout(function () {
            alert('Answer Successfully Submitted. Click OK to go back.');
            window.location.href = '/examCategories'; // Redirect to the desired page
        }, 500);
    }

    function updateTimer(remainingTime) {
        const minutes = Math.floor(remainingTime / 60000);
        const seconds = Math.floor((remainingTime % 60000) / 1000);
        document.getElementById('timer').innerText = `Time remaining: ${minutes}m ${seconds}s`;
    }

    window.onload = function() {
        let remainingTime = 3600000; // 1 hour = 3600000 milliseconds

        updateTimer(remainingTime);

        const timerInterval = setInterval(function() {
            remainingTime -= 1000;

            updateTimer(remainingTime);

            if (remainingTime <= 0) {
                clearInterval(timerInterval);
                submitForm(); // Automatically submit the form when the time is up
            }
        }, 1000);
    };
</script>