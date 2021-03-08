@extends('templates.petani.index')

@section('title', 'Manen.id')

@section('content-title')
    <div class="col p-0">
        <h4 class="text-success">List Panen</h4>
        {{-- <h4>Hello {{ Auth::user()->name }}, <span>Selamat Datang di aplikasi Ekopz</span></h4> --}}
    </div>
    <div class="col p-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Panen</a>
            </li>
            <li class="breadcrumb-item active text-success">Tambah Panen</li>
        </ol>
    </div>
@endsection


@section('content')
<div class="col-12 mt-0">
    <div class="card-content">
    <?php if (session('alert-success')): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span>
            </button> {{ session('alert-success') }}
        </div>
    <?php endif; ?>
    </div>
    <div class="card">
        <div class="card-header pb-0">
            <h4 class="card-title">List Panen</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <button type="button" data-target="#tambahPanenModal" data-toggle="modal" class="btn btn-rounded btn-success" style="margin-bottom: 20px; background-color: #558b2f;">
                    <span class="btn-icon-left text-success">
                        <i class="fa fa-plus color-info"></i>
                    </span>Tambah Panen</button>

            <div class="table-responsive">
                <table class="example-style display" style="min-width: 845px; color: black;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama tanaman</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($listPanen as $item => $value)
                    <tr>
                        <td>{{($item+1)}}</td>
                        <td>{{$value->produk->nama}}</td>
                        <td>{{$value->jumlah}}</td>
                        <td>
                            @if($value->status == 1)
                                <img class="mr-3" src="{{asset('assets/icons/processing.png')}}" alt="" width="16">
                                Sedang diproses
                            @elseif($value->status == 2)
                                <img class="mr-3" src="{{asset('assets/icons/success.png')}}" alt="" width="16">
                                Selesai
                            @elseif($value->status == 3)
                                <img class="mr-3" src="{{asset('assets/icons/error.png')}}" alt="" width="16">
                                Batal
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-success center" href="/panen/detail_panen/{{$value->id}}">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>

    <!-- #/ modal tambah panen -->
<div class="modal fade" id="tambahPanenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Panen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="/panen/list_panen/addPanen">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail">Nama Produk</label>
                    <div class="input-group mb-3 ">
                        <select name="id_produk" class="custom-select form-control" id="inputGroupSelect01" required>
                        @foreach ($listProduk as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="inputJumlah" required>
                </div>
            <button type="submit" class="btn btn-success" style="margin-bottom: 20px; background-color: #558b2f;">Tambahkan</button>
            </form>       
        </div>
        </div>
    </div>
</div>
@endsection