<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Journey Uncharted</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mohave%3A400%2C500%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Niagara+Solid%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Niconne%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lucida+Console%3A400"/>
  <link rel="stylesheet" href="./styles/macbook-pro-14-1.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){



?>

<div class="wel">
  <p style="color:black; font-size: 15px;margin: 10px;">Welcome - <?php echo $_SESSION['user_name']?></p>
 </div> 
 <?php } ?>
     <script>(function(w, d) { w.CollectId = "63eb26ef5ab151e799b667cf"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

</head>
<body>
<div class="macbook-pro-14-1-4Ui">
  <div class="auto-group-r7fp-mEa">
    <div class="logo-WCA">
      <div class="auto-group-nxxl-F9k">
        <div class="rectangle-13-LS6">
        </div>
        <p class="ju-4N6">JU</p>
      </div>
      <p class="journey-uncharted-kEv">
        <span class="journey-uncharted-kEv-sub-0" style="color: azure;"> 
        Journey
        <br/>
        
        </span>
        <span class="journey-uncharted-kEv-sub-1">Uncharted</span>
      </p>
    </div>
    </div>
    <div class="navbar">
  <a href="#home">REGISTER</a>
  <a href="logout.php">LOGOUT</a>
  <div class="dropdown">
    <button class="dropbtn">ACTIVITIES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Tour Planner</a>
      <a href="#">Currency Converter</a>
      <a href="#">Location Guide</a>
      <a href="#">Weather Forecast</a>
    </div>
  </div>
  <a href="#home">DESTINATIONS</a>
  <a href="#home">HOME</a>
</div>
  <div class="desktop-1-J8A">
  <div class="wrapper">
    <header><i class='bx bx-left-arrow-alt'></i>Weather Forecast</header>
    <section class="input-part">
      <p class="info-txt"></p>
      <div class="content">
        <input type="text" spellcheck="false" placeholder="Enter city name" required>
        <div class="separator"></div>
        <button>Get Device Location</button>
      </div>
    </section>
    <section class="weather-part">
      <img src="" alt="Weather Icon">
      <div class="temp" style="color: #3E8775;">
        <span class="numb">_</span>
        <span class="deg">°</span>C
      </div>
      <div class="weather" style="color: #3E8775;">_ _</div>
      <div class="location" style="color: #3E8775;">
        <i class='bx bx-map'></i>
        <span>_, _</span>
      </div>
      <div class="bottom-details">
        <div class="column feels">
          <i class='bx bxs-thermometer'></i>
          <div class="details">
            <div class="temp">
              <span class="numb-2">_</span>
              <span class="deg">°</span>C
            </div>
            <p style="color: #3E8775;padding: 4px;">Feels like</p>
          </div>
        </div>
        <div class="column humidity">
          <i class='bx bxs-droplet-half'></i>
          <div class="details">
            <span>_</span>
            <p style="color: #3E8775;padding: 4px;">Humidity</p>
          </div>
        </div>
      </div>
    </section>
  </div>
<script src="weather.js" defer></script>
  <div class="background-LUA">
    <img style="top: -288px; position: relative;" src="https://source.unsplash.com/1600x720/?monuments-of-india" alt="Image cannot be found">
  </div>  
    <div class="hero-section-JKk">
      <div class="auto-group-yat4-1EA">
        <div class="group-1-8Jn">
          <p class="journeyuncharted-4iE">JourneyUncharted</p>
          <p class="live-explore-repeat-PVc">Live, Explore, Repeat</p>
        </div>
        <div class="welcome-to-our-website-your-ultimate-guide-to-exploring-the-world-from-breathtaking-natural-landscapes-to-fascinating-cultural-experiences-we-have-everything-you-need-to-plan-your-next-adventure-7Ai">Welcome to our website, your ultimate guide to exploring the world! From breathtaking natural landscapes to fascinating cultural experiences, we have everything you need to plan your next adventure.</div>
      </div>
      <div class="blob-haikei-1-NF4">
        <img class="group-Ws4" src="./assets/group.png"/>
        <img class="imageedit23739459745-1-SVp" src="./assets/imageedit23739459745-1.png"/>
      </div>

    </div>
    <button class="cssbuttons-io-button" style="font-family: Mohave, 'Source Sans Pro';align-content: center;"> Get started
      <div class="icon">
        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
      </div>
    </button>
    <br><br><br><br><br><br><br><br>
    <div id="clouds">
      <div class="cloud x1"></div>
      <!-- Time for multiple clouds to dance around -->
      <div class="cloud x2"></div>
      <div class="cloud x3"></div>
      <div class="cloud x4"></div>
      <div class="cloud x5"></div>
    </div>
    <!-- Thats the markup! -->
    <!-- That looks cool. We are done!! -->
    
    <div class="card">
      <p class="c1"><span>Plan your tour</span></p>
      <p class="c2"><span>Your destinations</span></p>
      <p class="c3"><span>Hotels</span></p>
      <p class="c4"><span>Restaurants</span></p>
  </div>
  </div>
</div> 

<div class="container">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fas fa-map-marker-alt"></i>
        <div class="topic">Address</div>
        <div class="text-one">west Bengal,</div>
        <div class="text-two">Durgapur</div>
      </div>
      <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one">9876543210</div>
        <div class="text-two">8907654321</div>
      </div>
      <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">journeyunchated@gmail.com</div>
        <div class="text-two">info@JourneyUncharted.com</div>
      </div>
    </div>

  </div>
  </div>
</div> 
<footer>
      <div class="footer-content">
          <h3>We the Community of Journey Uncharted</h3>
          <p>Looking for inspiration for your next trip? Browse through our selection of top destinations and start planning your dream vacation today. Our team of travel experts is dedicated to providing you with the best information, tips, and resources to make your journey a success!</p>
      </div>
      <div class="footer-bottom">
          <p>copyright &copy; <a href="#">JourneyUncharted</a>  </p>
                  <div class="footer-menu">
                    <ul class="f-menu">
                      <li><a href="">Home</a></li>
                      <li><a href="">About</a></li>
                      <li><a href="">Contact</a></li>
                      <li><a href="">Blog</a></li>
                    </ul>
                  </div>
      </div>

  </footer>
</body>
</body>
</html>