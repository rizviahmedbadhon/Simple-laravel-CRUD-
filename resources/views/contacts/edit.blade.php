@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header" style="font-weight: bold; font-size: 18px;">Update Crud System</div>
          
          <div class="card-body">
            <form action="{{route('contacts.update',[$contacts->id])}}" method="post">
              @csrf
              <div class="form-group">
                <label>Name</label>
                <input value="{{$contacts->name}}" name="name" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input value="{{$contacts->number}}" name="number" type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="message" rows="5" class="form-control">
                  {{$contacts->message}}
                </textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-warning" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
