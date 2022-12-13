 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
     <div class="container d-flex justify-content-between">

         <div class="logo">
             <h1><a href="{{ url('/#') }}"><span>e</span>Government</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar">
             <ul>
                 @if (Auth::user())
                     <!-- <li><a class="nav-link scrollto active">Halo, {{ Auth::user()->username }}</a></li> -->
                     <li><a class="nav-link scrollto" href="{{ url('/#') }}">Beranda</a></li>
                     <li><a class="nav-link scrollto" href="{{ url('/#pricing') }}">Langganan</a></li>
                     <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}">Dashboard</a></li>
                     <li class="dropdown"><a href="#"><span>{{ Auth::user()->username }}</span> <i
                                 class="bi bi-chevron-down"></i></a>
                         <ul>
                             <li><a href="#">Profile</a></li>
                             <li><a href="{{ url('riwayat-pembelian') }}">Riwayat Pembelian</a></li>
                             <li>
                                 <form action="{{ url('logout') }}" method="POST" class="my-login-validation"
                                     novalidate="">
                                     @csrf
                                     <button class="btn btn-light">Keluar</button>
                                 </form>
                             </li>
                         </ul>
                     </li>
             </ul>
         @else
             <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>

             <!-- <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> -->

             <li><a href="{{ url('sign-in') }}"
                     class="btn-get-started scrollto animate__animated animate__fadeInUp">Masuk</a></li>
             <li><a href="{{ url('sign-up') }}"
                     class="btn-get-started scrollto animate__animated animate__fadeInUp">Daftar</a>
             </li>
             @endif
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
