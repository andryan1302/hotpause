@extends('template/temp')

@section('title','All Ticket')

@section('content')
<div class="d-flex align-items-center justify-content-center">
    <div class="card text-center">
        <div class="card-header">
          {{ $data->ticket_id }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $data->start_date }}</h5>
          <p class="card-text">{{ $data->place }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            {{ $data->price }}
        </div>
      </div>
</div>
@endsection