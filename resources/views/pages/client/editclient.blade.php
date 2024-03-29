@extends('templates.default')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Client</h4>
                <form class="m-t-40" action="{{route('client.update',$client->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <h5>Nama <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama_client" class="form-control" required=""
                                   data-validation-required-message="This field is required" value="{{$client->nama_client}}">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Enter Email Address <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="email" name="email" class="form-control" placeholder="Email Address"
                                   data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                   data-validation-regex-message="Enter Valid Email" value="{{$client->email}}" disabled>
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Password Input Field <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="password" class="form-control" required=""
                                   data-validation-required-message="This field is required">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label">Event</label>
                        <select class="form-control custom-select" name="event">
                            @foreach($event as $event)
                                <option value="{{$event->id}}"
                                @if($event->id == $client->id_event)selected
                                        @endif
                                >{{$event->nama_event}}</option>
                            @endforeach
                        </select>
                        <small class="form-control-feedback"> Select your Event</small>
                    </div>

                    <div class="form-group text-xs-right">
                        <button type="submit" class="btn btn-info">Submit</button>
                        {{--<button type="reset" class="btn btn-inverse">Cancel</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection