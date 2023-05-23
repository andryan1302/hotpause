@extends('template/temp')

@section('title','All Ticket')

@section('content')
<div class="container" style="flex-grow:1">
    <div class="row">
        <div class="col-lg-8 p-0">
            <div class="col-header p-4 fw-bold bg-primary">List Ticket</div>
            <table class="table mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $key => $datas)
                  <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{ $datas->category }}</td>
                    <td>{{ $datas->ticket_count }}</td>
                    <td><a href="{{ route('find',$datas->id) }}">Lihat</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <div class="offset-lg-1 col-lg-3 p-0">
            <div class="col-header p-4 fw-bold bg-primary">Category</div>
            <ul class="list-group mt-4">
                <a href="#" style="text-decoration: none">
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