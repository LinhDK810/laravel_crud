@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href={{route('share.create')}} class="btn btn-danger">them</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Stock Name</td>
          <td>Stock Price</td>
          <td>Stock Quantity</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($shares as $share)
    <tr>
    <td>{{$share->id}}</td>
    <td>{{$share->share_name}}</td>
    <td>{{$share->share_price}}</td>
    <td>{{$share->share_qty}}</td>
    <td>
    <a href="{{route('share.edit', $share->id)}}" class='btn btn-primary'>Edit</a>
    
    </td>
      <td><a class="btn btn-success" href="{{route('share.detail', $share->id)}}">xem chi tiết</a></td>
    <td>
                <form action="{{ route('share.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
    @endforeach
   
    </td>


    </tr>
       
       
    </tbody>
  </table>
<div>

@endsection