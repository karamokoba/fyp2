<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="globals.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    </head>
    <body>
        <div class="login">
            <div class="div">
                <div class="overlap">
                    <div class="rectangle"></div>
                    <img class="img" src="{{ asset('images/Rectangle.png') }}" />
                    <div class="rectangle-2"></div>
                    <img class="women-with-tab" src="{{ asset('images/5555-removebg-preview.png') }}" />
                    <div class="group"><img class="thunderbolt" src="{{ asset('images/thunderbolt.png') }}" /></div>
                    <p class="very-good-works-are">EPT made <br />simple, <br /> fast & <br />reliable</p>
                </div>
                <div class="group-2">
                <img class="screenshot" src="images/logo-remove.png" />
                    <div class="text-wrapper-2">IIUM PLACEMENT TEST</div>
                    <p class="p">LOGIN</p>
                    @if($errors->has('login_error'))
                        <div class="error-message">
                            {{ $errors->first('login_error') }}
                        </div>
                    @endif
                    <form action="/login" method="post">
                        @csrf
                        <div class="div-wrapper">
                            <div class="input-container">
                                <i class="fa fa-user icon-2"></i>
                                <input class="overlap-2" type="text" name="matric_number" placeholder="Matric number" required>
                            </div>
                        </div>
                        <div class="overlap-wrapper">
                            <i class="fa fa-lock icon-1"></i>
                            <input class="overlap-2" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="group-3">
                            <button type="submit" class="overlap-3"><div class="text-wrapper-4">Login Now</div></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
