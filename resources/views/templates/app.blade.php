<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Warung Jawa</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --bs-primary: rgb(15, 114, 226);
            --bs-primary-rgb: 13, 110, 253;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .hero-section {
            background: linear-gradient(rgb(7, 12, 2), rgba(13, 20, 13, 0)), url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
            color: rgb(11, 11, 11);
            padding: 150px 0;
        }
        
        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: var(--bs-primary);
            color: rgb(251, 241, 240);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .testimonial-card {
            border: none;
            border-radius: 15px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .btn-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
    </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">WarJaw</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Barang
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('item.home')}}">Data Barang</a></li>
                      <li><a class="dropdown-item" href="{{route('item.create')}}">Tambah</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Pembelian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('user.homeuser')}}">Data Akun</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('item.homeshop')}}">Daftar Product</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <div class="container mt-5">
            @yield('content-dinamis')
        </div>

       
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        @stack('script')
    </body>
</html>