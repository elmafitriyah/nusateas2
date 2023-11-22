<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
    #top{
        background: #113946;
        height: 5rem;
    }
    #top h5{
        padding-top: 1%;
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    #top h6{
        color: #FFF;
        font-family: Inter;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #page{
        background: #EAD7BB;
        padding-bottom: 5%;
    }
    </style>
</head>
<body>
    <section id="top">
        <div class="container">
            <div class="row">
                <h5>Terbang dari <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg> Tiba di</h5>
            </div>
            <div class="row">
                <h6>Keberangkatan, penumpang, kelas</h6>
            </div>
        </div>
    </section>

    <section id="page">
        <div class="container" style="padding-left: 17%">
            <div class="row" style="padding:4% 0% 4% 0%;">
                <div class="col-md-12">
                    <img src="{{ asset('images/1.svg')}}" alt="tiket" style="width: 80%;">
                </div>
            </div>
                <div class="row" style="padding:2% 0% 2% 0%;">
                    <div class="col-md-12">
                        <img src="{{ asset('images/2.svg') }}" alt="tiket" style="width: 80%;">
                    </div>
                </div>
                <div class="row" style="padding:2% 0% 2% 0%;">
                    <div class="col-md-12">
                        <img src="{{ asset('images/3.svg') }}" alt="tiket" style="width: 80%;">
                    </div>
                </div>
                <div class="row" style="padding:4% 0% 4% 0%;">
                    <div class="col-md-12">
                        <img src="{{ asset('images/4.svg') }}" alt="tiket" style="width: 80%;">
                    </div>
                </div>
            </div>
    </section>
</body>
</html>