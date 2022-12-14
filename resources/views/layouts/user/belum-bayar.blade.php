 <!-- ======= hero Section ======= -->
 <section id="hero">
     <div class="hero-container">
         <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

             <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

             <div class="carousel-inner" role="listbox">

                 <div class="carousel-item active" style="background-image: url(user/assets/img/assets/warning.png)">
                     <div class="carousel-container">
                         <div class="container">
                             <p class="animate__animated animate__fadeInUp">Silahkan lakukan transaksi untuk
                                mengakses dashboard</p>
                             @if (Auth::user())
                                 <a href="{{ url('/#pricing') }}"
                                     class="btn-get-started scrollto animate__animated animate__fadeInUp">Mulai</a>
                             @else
                             @endif
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </div>
 </section><!-- End Hero Section -->
