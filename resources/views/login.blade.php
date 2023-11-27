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
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');
    #top{
        background: #113946;
    }
    #top a{
        padding: 1% 0% 1% 3%;
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
    }

    button {
        all: unset;
        }
    button:focus {
        outline: revert;
    }
    #page h4{
        color: #001524;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: 154.4%; 
        letter-spacing: -0.48px;
    }
    #page a{
        text-decoration: none;
        color: white;
    }
    .col-md-6 input{
        border-radius: 30px;
        background: #D9D9D9;
        width: 370px;
        height: 31px;
        flex-shrink: 0;
    }
    .col-md-6 h4{
        text-align: center;
    }
    </style>
</head>
<body>
    <section id="top">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Log In</a>
                    <ul class="nav justify-content-end">
                        <a href="/"><button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 46 44" fill="none">
                            <path d="M34.5 11L11.5 33" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 11L34.5 33" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </button>
                        </a>
                    </ul>
            </div>
        </nav>
    </section>

    <section id="page">
        <div class="container-fluid" style="margin-left: -2%;">
            <div class="row" >
                <div class="col-md-6">
                    <img src="{{ asset('images/Group 21.svg') }}" alt="gambar" width="100%; height:20%;">
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center" style="padding-top: 15%;">
                        <h4 style="text-align: center;">No. Handphone / Email</h4>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="row justify-content-center" style="padding-top: 5%;">
                        <h4>Password</h4>
                        <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="row" style="padding-top: 10%;">
                        <div class="col-md-6" style="text-align: center;">
                            <a href="/signup">
                            <h6 style="color: #001524; font-family: Inter; font-size: 13px; font-style: normal; font-weight: 400; line-height: normal; text-decoration: none;">Don't have account? Sign Up</h6></a>
                        </div>
                        <div class="col-md-6" style="text-align: center">
                            <a href="/flights" >
                            <button type="button" class="btn btn-dark" style="border-radius: 30px; width: 100px; height: 30px; flex-shrink: 0;">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>