@extends('dashboard')
@section('content')
<div class="content">

    <div class="col-md-10">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


   {{-- @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif--}}


    <table class="table">
        <thead class="table-warning" >
            <tr>
                <th>NO</th>
                <th>Type</th>
                <th>Lieu</th>
                <th>Date de demande</th>
                <th>Description</th>
                <th>Etat de demande</th>
            </tr>
        </thead>
        <tbody>

            @foreach($info as $row)
                @if (auth()->id()==$row->users_id)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$row->type}}</td>
                        <td>{{$row->lieu}}</td>
                        <td>{{$row->dateDemande}}</td>
                        <td>{{$row->description}}</td>
                        <td>{{$row->etat}}</td>
                    </tr>
                @endif

            @endforeach
        </tbody>
    </table>
    </div>

</div>
@endsection


