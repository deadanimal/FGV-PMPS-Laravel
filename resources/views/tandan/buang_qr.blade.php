@extends('layouts.app')

@section('title', 'Tandan')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Tandan
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}

                <div class="mb-3 col-md-6">
                    {!! QrCode::generate(Request::url('https://fgv-pmps.prototype.com.my/pokok/{{ $tandan->pokok->id }}/tandan/{{ $tandan->id }}/buang')); !!}
                </div>                  
            </div>


 



        </div>



    </main>

@endsection

@section('script')

@endsection
