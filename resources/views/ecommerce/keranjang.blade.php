@extends('ecommerce.layout.index2')
@section('title', 'Manen.id - Keranjang')

@section('content')
<!-- PAGES INNER -->
  <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
      <div class="container">

        <!-- Payments Steps -->
        <div class="shopping-cart text-center">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-left">Items</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Total</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <div style="display: none">
                    	{{ $total = 0 }}
              </div>
              @foreach ($keranjang_produk as $row)
              <tr>
                <th class="text-left"> <!-- Media Image -->
                  <a href="#." class="item-img"> <img class="media-object" src="{{$row->produk->foto}}" alt=""> </a>
                  <!-- Item Name -->
                  <div class="media-body">
                    <span>{{$row->produk->nama}}</span>
                    <p>{{$row->produk->berat}}gr/pack</p>
                  </div>
                </th>
                <td><span class="price"><small>Rp. </small>{{$row->produk->harga_beli}} <small> / 1 pack</small> </span></td>
                <td>
                  <span>{{$row->jumlah}}</span>
                {{-- <div class="quantity">
                          <input type="number" min="1" max="100" step="1" value="1" class="form-control qty">
                        </div> --}}
                </td>
                <td><span class="price"><small>Rp. </small>{{ $row->jumlah*$row->produk->harga_beli }}</span></td>
                <td>
                  <a href="/keranjang/delete/{{ $row->id}}"> <i class="icon-close"></i></a>
                </td>
              </tr>
              <div style="display: none">{{$total += ($row->jumlah*$row->produk->harga_beli) }}</div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- PAGES INNER -->
    <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
      <div class="container">

        <!-- SHOPPING INFORMATION -->
        <div class="cart-ship-info margin-top-0">
          <div class="row">

            <!-- DISCOUNT CODE -->
            <div class="col-sm-7">
              <h6>Discound Code</h6>
              <form>
                <input type="text" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
              </form>
              <div class="coupn-btn"> <a href="#." class="btn">continue shopping</a> <a href="#." class="btn">update cart</a> </div>
            </div>

            <!-- SUB TOTAL -->
            <div class="col-sm-5">
              <h6>Grand Total</h6>
              <div class="grand-total">
                <div class="order-detail">
                  @foreach ($keranjang_produk as $key)
                    <p>{{ $key->produk->nama }} <span>Rp.{{$row->jumlah*$row->produk->harga_beli}} </span></p>
                  @endforeach

                  <!-- SUB TOTAL -->
                  <p class="all-total">TOTAL COST <span> Rp. {{number_format($total)}}</span></p>
                </div>
                <a href="/checkout/{{$keranjang->id}}" class="btn margin-top-20">Checkout</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
