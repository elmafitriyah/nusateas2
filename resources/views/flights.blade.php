<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flights</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
    .container-fluid a{
        color: white;
    }
    #nav-link{
        font-family: 'inter'; font-weight: 700;
    }
    #fl1{
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #fl1 .container{
        margin-top: 3%;
        border-radius: 11px;
        background: #738575;
        height: 380px;
        flex-shrink: 0;
    }#fl2{
        padding-top: 2%;
        padding-bottom: 3%;
    }
    .card-body{
        background-color: #EAD7BB;
    }
    #footer{
        background: #113946;
    }
    #footer h4{
        padding: 7% 0% 0% 0%;
        color: #FFF;
        font-family: Inter;
        font-size: 30px;
        font-style: normal;
        font-weight: 800;
        line-height: 156.119%; /* 62.448px */
    }
    #footer h6{
        color: #FFF;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        padding: 30% 0% 0% 51%;
    }
    </style>
</head>
<body>
    <section id="nav">
        <nav class="navbar" style="background-color: #113946;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="font-family: 'inter'; font-weight: 800;">NUSATEAS</a>
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Flights</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">My Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
    </section>

    <section id="fl1">
        <div class="container">
            <div class="row">
                <div class="row" style="padding: 4% 0% 0% 5%;"><h6>Beli dan Jadwalkan Penerbanganmu</h6></div>
                    <div class="row" style="padding: 3% 0% 0% 5%;">
                        <div class="col-md-4">
                            <h6>Terbang dari</h6>
                            <select class="form-select" aria-label="Default select example" style="border-radius: 30px; background: #FFF;">
                                <option selected>Nama Kota</option>
                                <option value="sby">Surabaya</option>
                                <option value="bali">Bali</option>
                                <option value="jkt">Jakarta</option>
                                <option value="bkl">Bengkulu</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <h6>Tiba di</h6>
                            <select class="form-select" aria-label="Default select example" style="border-radius: 30px; background: #FFF;">
                                <option selected>Nama Kota</option>
                                <option value="sby">Surabaya</option>
                                <option value="bali">Bali</option>
                                <option value="jkt">Jakarta</option>
                                <option value="bkl">Bengkulu</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <h6>Keberangkatan</h6>
                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;">
                        </div>
                    </div>
                    <div class="row" style="padding: 3% 0% 0% 5%;">
                        <div class="col-md-4">
                            <h6>Penumpang</h6>
                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;">
                        </div>
                        <div class="col-md-4">
                            <h6>Kelas Layanan</h6>
                            <select class="form-select" aria-label="Default select example" style="border-radius: 30px; background: #FFF;">
                                <option selected>Kelas Layanan</option>
                                <option value="sby">Ekonomi</option>
                                <option value="bali">Business</option>
                                <option value="jkt">First Class</option>
                            </select>
                        </div>
                        <div class="col-md-4" style="padding-top: 3%">
                            <input type="submit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background: #D6CC99; width: 130px; height: 40px; flex-shrink: 0;" value="Cari">                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fl2">
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
    
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Mulai dari Rp- <br> dengan diskon yang melimpah</h4>
                    <h5 style="color: white; font-size:13px; font-family:inter; padding-top:4%">Contact Person : +62 2208042023</h5>
                </div>
                <div class="col-md-6"><h6>*Syarat & Ketentuan berlaku</h6></div>
            </div>
        </div>
    </section>
</body>
</html>