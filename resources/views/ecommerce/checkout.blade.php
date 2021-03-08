@extends('ecommerce.layout.index2')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@section('title', 'Manen.id - Keranjang')

@section('content')
  <section class="chart-page padding-top-100 padding-bottom-100">
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
                      <form class="row g-3" action="/alamat/tambah" method="POST">
                        @csrf
                        <input style="display: none" type="text" value="6" class="form-control" name="province_origin">
                        <input style="display: none" type="text" value="40" class="form-control" id="city_origin" name="city_origin">
                        <input style="display: none" type="text" value="200" class="form-control" id="weight" name="weight">

                        <div class="col-12">
                          <label for="inputAddress" class="form-label" style="text-align:left;">Alamat Lengkap</label>
                          <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Alamat Lengkap Pengiriman">
                        </div>
                        <div class="col-md-12">
                          <label for="inputProv" class="form-label" style="text-align:left;">Provinsi</label>
                          <select name="provinsi_id" id="inputProv" class="form-select">
                            <option value="">Pilih Provinsi</option>
                          @foreach ($provinsi  as $row)
                            <option value="{{$row['province_id']}}" namaprovinsi="{{$row['province']}}">{{$row['province']}}</option>
                          @endforeach
                          </select>
                          <input style="display: none" type="text" class="form-control" nama="nama_provinsi" placeholder="ini untuk menangkap nama provinsi ">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label" style="text-align:left;">Kota</label>
                          <select name="kota_id" id="inputCity" class="form-select">
                            <option value="">Pilih Kota</option>
                          </select>
                          <input style="display: none" type="text" class="form-control" nama="nama_kota" placeholder="ini untuk menangkap nama kota">
                        </div>
                        <div class="col-md-6">
                          <label for="inputKec" class="form-label" style="text-align:left;">Kecamatan</label>
                          <select name="kec_id" id="inputKec" class="form-select">
                            <option value="">Pilih Kecamatan</option>
                          </select>
                          <input style="display: none" type="text" class="form-control" nama="nama_kecamatan" placeholder="ini untuk menangkap nama kecamatan">
                        </div>
                        <div class="col-md-8">
                          <label for="inputTlp" class="form-label" style="text-align:left;">No. Telephone</label>
                          <input type="number" name="notlp" class="form-control" id="inputTlp">
                        </div>
                        <div class="col-md-4">
                          <label for="inputZip" class="form-label" style="text-align:left;">Kode Pos</label>
                          <input type="number" name="kodepos" class="form-control" id="inputZip">
                        </div>
                        <div class="col-md-6">
                          <label for="kurir" class="form-label" style="text-align:left;">Pilih Ekspedisi</label>
                          <select name="kurir" id="kurir" class="form-select">
                            <option value="">Pilih kurir</option>
                            <option value="jne">JNE</option>
                            <option value="tiki">TIKI</option>
                            <option value="pos">POS INDONESIA</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="kurir" class="form-label" style="text-align:left;">Pilih Layanan</label>
                          <select name="kurir" id="kurir" class="form-select">
                            <option value="">Pilih Layanan</option>
                          </select>
                        </div>
                      </form>
                    </div>
                  </div>

                <!-- Product info -->
                <h6 class="margin-top-50">Produk Dipesan</h6>
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-2">
                          <img src="{{url('assets2/images/cart-img-1.jpg')}}" alt="" style="width:70px;">
                        </div>
                        <div class="col-5">
                          <p>Nama Produk</p>
                        </div>
                        <div class="col-2">
                          <p>1</p>
                        </div>
                        <div class="col-3">
                          <p>Rp. 20.000</p>
                        </div>
                      </div>
                      <div class="row" style="margin-top:20px;">
                        <div class="col-2">
                          <img src="{{url('assets2/images/cart-img-1.jpg')}}" alt="" style="width:70px;">
                        </div>
                        <div class="col-5">
                          <p>Nama Produk</p>
                        </div>
                        <div class="col-2">
                          <p>1</p>
                        </div>
                        <div class="col-3">
                          <p>Rp. 20.000</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card" style="margin-top:10px;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <p class="all-total">Subtotal</p>
                      </div>
                      <div class="col-3">
                        <p class="all-total">Rp.100.000</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- SHIPPING info -->
                {{-- <h6 class="margin-top-50">Metode Pengiriman</h6>
                <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                            <label for="inputKurir" class="form-label" style="text-align:left;">Pilih Ekspedisi</label>
                            <select class="form-select" name="kurir" id="inputKurir" class="form-select">
                              <option value="">Pilih Kurir</option>
                              <option value="jne">JNE</option>
                              <option value="tiki">TIKI</option>
                              <option value="pos">POS INDONESIA</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputLayanan" class="form-label" style="text-align:left;">Pilih Layanan</label>
                            <select class="form-select" name="layanan" id="inputLayanan" class="form-select">
                              <option value="">Pilih Layanan</option>
                            </select>
                        </div>
                      </div>
                  </div>
                </div> --}}
              </div>




              <!-- SUB TOTAL -->
              <div class="col-sm-5">
                <h6>Pesanan Mu</h6>
                <div class="order-place">
                  <div class="order-detail">
                    <p>Rise Skinny Jeans <span>$598 </span></p>
                    <p>Shipping <span>$199 </span></p>
                    <p>Total Ongkir : <span> $139</span></p>

                    <!-- SUB TOTAL -->
                    <p class="all-total">Total Pembayaran <span> $998</span></p>
                  </div>
                  <div class="pay-meth">
                    <a href="#." class="btn  btn-dark pull-right margin-top-30">PLACE ORDER</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('select[name="provinsi_id"]').on('change', function(){
      let provinceid = $(this).val();
      if(provinceid){
      jQuery.ajax({
      url:"/kota/"+provinceid,
      type:'GET',
      dataType:'json',
      success:function(data){
        $('select[name="kota_id"]').empty();
        $.each(data, function(key, value){
          $('select[name="kota_id"]').append('<option value="'+ value.city_id +'" namakota="'+ value.type +' ' +value.city_name+ '">' + value.type + ' ' + value.city_name + '</option>');
        });
      }
      });
      }else {
        $('select[name="kota_id"]').empty();
      }
    });
  });
</script>
<script>
  $(document).ready(function(){
    $('select[name="kota_id"]').on('change', function(){
      let kotaid = $(this).val();
      if(kotaid){
      jQuery.ajax({
        url:"/kecamatan/"+kotaid,
        type:'GET',
        dataType:'json',
        success:function(data){
            $('select[name="kec_id"]').empty();
            $.each(data, function(key, value){
              $('select[name="kec_id"]').append('<option value="'+ value.subdistrict_id +'" namakecamatan="'+ value.type +' ' +value.subdistrict_name+ '">' + value.type + ' ' + value.subdistrict_name + '</option>');
            });
        }
      });
      }else {
        $('select[name="kec_id"]').empty();
      }
    });
  });
</script>
<script>
  $('select[name="kurir"]').on('change', function(){
  let origin = $("input[name=city_origin]").val();
  let destination = $("select[name=kota_id]").val();
  let courier = $("select[name=kurir]").val();
  let weight = $("input[name=weight]").val();
  if(courier){
    jQuery.ajax({
      url:"/origin="+origin+"&destination="+destination+"&weight="+weight+"&courier="+courier,
      type:'GET',
      dataType:'json',
      success:function(data){
        console.log(data);
      },
    });
  }
  });
</script>
