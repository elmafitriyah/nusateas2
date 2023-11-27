<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
    #promo .text{ 
        border-radius: 10px;
        padding: 1% 0% 1% 0%;
        background: #113946;
        line-height: normal;
        width: 711px;
        height: auto;
        flex-shrink: 0;
        text-align: center;
        justify-content: center;
    }
    #promo h3{
        color:#fff;
        font-family: Inter;
        font-size: 25px;
        font-style: normal;
        font-weight: 800;
    }
    #promo.row {
        justify-content: center;
        }
    .col-md-6 h5{
        padding-left: 0%;
        color: #113946;
        font-family: Inter;
        font-size: 25px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    .col-md-6 p{
        padding-left: 6%;
        color: #113946;
        font-family: Inter;
        font-size: 10px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .col-md-6 a{
        border-radius: 11px;
        background: #445D48;
        color: white;
    }
    .card{
        padding: 0% 6% 33% 6%;
    }
    body{
        background: #EAD7BB;
    }
    </style>
</head>
<body>
    <section id="promo">
        <div class="container justify-content-center">
            <div class="row d-flex justify-content-center" style="margin-top: 4%">
                <div class="col-md-2"></div>
                <div class="col-md-8 d-flex justify-content-center"><div class="text"><h3>Promo!</h3></div></div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <div class="container">
            <div class="row" style="padding: 4% 0% 0% 0%;">
                <div class="col-md-6">
                    <div class="row flex-row-reverse" style="padding-bottom: 5%; margin-right:2%;">
                        <div class="card" style="width: 300px;height: 160px;flex-shrink: 0; border-radius: 30px;background: #FFF;">
                            <div class="card-body">
                            <h5 class="card-title">Voucher <br> Potongan 5%</h5>
                            <p class="card-text">*Syarat dan ketentuan berlaku.</p>
                            <a href="/confirm" class="btn">Gunakan</a>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-row-reverse" style="padding-bottom: 5%; margin-right:2%;">
                        <div class="card" style="width: 300px;height: 160px;flex-shrink: 0; border-radius: 30px;background: #FFF;">
                            <div class="card-body">
                              <h5 class="card-title">Voucher <br> Potongan 2%</h5>
                              <p class="card-text">*Syarat dan ketentuan berlaku.</p>
                              <a href="/confirm" class="btn">Gunakan</a>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <div class="col-md-6" >
                <div class="row flex-row" style="padding-bottom: 5%; margin-right:2%;" >
                  <div class="card" style="width: 300px;height: 160px;flex-shrink: 0; border-radius: 30px;background: #FFF;">
                    <div class="card-body">
                      <h5 class="card-title">Cashback <br> hingga 35%</h5>
                      <p class="card-text">*Syarat dan ketentuan berlaku.</p>
                      <a href="/confirm" class="btn">Gunakan</a>
                    </div>
                  </div>
                </div>
                
                <div class="row flex-row" style="margin-right:2%;">
                        <div class="card" style="width: 300px;height: 160px;flex-shrink: 0; border-radius: 30px;background: #FFF;">
                          <div class="card-body">
                            <h5 class="card-title">Cashback <br> hingga 7%</h5>
                            <p class="card-text">*Syarat dan ketentuan berlaku.</p>
                            <a href="/confirm" class="btn">Gunakan</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>