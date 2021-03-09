@extends('ecommerce.layout.index2')
@section('title', 'Manen.id - Status Pemesanan')

@section('content')
  <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
      <div class="container">

        <!-- Payments Steps -->
        <div class="shopping-cart text-center">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-left">Items</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Pesanan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pesanan_produk as $key)
              <tr>
                <th class="text-left"> <!-- Media Image -->
                  <a href="#." class="item-img"> <img class="media-object" src="{{$key->produk->foto}}" alt=""> </a>
                  <!-- Item Name -->
                  <div class="media-body">
                    <span>{{$key->produk->nama}}</span>
                    <p>1 item</p>
                  </div>
                </th>
                <td> <span>{{$key->jumlah}}</span> </td>
                <td><span class="price"><small>Rp.</small>{{$pesanan->total}}</span></td>
                <td><span class="badge bg-primary" style="color:white;">Belum dibayar</span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
@endsection
