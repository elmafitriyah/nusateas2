<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Lobster+Two:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Lobster+Two:wght@700&display=swap');
        #isi{
            background: #EAD7BB;

        }
        
        .col-md-12{
            color: #fff;
            font-family: Inter; 
            font-size: 20px; 
            text-decoration:none;
            font-style: normal;
            font-weight: 400;
            line-height: normal;"
        }
    </style>
</head>
<body>
    <section id="isi" style="padding: 3% 0% 0% 0%; ">
        <div class="container" style="border-radius: 11px;background: rgba(68, 93, 72, 0.20); padding-left: 7%;padding-bottom: 3%;height: auto; width:auto">
            <div class="row" style="padding: 0% 0% 0% 0%;">
                <div class="col-md-12">
                    <h1 style="color: #000;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal;
                    padding: 2% 0% 0% 0%;">NIK</h1>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;width: 367px; height: 35px;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="color: #000;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal;
                    padding: 2% 0% 1% 0%;">Nama Depan</h1>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;width: 367px; height: 35px;">
                </div>
            
                <div class="col-md-6">
                    <h1 style="color: #000; font-family: Inter; font-size: 20px; font-style: normal; font-weight: 600;
                    line-height: normal; padding: 2% 0% 1% 0%;">Nama Belakang</h1>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;width: 367px; height: 35px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #000;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; padding: 2% 0% 1% 0%;">Jenis Kelamin</h1>
                    <form>
                        <input type="radio" id="html" name="fav_language" value="HTML">
                        <label for="html">Laki-laki</label><br>
                        <input type="radio" id="css" name="fav_language" value="CSS">
                        <label for="css">Perempuan</label><br>
                    </form>
                </div>
                <div class="col-md-6">
                    <h1 style="color: #000;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; padding: 2% 0% 1% 0%;">Alamat</h1>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;width: 367px; height: 60px;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="color: #000;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; padding: 2% 0% 1% 0%;">Tanggal Lahir</h1>
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;width: 367px; height: 35px;">
                </div>
                <div class="col-md-6">
                    <h1 style="color: #000;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; padding: 1% 0% 1% 0%;">No Handphone</h1>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="border-radius: 30px; background:white;width: 367px; height: 35px;">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center" style="padding: 1.5% 0% 7% 16%; align-content:center;">
                <div class="col-md-4"><input type="text" hidden></div>
                <div class="col-md-4" style="justify-content: center;">
                    <a href="/confirm">
                    <button style="border-radius: 10px; background: #113946; width:auto; height: 41px;flex-shrink: 0; color:#fff">
                    Konfirmasi</button>
                    </a>
                </div>
                <div class="col-md-4"><input type="text" hidden></div>
            </div>
        </div>
    </section>
</body>
</html>