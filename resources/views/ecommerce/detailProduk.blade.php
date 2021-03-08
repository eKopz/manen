@extends('ecommerce.layout.index2')
@section('title', 'Manen.id')

@section('content')

    <!-- Popular Products -->
    <section class=" padding-top-100 padding-bottom-100">
      <div class="container">

        <!-- SHOP DETAIL -->
        <div class="shop-detail">
          <div class="row">

            <!-- Popular Images Slider -->
            <div class="col-md-7">

              <!-- Images Slider -->
              <div class="images-slider">
                <ul class="slides">
                  <li data-thumb="{{url('assets/images/').'/'.$detail->foto}}"> <img class="img-responsive" src="{{url('assets/images/').'/'.$detail->foto}}"  alt=""> </li>
                </ul>
              </div>
            </div>

            <!-- COntent -->
            <div class="col-md-5">
              <h4>{{ $detail->nama }}</h4>
              <p style="margin-top:-20px;">{{$detail->berat}} gr / pack</p>
              <span class="price"><small>Rp. </small>{{$detail->harga_beli}} <small> / 1 Pack</small> </span>
              <ul class="item-owner">
                <li>Kategori :<span> <a href="#">{{ $detail->kategori}}</a></span></li>
              </ul>

              <!-- Item Detail -->
              <p>{{$detail->deskripsi}}</p>

              <!-- Short By -->
              <div class="some-info">
                <ul class="row margin-top-30">
                  <li class="col-md-6">
                    {{-- <form action="/keranjang" method="POST">
                    @csrf --}}
                    <!-- Quantity -->
                    <div class="quinty">
                      <button type="button" class="quantity-left-minus"  data-type="minus" data-field=""> <span>-</span> </button>
                      <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1">
                      <input type="hidden" name="product_id" value="{{ $detail->id }}" class="form-control">
                      <button type="button" class="quantity-right-plus" data-type="plus" data-field=""> <span>+</span> </button>
                    </div>
                  </li>

                  <!-- ADD TO CART -->
                  <li class="col-md-6"> <a href="/keranjang" class="btn">ADD TO CART</a> </li>
                  {{-- </form> --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular Products -->
    <section class="dark-bg padding-top-100 padding-bottom-100">
      <div class="container-full">

        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>Related Product</h4>
        </div>

        <!-- Popular Item Slide -->
        <div class="papular-block block-slide">
          @foreach ($related as $row)
          <!-- Item -->
          <div class="item">
            <!-- Item img -->
            <div class="item-img"> <img class="img-1" src="{{url('assets/images/').'/'.$row->foto}}" alt="" > <img class="img-2" src="{{url('assets/images/').'/'.$row->foto}}" alt="" >
              <!-- Overlay -->
              <div class="overlay">
                <div class="position-bottom">
                  <div class="inn"><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-basket"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name"> <a href="/produk/{{$row->id}}">{{$row->nama}}</a>
              <p>{{$row->berat}} gr / pack</p>
            </div>
            <!-- Price -->
            <span class="price"><small>Rp. </small>{{$row->harga_beli}} <small>/ 1 pack</small></span>
          </div>
          @endforeach
        </div>
      </div>
  </section>
@endsection
