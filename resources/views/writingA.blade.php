<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="{{ asset('css/writingA.css') }}"/>
    </head>
    <body>
        <div class="writing-answers">
            <div class="overlap-wrapper">
                <div class="overlap">
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
                    <div class="overlap-group">
                        <div class="div">
                            <div class="text-wrapper">Write down your answers</div>
                            <div class="circle-with-triangle">
                                <div class="polygon-wrapper"></div>
                            </div>
                            <br><br><br>
                            <div class="uploaded-questions">
                                <h3 style="display: inline-block; margin-right: 10px;">Writing Questions: </h3>
                                @foreach ($questions as $question)
                                    <div style="display: inline-block; margin-right: 10px;">
                                        <p style="display: inline-block; margin-right: 10px;">{{ $question->question }}</p>
                                        <h3 style="display: inline-block;">Marks: {{ $question->marks }}</h3>
                                    </div>
                                @endforeach
                            </div>
                            <form action="{{ route('writingA.store') }}" method="post">
                                @csrf
                                <textarea name="answers" class="frame" cols="30" rows="10" placeholder="Write your answer here..."></textarea>
                                <br>
                                <button type="submit" class="submitButton">Submit Answer</button>
                            </form>
                            <!-- <div class="frame"><div class="text-wrapper-2">Text.......</div></div> -->
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
                                <img class="screenshot" src="images/logo-remove.png" />
                            </div>
                        </div>
                        <!-- <div class="frame-wrapper">
                            <div class="div-wrapper"><div class="text-wrapper-3">Submit</div></div>
                        </div>
                        <div class="frame-2">
                            <a href="/examCategories"><div class="div-wrapper"><div class="text-wrapper-3">Back</div></div></a>
                        </div> -->
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