<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="navbar">
        <img src="{{asset('pic/Hackthon.png')}}" alt="Hackathon">
        
        <div class="center-items">
            <a class="dashboard" href="/login/dashboard">Dashboard</a> 
            <a href="/login/timeline">Timeline</a>
            <a href="/homepage/home">Log Out</a>
        </div>

        <div class="right-items">
            <i class="fa-solid fa-user"></i> <p>Nama Team</p>
        </div>
    </div>


    <div id="datalist">
        <ul>
            <li>Nama Team :</li>
            <li>Nama Leader :</li>
            <li>Email :</li>
            <li>Whatsapp Number :</li>
            <li>Line ID :</li>
            <li>Github ID :</li>
            <li>Birth Place :</li>
            <li>Birth Date :</li>
        </ul>
    </div>

    <button id="popupButton">View CV & Binusian Card</button>

    <div id="popup" class="popup-container">
        <div class="popupImage">
            <img src="{{asset('pic/CV.png')}}" alt="CV">
            <img src="{{asset('pic/ID.png')}}" alt="ID">
        </div>
            <button id="closeButton">Back</button>
        
      </div>

      <div class="contact">
        <a href="/login/contact"><img src="{{asset('pic/Contact.png')}}" alt="Contact Us!"></a>
      </div>
    

    <script src="https://kit.fontawesome.com/9b3145912f.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>