<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusateas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
    .container-fluid a{
        color: white;
    }
    #nav-link{
        font-family: 'inter'; font-weight: 400;
    }
    .navbar-brand{
        margin-left: 3%;
    }
    .card-body{
        background-color: #EAD7BB;
    }
    #hom1 a{
        text-decoration: none;
    }
    #hom1 button{
        width: 45%;
    }
    #hom2{
        padding-top: 2%;
        padding-bottom: 3%;
    }
    #dis{
        padding: 4% 0% 8% 5%;
    }
    #hom3{
        padding: 11% 0% 11% 0%;
        background: #FFF2D8;
    }
    /* #hom4{
        margin-left: -20%
    } */
    #hom4 h2{
        color: #113946;
        font-family: Inter;
        font-size: 40px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    #hom4 p{
        color: #001524; 
        text-align: justify; 
        font-family: Inter; 
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
    }
    #footer{
        background: #113946;
        padding: 3% 0% 3% 0%; 
    }
    #footer h2{
        color: #FFF;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    #footer h3{
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    #footer li a{
        color: #C9BFA4;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #footer a{
        text-decoration: none;
    }
    .card:hover{
        transform: scale(1.15);
    }
    .card{
        transition: all 0.3s;
    }
    
    </style>
</head>
<body>
    <section id="nav">
        <nav class="navbar" style="background-color: #113946;">
            <div class="container-fluid justify-content-between">
              <a class="navbar-brand" href="#" style="font-family: 'inter'; font-weight: 800;" style="width: 11%"><img src="{{ asset('images/logo.svg') }}" alt="logo" style="width: 12%;">  NUSATEAS</a>
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#hom2">Flights</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#">My Book</a>
                </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="#hom3">Feature</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hom4">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
              </li>
            </ul>
            <ul>
                <input type="button" value="" hidden>
            </ul>
              {{-- <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="#">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="background-color: black;">Sign Up</a>
                  </li>
              </ul> --}}
            </div>
          </nav>
    </section>

    <section id="hom1">
        <div class="container-fluid" style="background-image: url( {{ asset('images/buset.svg') }});">
            <div class="row" style="font-family: Inter">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 flex items-center" style="background-image: url( {{ asset('images/ktk.svg') }}); padding-top:7%; padding-bottom:7%">
                    <div class="row" style="font-weight: 800; font-size:35px; color :white; margin-top: 8%; margin-left:10%;">NUSATEAS</div>
                    <div class="row" style="font-weight:700; font-size:25px; color:black; margin-top: 5%; margin-left:10%; width: 60%;">Layanan Penerbangan Untuk Wilayah Nusantara</div>
                    <div class="row text-center" style="font-weight:300; color:white; margin-top: 5%; margin-left:30%;">Let's Join With Us!</div>
                    <div class="row text-center" style="margin-top: 5%;">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-dark"><a href="/signup">Sign Up</a></button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-outline-dark"><a href="/login">LogIn</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hom2" style="background-color: #ECECEC">
        <div class="container">
            <div class="row text-center">
            <h2 style="color: #001524; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25); font-family: Inter; font-size: 30px; font-style: normal; font-weight: 600; line-height: 154.4%; /* 77.2px */ letter-spacing: -1px;">
                Penerbangan Ke-
            </h2>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                      <img src="{{ asset('images/jkt.png') }}" class="card-img-top" alt="jakartaa">
                      <div class="card-body">
                        <h5 class="card-title text-center">Jakarta</h5>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('images/sby.png') }}" class="card-img-top" alt="surabaya">
                      <div class="card-body">
                        <h5 class="card-title text-center">Surabaya</h5>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('images/bali.png') }}" class="card-img-top" alt="bali">
                      <div class="card-body">
                        <h5 class="card-title text-center">Bali</h5>
                      </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/bkl.png') }}" class="card-img-top" alt="bengkulu">
                        <div class="card-body">
                          <h5 class="card-title text-center">Bengkulu</h5>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </section>

    <section id="dis" style="background: #113946;">
        <div class="container">
            <div class="row">
                <h2 style="color: #FFF; font-family: Inter; font-size: 30px; font-style: normal; font-weight: 800; line-height: 154.4%; /* 74.112px */letter-spacing: -0.96px;">
                    DISCOUNT!
                </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <img src="{{ asset('images/dis1.svg') }}" alt="diskonnnnn" style="width: 90%">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img src="{{ asset('images/dis2.svg') }}" alt="diskon jugaa" style="width: 90%">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img src="{{ asset('images/dis3.svg') }}" alt="diskon lagii" style="width: 90%">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section id="hom3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row" style="padding-bottom: 8%"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="66" viewBox="0 0 110 106" fill="none">
                        <path d="M6.24304 100.273H100.015" stroke="#445D48" stroke-width="11.2" stroke-linecap="round"/>
                        <path d="M97.9303 31.9945L33.9888 56.5923C30.0664 58.1024 28.0999 58.8574 26.187 58.8518C24.3058 58.8517 22.4577 58.3348 20.8286 57.3529C19.1729 56.3462 17.8118 54.6403 15.0951 51.2231C8.97052 43.5216 5.91088 39.668 6.00198 37.5092C6.05056 36.4031 6.41257 35.337 7.04215 34.4459C7.67172 33.5548 8.54053 32.8788 9.5385 32.5035C11.4836 31.7652 15.8239 33.6388 24.4991 37.3805C25.619 37.8615 26.1763 38.102 26.7496 38.2083C27.3647 38.3214 27.9939 38.3214 28.609 38.2083C29.1877 38.102 29.7449 37.8615 30.8648 37.3805L34.9747 35.6075C37.9004 34.3435 39.3632 33.7171 40.1831 32.744C40.743 32.0828 41.1451 31.2927 41.3565 30.4382C41.5679 29.5838 41.5826 28.6893 41.3994 27.8278C41.1315 26.5638 40.1455 25.2718 38.1737 22.6934C33.5172 16.6083 31.1917 13.5658 31.1274 11.7201C31.0853 10.4782 31.4406 9.257 32.1372 8.2493C32.8339 7.24159 33.8323 6.50476 34.9747 6.1551C36.668 5.63496 40.1723 6.97726 47.1704 9.65629L65.6193 16.7258C68.6414 17.8891 70.1578 18.4652 71.7439 18.5603C73.3246 18.6553 74.8946 18.2638 78.0239 17.4752L92.6469 13.8007C94.9078 13.2377 97.2894 13.5965 99.3055 14.8039C101.322 16.0112 102.82 17.9761 103.496 20.2975C104.171 22.6189 103.973 25.1218 102.94 27.2956C101.908 29.4693 100.12 31.1499 97.941 31.9945H97.9303Z" stroke="#445D48" stroke-width="11.2"/>
                      </svg>
                    </div>
                    <div class="row">
                        <p style="color: #001524; text-align: center; font-family: Inter; font-size: 25px; font-style: normal; font-weight: 400">
                        Pemesanan tiket pesawat <br> online lebih mudah dan efisien, <br>tidak perlu antre sehingga lebih cepat
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row" style="padding-bottom: 8%;"><svg xmlns="http://www.w3.org/2000/svg" width="82" height="52" viewBox="0 0 122 97" fill="none">
                            <path d="M6 72.4182V90.5012" stroke="#445D48" stroke-width="11.2027" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.9633 30.2246V18.1693C16.9633 11.5114 21.8717 6.11401 27.9266 6.11401H93.7065C99.7616 6.11401 104.67 11.5114 104.67 18.1693V30.2246" stroke="#445D48" stroke-width="11.2027" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M104.67 30.2246C98.6149 30.2246 93.7066 35.6219 93.7066 42.2799V54.3352H27.9266V42.2799C27.9266 35.6219 23.0182 30.2246 16.9633 30.2246C10.9084 30.2246 6 35.6219 6 42.2799V78.4458H115.633V42.2799C115.633 35.6219 110.725 30.2246 104.67 30.2246Z" stroke="#445D48" stroke-width="11.2027" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M115.633 72.4182V90.5012" stroke="#445D48" stroke-width="11.2027" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                    </div>
                    <div class="row">
                        <p style="color: #001524; text-align: center; font-family: Inter; font-size: 25px; font-style: normal; font-weight: 400;">
                        Pemilihan tempat duduk dalam <br> sehingga membuat nyaman selama <br>perjalanan dan dapat duduk bersama <br>orang yang diinginkan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hom4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <img src="{{ asset('images/btm.jpg') }}" alt="anjay slebeww" style="width: 118%; margin-left:-20%;">
                </div>
                <div class="col-lg-3" style="padding: 5% 0% 5% 0%;">
                    <h2>NUSATEAS</h2>
                    <p>Website ini dirangkai untuk mempermudah para traveler nusantara. Memang tujuan utama pembuatan ini untuk mengenalkan pariwisata yang ada di nusantara agar mudah di akses dan tentunya lebih efisien. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row"><h2>Sosial Media</h2></div>
                    <div class="row">
                        <a href="https://open.spotify.com/track/2zZgfxFyDHDHJzGrs4b9es?si=0ac0721c09414bc5">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="34" height="28" viewBox="0 0 54 48" fill="none">
                            <path d="M26.9347 33.3308C33.055 33.3308 38.0167 29.0146 38.0167 23.6905C38.0167 18.3664 33.055 14.0503 26.9347 14.0503C20.8142 14.0503 15.8526 18.3664 15.8526 23.6905C15.8526 29.0146 20.8142 33.3308 26.9347 33.3308Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 33.3307V14.0503C2 7.39511 8.20202 2 15.8526 2H38.0167C45.6672 2 51.8693 7.39511 51.8693 14.0503V33.3307C51.8693 39.9859 45.6672 45.381 38.0167 45.381H15.8526C8.20202 45.381 2 39.9859 2 33.3307Z" stroke="white" stroke-width="4"/>
                            <path d="M42.1725 10.4605L42.2007 10.4329" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        NUSATEAS.OFFICIAL</h3></a>
                    </div>
                    <div class="row">
                        <a href="https://open.spotify.com/track/7FlHNJT4TC120CDvFOHzei?si=3467ab0a70a24996"><h3><svg xmlns="http://www.w3.org/2000/svg" width="41" height="24" viewBox="0 0 61 44" fill="none">
                        <path d="M36.0073 22.3123L26.3802 27.7523V16.8723L36.0073 22.3123Z" fill="black" stroke="white" stroke-width="4.12591" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 24.2366V20.3876C3 12.5122 3 8.5746 5.49065 6.04101C7.98133 3.50742 11.9025 3.39774 19.7449 3.1784C23.461 3.07447 27.2571 3 30.5061 3C33.7551 3 37.5512 3.07447 41.2673 3.1784C49.1096 3.39774 53.0308 3.50742 55.5215 6.04101C58.0122 8.5746 58.0122 12.5122 58.0122 20.3876V24.2366C58.0122 32.1118 58.0122 36.0496 55.5215 38.583C53.0308 41.1167 49.1098 41.2263 41.2676 41.4458C37.5512 41.5497 33.7551 41.6242 30.5061 41.6242C27.2571 41.6242 23.4609 41.5497 19.7446 41.4458C11.9024 41.2263 7.98127 41.1167 5.49062 38.583C3 36.0496 3 32.1118 3 24.2366Z" stroke="white" stroke-width="4.12591"/>
                      </svg>
                      NUSATEAS OFFICIAL</h3></a>
                    </div>
                </div>
                <div class="col-md-6" style="padding-top: 4%;">
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#nav">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#hom2">Flights</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#hom3">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hom4">About</a>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
    </section>
</body>
</html>
