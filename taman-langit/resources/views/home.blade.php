

@extends('layouts.main')

@section('content')
{{-- gambar slide bar --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  class="d-block w-100" src="img/1.jpg" alt="First slide" height="300px">
      </div>
      <div class="carousel-item">
        <img  class="d-block w-100" src="img/2.jpg" alt="Second slide" height="300px" >
      </div>
      <div class="carousel-item">
        <img  class="d-block w-100" src="img/3.jpg" alt="Third slide" height="300px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container mt-4">
    <h2 class="text-center text-success font-weight-bold mb-4">Welcome To Wisata Taman Langit</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique consectetur quam blanditiis, impedit ratione odit inventore ex perspiciatis, tempora nostrum totam rerum. Blanditiis exercitationem ducimus expedita voluptatum, aliquam qui. Debitis quos repellendus inventore, autem aperiam sint, repudiandae exercitationem perferendis porro id, quidem voluptatibus. Nobis, deleniti hic eum architecto quis cumque enim voluptate sint corporis, fugiat inventore maiores sequi similique asperiores exercitationem. At ipsam iure, quae nemo doloremque tempora, reprehenderit magnam adipisci voluptates sint iste ipsum molestias suscipit temporibus aspernatur, inventore sequi hic eligendi eaque. Ipsum doloribus vitae beatae necessitatibus quaerat dolores accusamus molestiae doloremque. Obcaecati repellendus tempora corrupti suscipit sed?</p>
  </div>

  <div class="container mt-4 mb-4">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;" >
            <i class="bi bi-heart-fill text-center" style="font-size:40px; color:rgb(49, 201, 168);"></i>
            <div class="card-body">
              <h5 class="card-title text-center text-success">Fasilitas Lengkap</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <i class="bi bi-chat-left-quote-fill" style=" text-align:center; font-size:40px; color:rgb(49, 201, 168);"></i>
            <div class="card-body">
              <h5 class="card-title text-center text-success">Pelayanan Terbaik</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <i class="bi bi-cash-coin" style=" text-align:center; font-size:40px; color:rgb(49, 201, 168);" ></i>
            <div class="card-body">
              <h5 class="card-title text-center text-success">Harga Terjangkau</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <i class="bi bi-map-fill" style=" text-align:center; font-size:40px; color:rgb(49, 201, 168);"></i>
            <div class="card-body">
              <h5 class="card-title text-center text-success">Sebagai Objek Wisata Favorit</h5>
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
  </div>

<div class="container">
    <h2 class="text-center text-success font-weight-bold mb-4">Pilihan Paket Makanan</h2>
    <div  class="card-columns">
        <div class="card text-center " style="width: 22rem;">
            <div class="card-header">
                <h5 class="card-title text-success">paket 4 orang</h5>
            </div>
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                <div class="card-body">
                <h6 class="card-title text-success">Rp. 120.000</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%;">Detail</a>
            </div>
        </div>
        <div class="card text-center " style="width: 22rem;">
            <div class="card-header">
                <h5 class="card-title text-success">paket 4 orang</h5>
            </div>
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                <div class="card-body">
                <h6 class="card-title text-success">Rp. 120.000</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%;">Detail</a>
            </div>
        </div>
        <div class="card text-center " style="width: 22rem;">
            <div class="card-header">
                <h5 class="card-title text-success">paket 4 orang</h5>
            </div>
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                <div class="card-body">
                <h6 class="card-title text-success">Rp. 120.000</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%;">Detail</a>
            </div>
        </div>
        <div class="card text-center " style="width: 22rem;">
            <div class="card-header">
                <h5 class="card-title text-success">paket 4 orang</h5>
            </div>
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                <div class="card-body">
                <h6 class="card-title text-success">Rp. 120.000</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%;">Detail</a>
            </div>
        </div>
        <div class="card text-center " style="width: 22rem;">
            <div class="card-header">
                <h5 class="card-title text-success">paket 4 orang</h5>
            </div>
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
                <div class="card-body">
                <h6 class="card-title text-success">Rp. 120.000</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%;">Detail</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h2 class="text-center text-success font-weight-bold mt-4">Galeri wisata Taman Langit</h2>
    <div class="card-columns">
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
        <div class="card text-center">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        </div>
    </div>
</div>
<!-- Testimonial & Reservasi !-->
<div class="rental-testimoni">
    <div class="container">
        <div class="row mb-4">                  	
            <div class="col-md-12"><h3 class="center pb-3">Testimonial</h3>
                <div id="owl-demo5" class="owl-carousel owl-theme">
                                        <div class="item">
                        <div class="testimoni">
                            <h3>Andika - Surabaya</h3>
                            <p>Pelayanan memuaskan, Mobil kondisi prima</p>
                            <ul class="flex my-2 mx-auto justify-center list-unstyled">
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                                        <div class="item">
                        <div class="testimoni">
                            <h3>Tama - Malang</h3>
                            <p>Harga sewa terjangkau, rekomended banget</p>
                            <ul class="flex my-2 mx-auto justify-center list-unstyled">
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                                        <div class="item">
                        <div class="testimoni">
                            <h3>Krisna - Bali</h3>
                            <p>Supirnya ramah dan berpengalaman!</p>
                            <ul class="flex my-2 mx-auto justify-center list-unstyled">
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                                        <div class="item">
                        <div class="testimoni">
                            <h3>Ayu - Blitar</h3>
                            <p>Terima kasih sudah diantar berwisata seharian!</p>
                            <ul class="flex my-2 mx-auto justify-center list-unstyled">
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-gray-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                                        <div class="item">
                        <div class="testimoni">
                            <h3>Doni - Solo</h3>
                            <p>Penjemputan ke Bandara cepet banget!</p>
                            <ul class="flex my-2 mx-auto justify-center list-unstyled">
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                                <li class="mr-3 text-yellow-300">
                                    <!-- icon -->
                                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill="currentColor" viewBox='0 0 512 512'><path class="rating-svg" d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z'/></svg>
                                    <!-- <i class="fa fa-star"></i> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                                    </div>
            </div>
                    </div>
    </div>
</div>
<div class="container">
    <h2 class="text-center text-success font-weight-bold mt-4">Testimonial</h2>
</div>

@endsection
