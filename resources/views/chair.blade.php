<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan Kursi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
    body{
        background: #EAD7BB;
    }
    #chair .text{ 
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
    #chair h3{
        color:#fff;
        font-family: Inter;
        font-size: 25px;
        font-style: normal;
        font-weight: 800;
    }
    #chair.row {
        justify-content: center;
        }

    /* .navbar{
        border-radius: 10px;
        background: #113946;
        line-height: normal;
        width: auto;
        height: 40%;
        flex-shrink: 0;
    } */
    .col-md-12 img{
        width: 70%;
    }
    .col-md-12{
        padding: 4% 0% 0% 23%;
    }
    .col-md-6 input{
        border-radius: 11px;
        background: #445D48; 
        width:auto;
        color:white; 
        height: 40px; 
        flex-shrink: 0;
        font-family: inter;
        padding: 1% 4% 1% 4%;
    }
    .col-md-6 h4{
        color: #001524;
        font-family: Inter;
        font-size: 17px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        padding-left: 39%;
        padding-top: 3%;
    }
    </style>
</head>
<body>
    <section id="chair">
        <div class="container justify-content-center">
            <div class="row d-flex justify-content-center" style="margin-top: 4%">
                <div class="col-md-2"><input type="text" hidden></div>
                <div class="col-md-8 d-flex justify-content-center"><div class="text"><h3>Pemilihan Kursi</h3></div></div>
                <div class="col-md-2"><input type="text" hidden></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/plane.svg') }}" alt="kursi">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="padding-top: 3%;">
                <div class="col-md-6" style="background: #C9BFA4;">
                    <div class="row">
                        <h4>Keterangan :</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row"><h6><svg xmlns="http://www.w3.org/2000/svg" width="28" height="21" viewBox="0 0 38 31" fill="none">
                                <ellipse cx="19" cy="15.5" rx="19" ry="15.5" fill="#6193AF"/>
                              </svg> Kamar Mandi</h6></div>
                            <div class="row"><h6><svg xmlns="http://www.w3.org/2000/svg" width="28" height="21" viewBox="0 0 38 31" fill="none">
                                <ellipse cx="19" cy="15.5" rx="19" ry="15.5" fill="#BCA37F"/>
                              </svg> Dapur</h6></div>
                            <div class="row"><h6><svg xmlns="http://www.w3.org/2000/svg" width="28" height="21" viewBox="0 0 38 31" fill="none">
                                <ellipse cx="19" cy="15.5" rx="19" ry="15.5" fill="#D9D9D9"/>
                              </svg> Ruang Ganti</h6></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row"><h6><svg width="22" height="17" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="27" fill="#001524"/>
                                </svg>
                                Kursi Kosong</h6></div>
                            <div class="row"><h6><svg width="22" height="17" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="26" fill="#33FF00"/>
                                </svg>
                                Kursi Sudah Dipesan</h6></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="/confirm" style="text-decoration: none"><input type="submit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Konfirmasi" style="margin: 10% 0% 0% 40%;"></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>