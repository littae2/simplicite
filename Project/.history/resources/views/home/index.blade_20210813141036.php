@extends('layouts.layout')
@section('title', 'Welcome')
@section('content')
<div class="pageContent">

<!-- @if(Auth::check())
<div> you are logged in </div>
@else
<div> please login</div>
@endif -->

  <div class="card d-flex flex-row justify-content-between align-items-center w-90 home">
  <img src="{{url('img/product2.jpg')}}" alt="skincare applicators" id="headerImg">
    <div class="card-body w-25 ">

      <br>
      <h3 class="card-title">What the Studio Mangment System does</h3>

      <p>In eget orci et metus gravida faucibus id ac tellus. Nunc mi mi, venenatis facilisis euismod id, eleifend non risus.
        Curabitur vel orci maximus, accumsan mauris vitae, venenatis urna. Donec odio lectus, sollicitudin eu cursus non, imperdiet eu purus.
        Pellentesque neque ex,euismod. Donec vestibulum, odio ac bibendum scelerisque, arcu arcu faucibus risus, eget luctus arcu ex ac massa. In vel magna fringilla, volutpat massa in, tempor lacus.
        Praesent purus elit, rhoncus vitae quam eu, aliquam elementum lacus. Proin vitae efficitur elit, ut sollicitudin erat.</p>

    </div>
    <div class=" card-body w-25">

      <h3 class="card-title">How to use the Studio Mangment System</h3>
      <br>
      <p>In eget orci et metus gravida faucibus id ac tellus. Nunc mi mi, venenatis facilisis euismod id, eleifend non risus.
        Curabitur vel orci maximus, accumsan mauris vitae, venenatis urna. Donec odio lectus, sollicitudin eu cursus non, imperdiet eu purus.
        Pellentesque neque ex, rhoncus vitae quam eu, aliquam elementum lacus. Proin vitae efficitur elit, ut sollicitudin erat.</p>

    </div>

  </div>
</div>
@endsection