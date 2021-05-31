@extends('dashboard')
@section('content')

<div class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col col-lg-6">


        {{--<div class="info-wrap">

            <!-- Success message -->
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
        </div>
        --}}

        <form  action="{{route('ajoutDemande')}}" method="POST" enctype="multipart/form-data" >

            @csrf

            <div class="form-group">
                <label for="type">Type d'information</label>
                <input type="text" class="form-control {{ $errors->has('type') ? 'error' : '' }}" name="type" id="type"
                value="{{old('type')}}">

                <!-- Error -->
                @if ($errors->has('type'))
                <div class="error">
                    {{ $errors->first('type') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="lieu">lieu</label>
                <select name="lieu">
                    <option>Mellita</option>
                    <option> Hachène</option>
                    <option>Fatou</option>
                    <option>Mezraya</option>
                    <option>Cedghiane</option>
                    <option> Erriadh</option>
                    <option> Oualegh</option>
                    <option>Taourit</option>
                    <option>Boumellel</option>
                    <option>Essouani </option>
                    <option> Ejjouamaâ</option>
                   </select>
            </div>
            <div class="form-group">
                <label for="dateDemande">Date de demande</label>
                <input type="date" class="form-control {{ $errors->has('dateDemande') ? 'error' : '' }}" name="dateDemande" id="dateDemande"
                value="{{old('dateDemande')}}">

                <!-- Error -->
                @if ($errors->has('dateDemande'))
                <div class="error">
                    {{ $errors->first('dateDemande') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control {{ $errors->has('description') ? 'error' : '' }}" name="description" id="description"
                value="{{old('description')}}"></textarea>

                <!-- Error -->
                @if ($errors->has('description'))
                <div class="error">
                    {{ $errors->first('description') }}
                </div>
                @endif
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</div>
    </div>
</div>

@endsection
