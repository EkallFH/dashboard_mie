<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mie Ayam Mas Don</title>
    <link rel="stylesheet" href="stylehome.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="icon" href="img/logo.png" type="image/ico">
  </head>
  <body>
    <!-- NAVBAR -->
    <section>
      <header class="header">
        <a href="beranda.php" class="logo">
          <img src="img/logo.png" alt="" />
        </a>
        <nav>
          <ul class="navbar">
            <li><a href="../about/beranda.php">About Us</a></li>
            <li><a href="../menu/menu.php">Menu</a></li>
            <li><a href="../kontak/pagecontack.php">Contacts</a></li>
          </ul>

          <div class="main">
            <div class="circle">
              <a href="#" class="keranjang"><i class="bx bxs-cart"></i></a>
            </div>
            <a href="whatsapp://send?text=Permisi Kak apakah mie ayam mas don masih open?&phone=+6285233286848" class="btn">Reservasion</a>
          </div>
        </nav>
      </header>
    </section>
    <!-- NAVBAR -->

    <!-- BRAND -->
    <section>
      <div class="content">
        <div class="textBox">
          <h2>WE SERVE THE BEST YOU <span>LOVE</span></h2>
          <p>
            This is a type of restourant which typically serves noodles and
            drink,in addition to light refreshment such as baked goods or
            snack,the term comes from the rench word meaning food.
          </p>
          <a href="#" class="button1">Explore Food</a>
          <a href="#" class="button2"><i class="bx bx-search"></i>Search</a>
        </div>
        <div class="circle1">
          <div class="circle2">
            <div class="circle3">
              <div class="btnchange">
                <a href="#">
                  <button class="noodle">
                    <img src="img/noodle.png" alt="" />
                    <span>Noodle</span>
                  </button>
                </a>
                <a href="#">
                  <button class="snack">
                    <img src="img/noodle.png" alt="" />
                    <span>Snack</span>
                  </button>
                </a>
                <a href="#">
                  <button class="drink">
                    <img src="img/noodle.png" alt="" />
                    <span>Drink</span>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BRAND -->

    <section class="populer">
      <div class="judul">
        <h1>Populer Menu</h1>
      </div>
      <div class="card">
        <img src="img/mieayamceker.png" alt="Mie Ayam" />
        <div class="card-content">
          <h2 class="title">Mie Ayam Ceker</h2>
          <p class="subtitle">Mie Ayam dengan ekstra ceker</p>
        </div>
        <div class="card-price">
          <p class="price">15K</p>
          <button class="kotak">
            <a href="#" class="keranjang"><i class="bx bxs-cart"></i></a>
          </button>
        </div>
      </div>
      <div class="card">
        <img src="img/mieayamceker.png" alt="Mie Ayam" />
        <div class="card-content">
          <h2 class="title">Mie Ayam Ceker</h2>
          <p class="subtitle">Mie Ayam dengan ekstra ceker</p>
        </div>
        <div class="card-price">
          <p class="price">15K</p>
          <button class="kotak">
            <a href="#" class="keranjang"><i class="bx bxs-cart"></i></a>
          </button>
        </div>
      </div>
      <div class="card">
        <img src="img/mieayamceker.png" alt="Mie Ayam" />
        <div class="card-content">
          <h2 class="title">Mie Ayam Ceker</h2>
          <p class="subtitle">Mie Ayam dengan ekstra ceker</p>
        </div>
        <div class="card-price">
          <p class="price">15K</p>
          <button class="kotak">
            <a href="#" class="keranjang"><i class="bx bxs-cart"></i></a>
          </button>
        </div>
      </div>
    </section>

    <!-- Pict Owner -->
    <section class="owner">
      <div class="gambar-owner">
        <div class="circle-owner">
          <img src="img/owner.png" alt="" />
        </div>
      </div>
      <div class="text-owner">
        <h2>
          <span>We Are More</span> Than <br />
          Multiple Service
        </h2>
        <p>
          This is a type of restourant which typically serves noodles and
          drink,in addition to light refreshment such as baked goods or
          snack,the term comes from the rench word meaning food.
        </p>
        <div class="skills">
          <img src="img/phone.png" alt="" />
          <p>online order</p>
        </div>
        <div class="skills">
          <img src="img/timer.png" alt="" />
          <p>fast workmanship</p>
        </div>
        <div class="skills">
          <img src="img/people.png" alt="" />
          <p>serve in a friendly manner</p>
        </div>
        <a href="../about/beranda.html" class="button-owner">About Us</a>
      </div>
    </section>

    <section class="plan">
      <div class="content-plan">
        <div class="text-plan">
          <h2>
            Do You Have Any Dinner Plan Today? <br />
            <span>Reserve Your Table</span>
          </h2>
          <p>
            Make Online Reservation,Read Restaurant reviews from dinner, and
            earn point towards free meals,open table is a real time online
            reservastion
          </p>
          <a href="#" class="button-plan">Make Reservasion</a>
        </div>
        <img src="img/piring.png" alt="" />
      </div>
    </section>

    <script type="text/javascript">
      function imgSlider(anything) {
        document.querySelector(".type").src = anything;
      }
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
