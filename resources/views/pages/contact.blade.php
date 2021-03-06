@extends('layouts.app')

@section('content')

    <div class="container card mt-5 pl-2 pr-2">
        <div class="title"><h1>Contact</h1></div>
        <div class="card-body">
        <form action="{{route('contact.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input name = "name" type="name" class="form-control" id="name" placeholder="Jane Doe">
            </div>
            <div class="form-group">
                <label for="body">Message</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <button  type="submit" class="btn btn-dark mb-2">Submit</button>
        </form>
        </div>
    </div>

@endsection