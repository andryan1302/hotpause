@extends('template/temp')

@section('title','All Ticket')

@section('content')
<div class="container" style="flex-grow:1">
    <div class="row">
        <div class="col-lg-8 p-0">
            <div class="col-header p-4 fw-bold bg-primary">List {{$nama->category}}</div>
            <table class="table mt-4">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Seat</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tickets as $key => $ticket)
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{ $ticket->seat }}</td>
                    <td><a href="{{ route('detail',$ticket->id)}}">Detail</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <div class="offset-lg-1 col-lg-3 p-0">
            <div class="col-header p-4 fw-bold bg-primary">Category</div>
            <ul class="list-group mt-4">
                <a href="{{ route('test') }}" style="text-decoration: none">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      All Category
                      <span class="badge bg-primary rounded-pill"></span>
                    </li>
                </a>
                @foreach($data as $datas)
                <a href="{{ route('find',$datas->id) }}" style="text-decoration: none">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$datas->category}}
                      <span class="badge bg-primary rounded-pill">{{$datas->ticket_count}}</span>
                    </li>
                </a>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection