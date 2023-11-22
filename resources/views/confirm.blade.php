<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');

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
    #isi{
        background: #EAD7BB;
        padding-left: 20%;
    }
    </style>
</head>
<body>
    <section id="top">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Penerbangan Lion Air</a>
            </div>
        </nav>
    </section>

    <section id="isi">
        <div class="container">
            <div class="row">
                <div class="row" style="padding:4% 0% 4% 0%;">
                    <div class="col-md-12">
                        <img src="{{ asset('images/4.svg') }}" alt="tiket" style="width: 80%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>