<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="{{ asset('css/lecturerBarQ.css') }}" />
    </head>
    <body>
        <div class="categories">
        <div class="group">
                <div class="user-wrapper" id="userDropdown">
                   <!-- <img class="user" src="images/userprofil.svg" alt="User Profile" id="userIcon" /> -->
                   <img class="user" src="{{ asset('images/userprofil.svg') }}" alt="User Profile" id="userIcon" />
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
                <div class="frame"><div class="text-wrapper">Save</div></div>
                <div class="overlap-group">
                    <div class="circle-with-triangle">
                        <div class="polygon-wrapper"></div>
                    </div>
                    <!-- <textarea class="div-wrapper" name="" id="" cols="30" rows="10" placeholder="Write the examen topic here..."></textarea> -->
                    <!-- <div class="div-wrapper"><div class="div">Text.......</div></div> -->
                </div>
            </div>
            <p class="p">Upload or Write Exam Questions</p>
            <div class="text-wrapper-2">IIUM Placement Test Scheduling</div>
            <div class="double-square">
                <div class="overlap-group-2">
                    <div class="rectangle"></div>
                    <div class="rectangle-2"></div>
                </div>
            </div>
            <div class="overlap-wrapper">
                <div class="overlap-group-2">
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
                <img class="screenshot" src="{{ asset('images/logo-remove.png') }}" />
            </div>
            <div class="overlap-4">
                <div class="rectangle-3"></div>
                <div class="upload">
                    <form action="{{ route('lecturerBarQ.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Title:</label>
                        <input type="text" name="title" required>
                        <br>
                        <label for="instruction">Instructions:</label>
                        <textarea name="instruction" rows="4" cols="50"></textarea>
                        <br>
                        <label for="image">Upload Chart:</label>
                        <input type="file" name="image" accept=".png, .jpg, .jpeg" required>
                        <br>
                        <label for="marks">Marks:</label>
                        <input type="number" name="marks" required>
                        <br>
                        <button type="submit">Submit</button>
                    </form>
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

function displaySelectedFile() {
      var fileInput = document.getElementById('fileInput');
      var selectedFile = document.getElementById('selectedFile');
      
      if (fileInput.files.length > 0) {
        selectedFile.innerHTML = 'Selected file: ' + fileInput.files[0].name;
      } else {
        selectedFile.innerHTML = 'No file selected';
      }
    }
</script>