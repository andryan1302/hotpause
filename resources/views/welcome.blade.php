@extends('template/temp')

@section('title','Home')

@section('content')
<div class="container-fluid m-0 p-0">
    <img src="{{ asset('img/bg.jpg')}}" class="w-100 bg-cover" alt="">
</div>
<div class="container d-flex align-items-center p-4 flex-column gap-3">
    <h1 class="fw-bold">News</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure illum facilis, id itaque, beatae voluptatibus magnam veritatis officia tempora reiciendis praesentium expedita ipsam vitae sint vero doloribus minus porro consequuntur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem alias deserunt temporibus, illo in laborum, voluptate saepe quidem incidunt ab cumque ipsum, tenetur unde! Corrupti dolorem, laboriosam atque vel officiis libero minima recusandae sequi aliquid, impedit deleniti? Similique aut beatae vero! Enim, molestias cum porro cupiditate magnam quasi harum praesentium!</p>
    <div class="line w-100" style="height:2px;background-color:black;"></div>
</div>
<div class="container d-flex align-items-center p-4 flex-column gap-3">
    <h1 class="fw-bold">Sponsors</h1>
    <img src="https://assets.loket.com/imgdir/2023-05-08/d7/d70569547400035eae1d7b211f332f1c3d1f677c540195012212207220.jpg" alt="" class="w-100 bg-contain">
    <div class="line w-100" style="height:2px;background-color:black;"></div>
</div>
<div class="container d-flex align-items-center p-4 flex-column gap-3">
    <h1 class="fw-bold">Customer Service Info</h1>
    <p>For more information about ticket purchase and wheelchair accessible seating, please do it yourself :)</p>
</div>
@endsection