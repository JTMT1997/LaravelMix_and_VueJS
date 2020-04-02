@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-sm-12">
        <div class="jumbotron">
            <h1 class="display-4">Daftar Kelas</h1>
            <p>Data Kelas</p>
           
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>

            <router-view></router-view>
          </div>
       </div>
   </div>
</div>
@endsection
