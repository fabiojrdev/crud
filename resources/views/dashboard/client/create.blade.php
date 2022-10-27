@extends('dashboard.default.site')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <p> Create client.</p>
        </div>
        <form class="" action="{{route('site.newcreateclient')}}" method="post">
        {{csrf_field()}}
        <div class="row">
        <div class="col-6">
            <br />
            <input class="form-control" type="text" name="nameClient" placeholder="Full name" maxlength="32" required>
            <br />
            <input class="form-control" type="text" name="jobClient" placeholder="Job" maxlength="11" required>
            <br />
            <input class="form-control" type="email" name="emailClient" placeholder="E-mail" maxlength="32" required>
            <br />
            <input class="form-control" type="number" name="phoneClient" placeholder="Phone" maxlength="11" required>
        </div>
        <br/>
        <!-- <div class="col-6">
            <input class="form-control" type="text" name="jobClient" placeholder="Job" maxlength="11" required>
        </div>
        <br />
        <div class="col-6">
            <input class="form-control" type="email" name="emailClient" placeholder="E-mail" maxlength="32" required>
        </div>
        <br />
        <div class="col-6">
            <input class="form-control" type="number" name="phoneClient" placeholder="Phone" maxlength="11" required>
        </div> -->
        <div class="col-12">
        <br />
            <button class="btn btn-warning" type="submit">Create client</button>
        </div>
            </div>
        </form>
    </div>
</div>

@endsection