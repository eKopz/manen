@extends('ecommerce.layout.index2')
@section('title', 'Manen.id')

@section('content')
  <!-- Popular Products -->
  <section class="shop-page padding-top-100 padding-bottom-100">
    <div class="container-full">
      <div class="item-fltr">
        <h5 style="font-weight:bold; color:">Produk Pilihan</h5>
        <!-- short-by -->
        <div class="short-by"> Showing 1–10 of 20 results </div>
        <!-- List and Grid Style -->
        <div class="lst-grd"> <a href="#" id="list"><i class="flaticon-interface"></i></a> <a href="#" id="grid"><i class="icon-grid"></i></a>
          <!-- Select -->
          <select>
            <option>Short By: New</option>
            <option>Short By: New</option>
            <option>Short By: New</option>
            <option>Short By: New</option>
            <option>Short By: New</option>
          </select>
        </div>
      </div>

      <!-- Item -->
      <div id="products" class="arrival-block list-group">
        <div class="row">
          @foreach ($produk as $row)
          <!-- Item -->
          <div class="item">
            <div class="img-ser">
              <!-- Images -->
              <div class="thumb"> <img class="img-1" src="{{url('assets/images/').'/'.$row->foto}}" alt=""><img class="img-2" src="{{url('assets/images/').'/'.$row->foto}}" alt="">
                <!-- Overlay  -->
                <div class="overlay">
                  <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                </div>
              </div>

              <!-- Item Name -->
              <div class="item-name fr-grd">
                <a href="/produk/{{ $row->id }}" class="i-tittle">{{$row->nama}}</a>
                <p style="margin-top:-10px; margin-bottom:10px;">{{$row->berat}}gr / pack</p>
                <span class="price"><small>Rp. </small>{{$row->harga_beli}} <small> / 1 pack</small> </span>
                <a class="deta animated fadeInRight" href="/produk/{{ $row->id }}">View Detail</a>
              </div>
              <!-- Item Details -->
              <div class="cap-text">
                <div class="item-name"> <a href="/produk/{{ $row->id }}" class="i-tittle">{{$row->nama}}</a> <span class="price"><small>Rp. </small>{{$row->nama}}</span>
                  <p>{{$row->deskripsi}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- Pagination-->
      {{ $produk->links() }}
    </div>
  </section>
  @endsection
