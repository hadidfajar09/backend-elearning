@extends('layouts.bootstrap')

@section('title')
Create User
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3>Create User</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                            <span class="error invalid-feedback">{{$errors->first('email')}}</span>
                        </div>


                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control {{$errors->first('password') ? 'is-invalid' : ''}}" name="password" id="password" placeholder="Masukkan Password">
                            <span class="error invalid-feedback">{{$errors->first('password')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control {{$errors->first('name') ? 'is-invalid' : ''}}" name="name" id="name" placeholder="Masukkan Nama" value="{{ old('name')}}">
                            <span class="error invalid-feedback">{{$errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control {{$errors->first('level') ? 'is-invalid' : ''}}">
                                <option value="admin">Admin</option>
                                <option value="pengajar">Pengajar</option>
                            </select>
                            <span class="error invalid-feedback">{{$errors->first('level')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control {{$errors->first('gender') ? 'is-invalid' : ''}}">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                            <span class="error invalid-feedback">{{$errors->first('gender')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="phone">No Handphone</label>
                            <input type="text" class="form-control {{$errors->first('phone') ? 'is-invalid' : ''}}" name="phone" id="phone" placeholder="Masukkan Nomor HP" value="{{ old('phone')}}">
                            <span class="error invalid-feedback">{{$errors->first('phone')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea class="form-control {{$errors->first('address') ? 'is-invalid' : ''}}" name="address" id="address">{{ old('address') }}
                            </textarea>
                            <span class="error invalid-feedback">{{$errors->first('address')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control {{$errors->first('avatar') ? 'is-invalid' : ''}}" name="avatar" id="avatar">
                            <span class="error invalid-feedback">{{$errors->first('avatar')}}</span>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection