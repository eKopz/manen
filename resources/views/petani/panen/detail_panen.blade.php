@extends('.templates.petani.index')

@section('title', 'Manen.id')

@section('content-title')
    <div class="col p-0">
        <h4 class="text-success">Detail Panen</h4>
        {{-- <h4>Hello {{ Auth::user()->name }}, <span>Selamat Datang di aplikasi Ekopz</span></h4> --}}
    </div>
    <div class="col p-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Panen</a>
            </li>
            <li class="breadcrumb-item ">List Panen</li>
            <li class="breadcrumb-item active text-success">Detail Panen</li>
        </ol>
    </div>
@endsection


@section('content')
<div class="col-12 mt-0">
    <div class="card-content">
    <?php if (session('status')): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span>
            </button> {{ session('status') }}
        </div>
    <?php endif; ?>
    </div>
    <div class="card">
        <div class="card-header pb-0">
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <img src="{{$panen->produk->foto}}"
                    class="rounded float-left img-fluid" alt="..." width="500">
                </div>
                <div class="col">
                    <h2 class="w-100 center">Detail Panen</h2>
                    <ul class="list-group list-group-flush mt-5">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    <h4>Nama produk </h4>
                                </div>
                                <div class="col">
                                    <h4>:  {{$panen->produk->nama}}</h4>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    <h4>Kategori produk </h4>
                                </div>
                                <div class="col">
                                    <h4>:  {{$panen->produk->kategori->nama}}</h4>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    <h4>Jumlah </h4>
                                </div>
                                <div class="col">
                                    <h4>:  {{$panen->jumlah}}</h4>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-4">
                                    <h4>Status</h4>
                                </div>
                                <div class="col">
                                    <h4> :
                                        @if($panen->status == 1)
                                            Sedang diproses
                                        @elseif($panen->status == 2)
                                            Selesai
                                        @elseif($panen->status == 3)
                                            Batal
                                        @endif
                                    </h4>

                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row mt-5">
                        <div class="col">
                            <a  class="btn btn-success btn-lg btn-block" href="selesai/{{$panen->id}}">Selesai</a>
                        </div>
                        <div class="col-4">
                        <a class="btn btn-danger btn-lg btn-block" href="batal/{{$panen->id}}">Batalkan</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

</div>
@endsection