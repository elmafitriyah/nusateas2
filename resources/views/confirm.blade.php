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
        padding-bottom: 28%;
    }


.dropbtn {
    align-content: center;
        border-radius: 15px;
        background: #113946;
        cursor: pointer;
        font-family: inter;
        color:white;
        width: auto;
        height: 50px;
        flex-shrink: 0;
}

.dropbtn:hover, .dropbtn:focus {
  background-color:white;
  color: black;
  font-family: inter;
}

.dropdown {
  float: center;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
  align-content: center;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}



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
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6"><input type="text" hidden></div>
                    <div class="col-md-6">
                        <div class="container">
                            <div class="row">
                                <a href="/chair">
                                <div class="col-md-12">
                                    <button class="btn btn-success" style="border-radius: 12px; background: #445D48; width: 53%; height: 40px;flex-shrink: 0;">Pilih Kursi <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 46 26" fill="none">
                                        <path d="M23.0002 14.0833C24.0587 14.0833 24.9168 13.5983 24.9168 13C24.9168 12.4017 24.0587 11.9167 23.0002 11.9167C21.9416 11.9167 21.0835 12.4017 21.0835 13C21.0835 13.5983 21.9416 14.0833 23.0002 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M36.4167 14.0833C37.4752 14.0833 38.3333 13.5983 38.3333 13C38.3333 12.4017 37.4752 11.9167 36.4167 11.9167C35.3581 11.9167 34.5 12.4017 34.5 13C34.5 13.5983 35.3581 14.0833 36.4167 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.58317 14.0833C10.6417 14.0833 11.4998 13.5983 11.4998 13C11.4998 12.4017 10.6417 11.9167 9.58317 11.9167C8.52462 11.9167 7.6665 12.4017 7.6665 13C7.6665 13.5983 8.52462 14.0833 9.58317 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button></a> 
                                </div>
                                <div class="col-md-12 mt-2">
                                    <a href="/promo">
                                    <button type="button" class="btn btn-outline-success" style="width: 53%; height: 40px; border-radius:12px;">Promo <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 46 26" fill="none">
                                        <path d="M23.0002 14.0833C24.0587 14.0833 24.9168 13.5983 24.9168 13C24.9168 12.4017 24.0587 11.9167 23.0002 11.9167C21.9416 11.9167 21.0835 12.4017 21.0835 13C21.0835 13.5983 21.9416 14.0833 23.0002 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M36.4167 14.0833C37.4752 14.0833 38.3333 13.5983 38.3333 13C38.3333 12.4017 37.4752 11.9167 36.4167 11.9167C35.3581 11.9167 34.5 12.4017 34.5 13C34.5 13.5983 35.3581 14.0833 36.4167 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.58317 14.0833C10.6417 14.0833 11.4998 13.5983 11.4998 13C11.4998 12.4017 10.6417 11.9167 9.58317 11.9167C8.52462 11.9167 7.6665 12.4017 7.6665 13C7.6665 13.5983 8.52462 14.0833 9.58317 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg></button></a>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <a href="/data">
                                    <button class="btn btn-success" style="border-radius: 12px; background: #445D48; width: 53%; height: 40px;flex-shrink: 0;">Data Diri <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 46 26" fill="none">
                                        <path d="M23.0002 14.0833C24.0587 14.0833 24.9168 13.5983 24.9168 13C24.9168 12.4017 24.0587 11.9167 23.0002 11.9167C21.9416 11.9167 21.0835 12.4017 21.0835 13C21.0835 13.5983 21.9416 14.0833 23.0002 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M36.4167 14.0833C37.4752 14.0833 38.3333 13.5983 38.3333 13C38.3333 12.4017 37.4752 11.9167 36.4167 11.9167C35.3581 11.9167 34.5 12.4017 34.5 13C34.5 13.5983 35.3581 14.0833 36.4167 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.58317 14.0833C10.6417 14.0833 11.4998 13.5983 11.4998 13C11.4998 12.4017 10.6417 11.9167 9.58317 11.9167C8.52462 11.9167 7.6665 12.4017 7.6665 13C7.6665 13.5983 8.52462 14.0833 9.58317 14.0833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                      </svg></button></a>   
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-2"><input type="text" hidden></div>
        <div class="col-md-8">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Pembayaran</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="/order"><img src="{{ asset('images/mandiri.svg') }}">
                    </a>
                  <a href="/order"><img src="{{ asset('images/bni.svg') }}"></a>
                  <a href="/order"><img src="{{ asset('images/bca.svg') }}" alt="bca"></a>
                  <a href="/order"><img src="{{ asset('images/ovo.svg') }}" alt="ovo"></a>
                  <a href="/order"><img src="{{ asset('images/dana.svg') }}" alt="dana"></a>
                  <a href="/order"><img src="{{ asset('images/btn.svg') }}" alt="btn"></a>
                </div>
              </div>
              {{-- <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn m-1">Click</div>
                <ul class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                  <li><a>Item 1</a></li>
                  <li><a>Item 2</a></li>
                </ul>
              </div> --}}
              {{-- <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Open this select menu</option>
            <option value=""><a href="/order"><img src="{{ asset('images/mandiri.svg') }}"></a></option>
            <option value=""><a href="/order"><img src="{{ asset('images/bni.svg') }}"></a></option>
            <option value=""><a href="/order"><img src="{{ asset('images/bca.svg') }}" alt="bca"></a></option>
            <option value=""><a href="/order"><img src="{{ asset('images/ovo.svg') }}" alt="ovo"></a></option>
            <option value=""><a href="/order"><img src="{{ asset('images/dana.svg') }}" alt="dana"></a></option>
            <option value=""><a href="/order"><img src="{{ asset('images/btn.svg') }}" alt="btn"></a></option>
              </select> --}}
              <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }
                
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
            {{-- <div class="dropup-center dropup">
                <a href="/order">
                <button  type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pembayaran
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><img src="{{ asset('images/mandiri.svg') }}" alt="mandiri"></a></li>
                  <li><a class="dropdown-item" href="#"><img src="{{ asset('images/bni.svg') }}" alt="bni"></a></li>
                  <li><a class="dropdown-item" href="#"><img src="{{ asset('images/bca.svg') }}" alt="bca"></a></li>
                  <li><a class="dropdown-item" href="#"><img src="{{ asset('images/ovo.svg') }}" alt="ovo"></a></li>
                  <li><a class="dropdown-item" href="#"><img src="{{ asset('images/dana.svg') }}" alt="dana"></a></li>
                  <li><a class="dropdown-item" href="#"><img src="{{ asset('images/btn.svg') }}" alt="btn"></a></li>
                </ul>
            </div> --}}

            {{-- <select class="form-select" aria-label="Default select example" style="border-radius: 30px; background: #FFF;">
                <option selected>Nama Kota</option>
                <option value="sby"><img src="{{ asset('images/mandiri.svg') }}" alt="mandiri"></option>
                <option value="bali"><img src="{{ asset('images/bni.svg') }}" alt="bni"></option>
                <option value="jkt"><img src="{{ asset('images/bca.svg') }}" alt="bca"></option>
                <option value="bkl"><img src="{{ asset('images/dana.svg') }}" alt="dana"></option>
            </select> --}}
            </div>    
        </div>
        <div class="col-md-2"><input type="text" hidden></div>
        </div>
    </section>
</body>
</html>