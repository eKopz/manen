@extends('ecommerce.layout.index2')
@section('title', 'Manen.id - Keranjang')

@section('content')
  <section class="chart-page padding-top-100">
      <div class="container">

        <!-- Payments Steps -->
        <div class="shopping-cart">

          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row">

              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6>Alamat Pengiriman</h6>
                  <div class="card">
                    <div class="card-body" style="text-align:center;">
                      <form class="row g-3" action="/proses" method="POST">
                        @csrf
                        <div class="col-12">
                          <label for="inputAddress" class="form-label" style="text-align:left;">Alamat Lengkap</label>
                          <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Alamat Lengkap Pengiriman">
                        </div>
                        {{-- <div class="col-md-6">
                          <label for="inputCity" class="form-label" style="text-align:left;">Kota</label>
                          <input type="text" name="namaKota" class="form-control" value="Kota Bandung">
                        </div> --}}
                        {{-- <div class="col-md-6">
                          <label for="inputKec" class="form-label" style="text-align:left;">Kecamatan</label>
                          <select name="kec_id" id="inputKec" class="form-select">
                          @foreach ((array)$sub as $row)
                            <option value="{{$row['subdistrict_id']}}" namaprovinsi="{{$row['subdistrict']}}">{{$row['subdistrict']}}</option>
                          @endforeach
                          </select>
                          <input style="display: none" type="text" class="form-control" nama="nama_kecamatan" placeholder="ini untuk menangkap nama kecamatan">
                        </div> --}}
                        <div class="col-md-8">
                          <label for="inputTlp" class="form-label" style="text-align:left;">No. Telephone</label>
                          <input type="number" name="notlp" class="form-control" id="inputTlp">
                        </div>
                        <div class="col-md-4">
                          <label for="inputZip" class="form-label" style="text-align:left;">Kode Pos</label>
                          <input type="number" name="kodepos" class="form-control" id="inputZip">
                        </div>

                    </div>
                  </div>

                <!-- Product info -->
                <h6 class="margin-top-50">Produk Dipesan</h6>
                  <div class="card">
                    <div class="card-body">
                      <div style="display: none">
                            	{{ $total = 0 }}
                      </div>
                      @foreach ($keranjang_produk as $row)
                        <div class="row">
                          <div class="col-2">
                            <img src="{{$row->produk->foto}}" alt="" style="width:70px;">
                          </div>
                          <div class="col-5">
                            <p>{{$row->produk->nama}}</p>
                          </div>
                          <div class="col-2">
                            <p>{{$row->jumlah}}</p>
                          </div>
                          <div class="col-3">
                            <p>Rp. {{$row->jumlah*$row->produk->harga_beli}}</p>
                          </div>
                        </div>
                        <div style="display: none">{{$total += ($row->jumlah*$row->produk->harga_beli) }}</div>
                      @endforeach

                    </div>
                </div>
                <div class="card" style="margin-top:10px;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <p class="all-total">Subtotal</p>
                      </div>
                      <div class="col-3">
                        <p class="all-total">Rp. {{number_format($total)}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- SUB TOTAL -->
              <div class="col-sm-5">
                <h6>Pesanan Mu</h6>
                <div class="order-place">
                  <div class="order-detail">
                    @foreach ($keranjang_produk as $key)
                      <p>{{ $key->produk->nama }} <span>Rp. {{$row->jumlah*$row->produk->harga_beli}} </span></p>
                    @endforeach
                    <p>Biaya Pengiriman <span>Rp. 20000</span> </p>
                    <!-- SUB TOTAL -->
                    <p class="all-total">Total Pembayaran <span> Rp. {{number_format($total+20000)}}</span></p>
                    <input type="hidden" name="total" value="{{ $total+20000 }}" class="form-control">
                  </div>
                  <div class="pay-meth">
                    <button type="submit" name="button" class="btn  btn-dark pull-right margin-top-30">PLACE ORDER</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
