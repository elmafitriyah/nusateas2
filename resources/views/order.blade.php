<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');

    .navbar-brand{
        margin-left: 3%;
    }
    .navbar{
        background: #113946;
    }
    .navbar-brand{
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    .container-fluid a{
        font-family: 'inter'; 
        font-weight: 400;
        color: #FFF;
    }
    .col-md-4 h5{
        color: #000;
        font-family: Inter;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .col-md-8 h5{
        color: #000;
        font-family: Inter;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    
    .col-md-4 h6{
        color: #000;
        font-family: Inter;
        font-size: 17px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    #book{padding-top: 5%;
        padding-bottom: 6%;
    }
    
    #book .container{
        width: auto;
        height: auto;
        flex-shrink: 0;
        border-radius: 5px; 
        background: #D9D9D9;
        padding: 3% 5% 3% 5%;
    }
    .container a{
        text-decoration: none;
    }

    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <script>
        window.alert('pemesanan telah berhasil');
    </script>
    <section id="waduh">
            <nav class="navbar">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#" style="font-weight: 700;">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    NUSATEAS 
                  </a>
                  <ul class="nav justify-content-center" style="margin-right:35%;">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/flights">Flights</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" style="color:#D6CC99;">My Book</a>
                    </li>
                  </ul>
                </div>
            </nav>
    </section>

    <section id="book">
        <div class="container">
            <a href="/rilticket">
            <div class="row">
                <div class="col-md-4">
                    <h5>Lion Air<svg width="85" height="69" viewBox="0 0 85 69" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="85" height="69" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_179_22" transform="matrix(0.00666667 0 0 0.00821256 0 -0.115942)"/>
                        </pattern>
                        <image id="image0_179_22" width="150" height="150" xlink:href="data:image/png;base64,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"/>
                        </defs></svg></h5>
                </div>
                <div class="col-md-8">
                    <div class="row"><h5>Lion Air</h5></div>
                    <div class="row"><hr>
                        
                        </div>
                    <div class="row"><h5>Sabtu, 9 Januari 2012</h5>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 4%;">
                <div class="col-md-4">
                    <div class="row"><h6>Kode Booking</h6></div> 
                    <div class="row"><h6>83724924837</h6></div>   
                </div>
                <div class="col-md-4">
                    <div class="row"><h6>Jakarta</h6></div>
                    <div class="row"><h6>Soekarno Hatta</h6></div>
                    <div class="row"><h6>Berangkat 15.40</h6></div>
                </div>
                <div class="col-md-4">
                    <div class="row"><h6>Surabaya</h6></div>
                    <div class="row"><h6>Juanda</h6></div> 
                    <div class="row"><h6>Tiba 16.55</h6></div>
                </div>
            </div>
        </div>
        </a>
        <div class="container" style="margin-top: 3%;">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sriwijaya Air <img src="{{ asset('images/sa.svg') }}" alt="sriwijaya"></h5>
                </div>
                <div class="col-md-8">
                    <div class="row"><h5>Sriwijaya Air</h5></div>
                    <div class="row"><hr>
                        </div>
                    <div class="row"><h5>Sabtu, 9 Februari 2012</h5>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 4%;">
                <div class="col-md-4">
                    <div class="row"><h6>Kode Booking</h6></div> 
                    <div class="row"><h6>83724924837</h6></div>   
                </div>
                <div class="col-md-4">
                    <div class="row"><h6>Jakarta</h6></div>
                    <div class="row"><h6>Soekarno Hatta</h6></div>
                    <div class="row"><h6>Berangkat 09.28</h6></div>
                </div>
                <div class="col-md-4">
                    <div class="row"><h6>Surabaya</h6></div>
                    <div class="row"><h6>Juanda</h6></div> 
                    <div class="row"><h6>Tiba 11.00</h6></div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>