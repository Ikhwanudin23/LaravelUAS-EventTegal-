@extends('templates.default')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" ><b>Daftar Event Tegal</b></h4>
                <hr>
                <button class="btn btn-success">Tambah Event</button>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th><b>No</b></th>
                            <th><b>Nama Event</b></th>
                            <th><b>Tanggal Pelaksanaan</b></th>
                            <th><b>Contact Person</b></th>
                            <th><b>Kategori</b></th>
                            <th><b>Status</b></th>
                            <th class="text-nowrap"><b>Action</b></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; ?>
                        @foreach($event as $event)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$event->nama_event}}</td>
                                <td>{{$event->tanggal_pelaksanaan}}</td>
                                <td>{{$event->contact_person}}</td>
                                @foreach($categories as $c)
                                    @if($event->id_kategori == $c->id)
                                        <td>{{$c->nama_kategori}}</td>
                                    @endif
                                @endforeach



                                @if($event->status=='1')
                                    <td><span class="label label-success">Aktif</span></td>
                                @else
                                    <td><span class="label label-danger">Tidak aktif</span></td>
                                @endif
                                <td class="text-nowrap">

                                    <a href="{{route('event.detail',$event->id)}}" data-toggle="tooltip" data-original-title="Detail"> <i class="fa fa-book text-inverse m-r-10"></i> </a>

                                    <a href="{{route('event.edit',$event->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                    @if($event->status=='1')
                                        <a href="{{route('event.delete',$event->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus ini?')" data-toggle="tooltip"
                                           data-original-title="Close" class="btn waves-effect waves-light btn-xs btn-danger"> <i class="fa fa-close"></i> </a>
                                    @else
                                        <a href="" data-toggle="tooltip"
                                           data-original-title="Close" class="btn waves-effect waves-light btn-xs btn-danger disabled"> <i class="fa fa-close"></i> </a>
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