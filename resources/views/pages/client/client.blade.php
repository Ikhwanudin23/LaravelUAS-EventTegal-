@extends('templates.default')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
                <h4 class="card-title"><b>Daftar Client</b></h4>
                <hr>
                <input class="btn btn-success" value="Tambah Client" type="button" onclick="window.location.href='{{route("client.create")}}'"/>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th><b>No</b></th>
                            <th><b>Nama Client</b></th>
                            <th><b>E-mail</b></th>
                            <th><b>Nama Event</b></th>
                            <th><b>Status</b></th>
                            <th class="text-nowrap"><b>Action</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; ?>
                        @foreach($client as $client)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$client->nama_client}}</td>
                                <td>{{$client->email}}</td>
                                @foreach($event as $e)
                                    @if($client->id_event == $e->id)
                                        <td>{{$e->nama_event}}</td>
                                    @endif
                                @endforeach

                                @if($client->status=='1')
                                    <td><span class="label label-success">Aktif</span></td>
                                @else
                                    <td><span class="label label-danger">Tidak aktif</span></td>
                                @endif
                                <td class="text-nowrap">
                                    <a href="{{route('client.edit',$client->id)}}" data-toggle="tooltip"
                                       data-original-title="Edit"> <i
                                                class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                @if($client->status=='1')
                                        <a href="{{route('client.delete',$client->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus ini?')" data-toggle="tooltip"
                                           data-original-title="Close" class="btn waves-effect waves-light btn-xs btn-danger"> <i class="fa fa-close"></i> </a>
                                @else
                                        <a href="{{route('client.delete',$client->id)}}" data-toggle="tooltip"
                                           data-original-title="Delete" class="btn waves-effect waves-light btn-xs btn-danger disabled"> <i class="fa fa-close"></i> </a>
                                @endif

                                </td>
                            </tr>
                            <?php $no++; ?>


                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection