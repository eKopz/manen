@extends('.templates.petani.index')

@section('title', 'Manen.id')

@section('content-title')
    <div class="col p-0">
        <h4 class="text-success">Pendapatan</h4>
        {{-- <h4>Hello {{ Auth::user()->name }}, <span>Selamat Datang di aplikasi Ekopz</span></h4> --}}
    </div>
    <div class="col p-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Panen</a>
            </li>
            <li class="breadcrumb-item active text-success">List Panen</li>
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

        <div class="card-body">

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card stat-widget-five">
                        <div class="card-body">
                            <div class="media">
                                <div class="icon mr-3 mt-3 bg-success">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="media-body text-right">
                                    <h2 class="mt-0 mb-2 text-success">
                                        {{ $listPendapatan->sum('nominal') }}
                                    </h2>
                                    <span class="text-pale-sky">Total Pendapatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card stat-widget-five">
                        <div class="card-body">
                            <div class="media">
                                <div class="icon mr-3 mt-3 bg-info">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="media-body text-info">
                                    <h2 class="mt-0 mb-2 text-info">
                                        {{ $listPendapatan->sum('nominal')/$listPendapatan->count()}}
                                    </h2>
                                    <span class="text-pale-sky">Rata Rata Pendapatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="table-responsive">
                <table class="table table-padded market-capital table-responsive-fix-big">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pendapatan</th>
                            <th>Statistik</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($listPendapatan as $item => $value)
                        <tr>
                            <td>
                            <span class="text-pale-sky">{{ ($item)+1 }}</span>
                            </td>
                            <td>{{$value->created_at}}</td>
                            <td>
                            <span class="text-pale-sky">{{$value->nominal}}</span>
                            </td>
                            <td>
                                @if($listPendapatan->sum('nominal')/$listPendapatan->count() < $value->nominal)
                                <i class="fa fa-sort-up text-success mr-4"></i>
                                @else
                                <i class="fa fa-sort-down text-danger mr-4"></i>
                                @endif
                                {{ ($value->nominal / ($listPendapatan->sum('nominal')/$listPendapatan->count()))*100}}
                                </span>
                            </td>
                        </tr>  
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection