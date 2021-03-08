@extends('ecommerce.layout.index')
@section('title', 'Manen.id')

@section('content')
<!-- New Arrival -->
<section class="padding-top-100 padding-bottom-100">
  <div class="container">

    <!-- Main Heading -->
    <div class="heading text-center">
      <h4>Produk Pilihan</h4>
      <hr>
    </div>

    <!-- New Arrival -->
    <div class="arrival-block item-col-3 with-spaces">
      @foreach ($produk as $row)
      <div class="item">
        <div class="img-ser">
          <!-- Images -->
          <img class="img-1" src="{{url('assets/images/').'/'.$row->foto}}" alt=""> <img class="img-2" src="{{url('assets/images/').'/'.$row->foto}}" alt="">
          <!-- Overlay  -->
          <div class="overlay">
            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
          </div>
        </div>
        <!-- Item Name -->
        <div class="item-name"> <a href="/produk/{{$row->id}}" class="i-tittle">{{$row->nama}}</a> <span class="price"><small>Rp.</small>{{ $row->harga_beli }}</span> <a class="deta animated fadeInRight" href="/produk/{{$row->id}}">View Detail</a> </div>
      </div>
      @endforeach
    </div>

    <!-- View All Items -->
    <div class="text-center margin-top-30"> <a href="/listProduk" class="btn margin-right-20">SEE MORE</a> </div>
  </div>
</section>

<section class="shipment">
  <div class="container">
    <ul>
      <li><i class="flaticon-shipped"></i>
        <h4>Free Shipment Over Rp. 200.000</h4>
      </li>
      <li><i class="flaticon-support-1"></i>
        <h4>24/7 online Support</h4>
      </li>
      <li><i class="flaticon-credit-card"></i>
        <h4>100% Secure Payment </h4>
      </li>
      <li><i class="flaticon-box"></i>
        <h4>Delivery Throughout Indonesia</h4>
      </li>
    </ul>
  </div>
</section>

<!-- Popular Products -->
<section class="light-gray-bg padding-top-100 padding-bottom-100">
  <div class="container">

    <!-- Main Heading -->
    <div class="heading text-center">
      <h4>Buah-Buahan</h4>
      <hr>
    </div>

    <!-- Popular Item Slide -->
    <div class="papular-block block-slide-con">
      @foreach ($buah as $rw)
      <!-- Item -->
      <div class="item">
        <!-- Item img -->
        <div class="item-img"> <img class="img-1" src="{{url('assets/images/').'/'.$rw->foto}}" alt="" > <img class="img-2" src="{{url('assets/images/').'/'.$rw->foto}}" alt="" >
          <!-- Overlay -->
          <div class="overlay">
            <div class="position-bottom">
              <div class="inn"><a href="#." data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
            </div>
          </div>
        </div>

        <!-- Item Name -->
        <div class="item-name"> <a href="/produk/{{$rw->id}}">{{$rw->nama}} </a>
          <p>{{$rw->berat}}gr / pack</p>
        </div>
        <!-- Price -->
        <span class="price"><small>Rp. </small>{{ $row->harga_beli }}</span> </div>
      @endforeach
    </div>
  </div>
</section>

<div class="text-center margin-top-30"> <a href="#." class="btn margin-right-20">Muat Lebih Banyak</a> </div>
@endsection
