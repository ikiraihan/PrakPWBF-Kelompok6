@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/pembayaran"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-12 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Pembayaran Barang</h1>
                        </div>
                        <div class="card-body">
                            @if($pembayaran->$image)
                                <img scr ="{{ asset('storage/'.$pembayaran) }}" alt="{{ 
                                $pembayaran->id }}" class="img-fluid mt-3">
                            @endif
                            {{-- @else($pembayaran->image)
                            <img img scr ="https:source.unsplash.com/1200x400??{{ $pembayaran-> }}">
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>		
		</div>
    </main>
</div>
@endsection
