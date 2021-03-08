@extends('.templates.petani.index')

@section('title', 'Manen.id')

@section('content-title')
    <div class="col p-0">
        <h4 class="text-success">Riwayat Transaksi</h4>
        {{-- <h4>Hello {{ Auth::user()->name }}, <span>Selamat Datang di aplikasi Ekopz</span></h4> --}}
    </div>
    <div class="col p-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a>
            </li>
            <li class="breadcrumb-item active text-success">Riwayat Transaksi</li>
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
            <h4 class="card-title">Riwayat Transaksi</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="example-style display" style="min-width: 845px; color: black;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th></th>
                        <th>Nama Pembeli</th>
                        <th>Nama Produk</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="{{asset('assets/icons/success.png')}}" alt="" width="32" height="32"></td>
                    <td>aldi</td>
                    <td>20.000</td>
                    <td>pakaian</td>
                    <td>
                        <button type="button" class="btn btn-info center">Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="{{asset('assets/icons/error.png')}}" alt="" width="32" height="32"></td>
                    <td>lifi</td>
                    <td>20.000</td>
                    <td>pakaian</td>
                    <td>
                        <button type="button" class="btn btn-info center">Detail</button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>

        </div>
    </div>
</div>
@endsection