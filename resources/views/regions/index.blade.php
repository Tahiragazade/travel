@extends('layouts.app')

<link rel="stylesheet" href="css/custom.css">

@section('content')
    <h1>Bölgələr</h1>
    <div class="pull-right">
        <a class="btn btn-primary text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
           data-attr="{{ route('regions.create') }}" title="Create a project"> Bolge Əlavə Et
        </a>
    </div>
    <table class="table table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" >Adı</th>
            <th scope="col">Əməliyyatlar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($regions as $key=> $region)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td >{{$region->name}}</td>
            <td> <a class="btn btn-success text-light" data-toggle="modal-edit" id="updateColor" data-target="#updateModal"
                    data-attr="{{ route('regions.edit',['id'=>$region->id]) }}" title="Update Color"> Düzəliş Et
                </a> <a class="btn btn-danger text-light" data-toggle="modal" id="smallButton" data-target="#smallModal"
                    data-attr="{{ route('regions.delete-view',$region->id) }}" title="delete Color"> Sil
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
                    Rəng Əlavə Et
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
