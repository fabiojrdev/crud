@extends('dashboard.default.site')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <p> Edit client - You editing client: </p>
            <h6 class="editing">{{$client->name}}</h6>
        </div>
        <form class="" action="{{route('site.updateclient',$client->id)}}" method="post">
        @csrf
            <div class="row">
        <div class="col-6">
            <br />
            <input class="form-control" type="text" name="nameClient" placeholder="Full name" maxlength="32" required value='{{$client->name}}'>
            <br />
            <input class="form-control" type="text" name="jobClient" placeholder="Job" maxlength="11" required value='{{$client->job}}'>
            <br />
            <input class="form-control" type="email" name="emailClient" placeholder="E-mail" maxlength="64" required value='{{$client->email}}'>
            <br />
            <input class="form-control" type="number" name="phoneClient" placeholder="Phone" maxlength="11" required value='{{$client->phone}}'>
        </div>
        <!-- <br/>
        <div class="col-6">
            <input class="form-control" type="text" name="jobClient" placeholder="Job" maxlength="11" required value='{{$client->job}}'>
        </div>
        <br />
        <div class="col-6">
            <input class="form-control" type="email" name="emailClient" placeholder="E-mail" maxlength="11" required value='{{$client->email}}'>
        </div>
        <br />
        <div class="col-6">
            <input class="form-control" type="number" name="phoneClient" placeholder="Phone" maxlength="11" required value='{{$client->phone}}'>
        </div>
        <br /> -->
        <div class="col-12">
            <br />
            <button class="btn btn-warning" type="submit">Edit client</button>
        </div>
            </div>
        </form>
    </div>
</div>

@endsection