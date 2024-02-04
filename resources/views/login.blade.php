<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('pic/Welcome.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="navbar">
        <img src="{{asset('pic/Hackthon.png')}}" alt="Hackathon">
        
        <div class="right-items">
            <a href="home">Home</a> 
            <a href="/home/champ#champ">Champion & Prizes</a>
            <a href="/home/mj#mj">Mentor & Jury</a>
            <a href="/home/about#about">About Us</a>
            <a href="/home/faq#about">FAQ</a>
            <a href="/home/timeline#timeline">Timeline</a>
            <button><a href="login">Log in</a></button>
        </div>
    </div>

    <div class="container">
        <div class="left">
            <img id="welcome" src="{{asset('pic/Welcome.png')}}" alt="Welcome">
            <br>
            <img id="log" src="{{asset('pic/Log back in.png')}}" alt="Log back in">
            
            <!-- Untuk Back-End -->
            <!-- Action diisi dengan url pengolahan data :)  -->
            <form id="myForm" action="https://example.com/form-handler" method="post">
                
                <input type="text" id="teamname" name="teamname" required placeholder="Your Team Name..">
                
                <br>
            
                <input type="password" id="password" name="password" required placeholder="Password..">
                
                <br>
            
                
                <button type="button" onclick="submitForm()">Log in</button>
              </form>
            
            <a href="forgotpass.html">Forgot Password?</a>
            <br>
        </div>

        <div class="right">
            <img src="{{asset('pic/Robot.png')}}" alt="Robot">
        </div>
    </div>

    <div class="bottom">
        <h2>Belum memiliki akun?</h2> <a href="signup.html">Sign up here..</a>
    </div>
    
    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>


