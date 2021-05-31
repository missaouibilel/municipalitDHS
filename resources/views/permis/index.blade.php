
@extends('dashboard')
@section('content')
<div class="content">
{{--
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

{{--
    <table class="table table-dark table-hover">
        <tr>
            <td>NO</td>
            <td>Institution autorisée</td>
            <td>Numéro d'identification fiscale:</td>
            <td>La qualité du déclarant</td>
            <td>État de l'immobilier</td>
            <td>Adresse</td>
            <td>Superficie du terrain non bâti (m2)</td>
            <td>Valeur commerciale (m2)</td>
            <td>Surface couverte (m2)</td>
            <td>La composition du bien immobilier et ses dépendances</td>
            <td>Teinture d'utilisation du médicament</td>
            <td>Activité mentionnée (strictement)</td>
            <td>Services disponibles</td>
         </tr>

        @foreach($permis as $row)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$row->institutionAutorise}}</td>
                <td>{{$row->numIdentificationFiscale}}</td>
                <td>{{$row->qualitéDéclarant}}</td>
                <td>{{$row->etatImmobilier}}</td>
                <td>{{$row->adresse}}</td>
                <td>{{$row->superficieTerrainNonBati}}</td>
                <td>{{$row->valeurCommerciale}}</td>
                <td>{{$row->surfaceCouverte}}</td>
                <td>{{$row->compositionImmobilierEtSesDépendances}}</td>
                <td>{{$row->teintureUtilisation}}</td>
                <td>{{$row->activitéMentionnée}}</td>
                <td>{{$row->servicesDispo}}</td>
            </tr>
        @endforeach
    </table>
    </div>

</div>
--}}
<div class="content">
    <div class="container lg-12">
        <div class="row">
            <div class="col col-lg-12">


            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> République Tunisienne</font></font></div>
            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ministère des affaires locales et de l'environnement</font></font></div>
            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Commune de Djerba Midoun</font></font></div>
            <div align="center"><span style="font-size:36px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permis </font></font></span></div>
            <div align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il concerne l'immobilier bâti et le terrain non bâti</font></font></div>
            <div align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Le code de la collection locale publié par la loi n ° 11 de 1997 du 3 février 1997)</font></font></div> <br>

            @foreach($permis as $row)
                @if (auth()->id()==$row->users_id)
                    <div>
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">Institution autorisée:</h5>
                                    <div class=col-lg-6>
                                        <p>{{$row->institutionAutorise}}</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6 ">Numéro d'identification fiscale:</h5>
                                    <div class=col-lg-6>
                                            <p>{{$row->numIdentificationFiscale}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">La qualité du déclarant:</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->qualitéDéclarant}}</p>
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6">État de l'immobilier:</h5>
                                <div class=col-lg-6>
                                    <p>{{$row->etatImmobilier}}</p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4">Adresse:</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->adresse}}</p>
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5 class="col-lg-6 ">Superficie du terrain non bâti (m2):</h5>
                                <div class=col-lg-6>
                                        <p>{{$row->superficieTerrainNonBati}}</p>
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">Valeur commerciale (m2):</h5>
                                <div class="col-lg-6">
                                    {{$row->valeurCommerciale}}
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6 ">Surface couverte (m2):</h5>
                                <div class=col-lg-6>
                                    <p>{{$row->surfaceCouverte}}</p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">La composition du bien immobilier et ses dépendances:</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->compositionImmobilierEtSesDépendances}}</p>
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6 ">Teinture d'utilisation du médicament:</h5>
                                        <div class=col-lg-6>
                                            <p>{{$row->teintureUtilisation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">Activité mentionnée (strictement):	</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->activitéMentionnée}}</p>
                                </div>
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group row">
                                    <h5  class="col-lg-4 ">Services disponibles:</h5>
                                    <div class="col-lg-6">
                                        <p>{{$row->servicesDispo}}</p>
                                    </div>
                            </div>


                        </div>
                    <hr>

                @endif
            @endforeach
            </div>
        </div>
    </div>
</div>
</div>

@endsection


