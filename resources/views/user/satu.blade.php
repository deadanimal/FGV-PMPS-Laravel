@extends('layouts.app')

@section('title', 'Profil')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    User: {{$user->name}}
                </h1>
                <p class="header-subtitle">---</p>
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kemaskini User</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

                            <form action="/user/{{ $user->id}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
									</div>

                                    <div class="mb-3 col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>No Kakitangan</label>
                                        <input type="text" class="form-control" id="noKakitangan" name="noKakitangan" value="{{$user->no_kakitangan}}">
                                    </div>
         
{{-- 
                                    <div class="mb-3 col-md-6">
                                        <label>Role</label>
                                        <select class="form-select" id="role_id" name="role_id">
											@foreach($roles as $role)
												<option value="{{$role->id}}">{{$role->display_name}}</option>
											@endforeach                                        
                                        </select>
                                    </div> --}}

                                </div>

                                <button type="submit" class="btn btn-primary">Kemaskini User</button>
                            </form>



                        </div>
                    </div>
                </div>



            </div>            

            <div class="row">


                <div class="col-xl-6">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kemaskini Kata Laluan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">


                            <form action="/user/{{ $user->id }}/katalaluan" method="POST">
                                @csrf
                                @method('PUT')
                                

                                <div class="row">

									<div class="mb-3 col">
                                        <label>Kata Laluan</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>									

                                    {{-- <div class="mb-3 col-md-6">
                                        <label>Kitaran</label>
                                        <input type="text" class="form-control" id="kitaran" name="kitaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Deskripsi Kitaran</label>
                                        <input type="text" class="form-control" id="deskripsiKitaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Status Tandan</label>
                                        <input type="text" class="form-control" id="statusTandan" name="statusTandan">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Catatan</label>
                                        <input type="text" class="form-control" id="catatan" name="catatan">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>umur</label>
                                        <input type="number" class="form-control" id="umur" name="umur">
                                    </div> --}}


                                </div>

                                <button type="submit" class="btn btn-primary">Tukar Kata Laluan</button>
                            </form>



                        </div>
                    </div>
                </div>



            </div>





        </div>



    </main>

@endsection

@section('script')

@endsection
