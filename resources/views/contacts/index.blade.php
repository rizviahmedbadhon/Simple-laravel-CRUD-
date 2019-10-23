@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header" style="font-weight: bold; font-size: 18px;">View</div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <th>Name</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->number}}</td>
                    <td>{{$contact->message}}</td>
                    <td>
                      <a href="{{route('contacts.edit',[$contact->id])}}">
                        <button class="btn btn-outline-dark">Edit</button>
                      </a>
                      <a href="{{route('contacts.destroy',[$contact->id])}}">
                        <button class="btn btn-outline-danger">Delete</button>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

