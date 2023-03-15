@extends('layouts.app')

<link rel="stylesheet" href="css/custom.css">

@section('content')
    <h1>Müştərilər</h1>
    <div class="pull-right">
        <a class="btn btn-primary text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
           data-attr="{{ route('customers.create') }}" title="Create a project"> Müştəri Əlavə Et
        </a>
    </div>
    <table class="table table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" >Adı Soyadı</th>
            <th scope="col" >Yaşı</th>
            <th scope="col" >Cinsiyyəti</th>
            <th scope="col" >Avtomabil Markası</th>
            <th scope="col" >Son Səyahət Etdiyi Rayon</th>
            <th scope="col" >Toplam Müddət</th>
            <th scope="col" >Toplam Məsafə</th>
            <th scope="col">Əməliyyatlar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key=> $customer)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td >{{$customer->name}} {{$customer->surname}}</td>
            <td >{{$customer->age}}</td>
            <td >{{$customer->gender==1?"Qadın":"Kişi"}}</td>
            <td >{{$customer->car->name}}</td>
            <td >{{$customer->last_region}}</td>
            <td >{{$customer->total_duration}}</td>
            <td >{{$customer->total_distance}}</td>
            <td> <a class="btn btn-info text-light" data-toggle="modal-edit" id="addTravel" data-target="#addTravelModal"
                    data-attr="{{ route('travels.create',['id'=>$customer->id]) }}" title="Update Color"> Səyahət Əlavə Et
                </a>
                <a class="btn btn-success text-light" data-toggle="modal-edit" id="updateColor" data-target="#updateModal"
                    data-attr="{{ route('colors.edit',['id'=>$customer->id]) }}" title="Update Color"> Düzəliş Et
                </a> <a class="btn btn-danger text-light" data-toggle="modal" id="smallButton" data-target="#smallModal"
                    data-attr="{{ route('colors.delete-view',$customer->id) }}" title="delete Color"> Sil
                </a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Müştəri Əlavə Et
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addTravelModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Müştəri Əlavə Et
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Düzəliş Et
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="updateColorBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="js/modal.js"></script>

@endsection
