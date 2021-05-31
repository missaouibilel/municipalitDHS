@extends('dashboard')
@section('content')
<div class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col col-lg-12">


            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> République Tunisienne</font></font></div>
            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ministère des affaires locales et de l'environnement</font></font></div>
            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Commune de Djerba Midoun</font></font></div>
            <div align="center"><span style="font-size:36px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permis </font></font></span></div>
            <div align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il concerne l'immobilier bâti et le terrain non bâti</font></font></div>
            <div align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Le code de la collection locale publié par la loi n ° 11 de 1997 du 3 février 1997)</font></font></div> <br>


            <form  action="{{route('ajoutPermis')}}" method="POST" enctype="multipart/form-data" >

                @csrf
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="institutionAutorise" class="col-lg-4 col-form-label">Institution autorisée:</label>
                          <div class="col-lg-6">
                                <input type="text" class="form-control" class="form-control{{ $errors->has('institutionAutorise') ? 'error' : '' }}" name="institutionAutorise" id="institutionAutorise"
                                value="{{old('institutionAutorise')}}">

                                <!-- Error -->
                                @if ($errors->has('institutionAutorise'))
                                    <div class="error">
                                        {{ $errors->first('institutionAutorise') }}
                                    </div>
                                @endif
                          </div>
                        </div>
                    </div>


                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="numIdentificationFiscale" class="col-lg-6 col-form-label">Numéro d'identification fiscale:</label>
                          <div class=col-lg-6>
                                <input type="text" class="form-control"  class="form-control{{ $errors->has('numIdentificationFiscale') ? 'error' : '' }}" name="numIdentificationFiscale" id="numIdentificationFiscale"
                                value="{{old('numIdentificationFiscale')}}">

                                <!-- Error -->
                                @if ($errors->has('numIdentificationFiscale'))
                                <div class="error">
                                    {{ $errors->first('numIdentificationFiscale') }}
                                </div>
                             @endif
                          </div>
                        </div>
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="qualitéDéclarant" class="col-lg-4 col-form-label">La qualité du déclarant:</label>
                          <div class="col-lg-6">
                            <select name="qualitéDéclarant">
                                <option>Propriétaire</option>
                                <option>Bienfaiteur</option>
                                <option>Occupant</option>
                                <option>Exploité</option>
                             </select>
                          </div>
                        </div>
                    </div>


                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="etatImmobilier" class="col-lg-6 col-form-label">État de l'immobilier:</label>
                          <div class=col-lg-6>
                                <select name="etatImmobilier" id="etatImmobilier">
                                    <option>Imeuble</option>
                                    <option>Non construit</option>
                                </select>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="adresse" class="col-lg-4 col-form-label">Adresse:</label>
                          <div class="col-lg-6">
                                <input type="text" class="form-control" {{ $errors->has('adresse') ? 'error' : '' }}" name="adresse" id="adresse"
                                value="{{old('adresse')}}">

                                <!-- Error -->
                                @if ($errors->has('adresse'))
                                    <div class="error">
                                        {{ $errors->first('adresse') }}
                                    </div>
                                @endif
                          </div>
                        </div>
                    </div>


                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="superficieTerrainNonBati" class="col-lg-6 col-form-label">Superficie du terrain non bâti (m2):</label>
                          <div class=col-lg-6>
                                <input type="text" class="form-control" {{ $errors->has('superficieTerrainNonBati') ? 'error' : '' }}" name="superficieTerrainNonBati" id="superficieTerrainNonBati"
                                value="{{old('superficieTerrainNonBati')}}">

                                <!-- Error -->
                                @if ($errors->has('superficieTerrainNonBati'))
                                <div class="error">
                                    {{ $errors->first('superficieTerrainNonBati') }}
                                </div>
                             @endif
                          </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="valeurCommerciale" class="col-lg-4 col-form-label">Valeur commerciale (m2):</label>
                          <div class="col-lg-6">
                                <input type="text" class="form-control" class="form-control {{ $errors->has('valeurCommerciale') ? 'error' : '' }}" name="valeurCommerciale" id="valeurCommerciale"
                                value="{{old('valeurCommerciale')}}">

                                <!-- Error -->
                                @if ($errors->has('valeurCommerciale'))
                                    <div class="error">
                                        {{ $errors->first('valeurCommerciale') }}
                                    </div>
                                @endif
                          </div>
                        </div>
                    </div>


                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="surfaceCouverte" class="col-lg-6 col-form-label">Surface couverte (m2):</label>
                          <div class=col-lg-6>
                                <input type="text" class="form-control" {{ $errors->has('surfaceCouverte') ? 'error' : '' }}" name="surfaceCouverte" id="surfaceCouverte"
                                value="{{old('surfaceCouverte')}}">

                                <!-- Error -->
                                @if ($errors->has('surfaceCouverte'))
                                <div class="error">
                                    {{ $errors->first('surfaceCouverte') }}
                                </div>
                             @endif
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="compositionImmobilierEtSesDépendances" class="col-lg-4 col-form-label">La composition du bien immobilier et ses dépendances:</label>
                          <div class="col-lg-6">
                                <input type="text" class="form-control" class="form-control {{ $errors->has('compositionImmobilierEtSesDépendances') ? 'error' : '' }}" name="compositionImmobilierEtSesDépendances"
                                value="{{old('compositionImmobilierEtSesDépendances')}}" id="compositionImmobilierEtSesDépendances">

                                <!-- Error -->
                                @if ($errors->has('compositionImmobilierEtSesDépendances'))
                                    <div class="error">
                                        {{ $errors->first('compositionImmobilierEtSesDépendances') }}
                                    </div>
                                @endif
                          </div>
                        </div>
                    </div>


                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="teintureUtilisation" class="col-lg-6 col-form-label">Teinture d'utilisation du médicament:</label>
                                <div class=col-lg-6>
                                    <select name="teintureUtilisation" >
                                        <option>Apaisante</option>
                                        <option>Pratiquer une activité professionnelle</option>
                                    </select>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="form-group row">
                                <label for="activitéMentionnée" class="col-lg-4 col-form-label">Activité mentionnée (strictement):	</label>
                          <div class="col-lg-6">
                                <input type="text" class="form-control" class="form-control {{ $errors->has('activitéMentionnée') ? 'error' : '' }}" name="activitéMentionnée" id="activitéMentionnée"
                                value="{{old('activitéMentionnée')}}">

                                <!-- Error -->
                                @if ($errors->has('activitéMentionnée'))
                                    <div class="error">
                                        {{ $errors->first('activitéMentionnée') }}
                                    </div>
                                @endif
                          </div>
                        </div>
                    </div>

                    <div class="col col-lg-6">
                        <div class="form-group row">
                            <label for="servicesDispo[]" class="col-lg-4 col-form-label">Services disponibles:</label>
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" value="Nettoyage" name="servicesDispo[]" >
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Nettoyage
                                        </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="checkbox" value=" La présence de routes goudronnées" id="2"  name="servicesDispo[]">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        La présence de routes goudronnées
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=" Présence de trottoirs carrelés" id="3"  name="servicesDispo[]">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Présence de trottoirs carrelés
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=" Existence de canaux de drainage des eaux usées" id="4"  name="servicesDispo[]">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Existence de canaux de drainage des eaux usées
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="La présence de canaux de drainage des eaux pluviales" id="6" name="servicesDispo[]" >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        La présence de canaux de drainage des eaux pluviales
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="La présence de l'illumination publique" id="5" name="servicesDispo[]" >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        La présence de l'illumination publique
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-10 text-center">
                        <input type="submit" name="send" value="Submit" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
