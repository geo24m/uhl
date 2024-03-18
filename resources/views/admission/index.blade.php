@extends('layouts.site')

@section('title', $page->title)
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-steps.css') }}">
    <style>
        .step-app > .step-content {
            border: none;
            padding: 0;
        }
        .billing-info-wrap .checkout-account input {

        }
    </style>
@endsection

@section('content')

@include('partials.breadcrumb')

<div class="course-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="course-tab-list nav pb-25 mb-35">
                        <a class="active" href="#course-details-1" data-toggle="tab" >
                            <h4>Conditions d'accès</h4>
                        </a>
                        <a href="#course-details-2" data-toggle="tab">
                            <h4>Frais Mensuels</h4>
                        </a>
                        <a href="#course-details-3" data-toggle="tab">
                            <h4>Inscription</h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="course-details-1">
                            <div class="over-view-content">
                                <h4>Année scolaire 2021 - 2022</h4>
                                <h5>La composition du dossier comprend :</h5>
                                <div class="over-view-list">
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Un extrait d'acte de naissance,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Trois photos Format identité couleur,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Une Chemise cartonée,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Une rame de papier A4 pour les ancien etudian et A3 pour les nouveaux,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Un paquet de marker schneider non permanent,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Un enveloppe kaki format A4,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Les résultats de l'années précédente ou la photocopie legalisé du BAC ou diplome équivalent,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Frais d'inscription plus un mois de garentie,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Une boite de craie blanche,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Frais du Ministere 10.000 FCFA,</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Assurence 1.000 FCFA.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <ol>
                                    <li>Un extrait d'acte de naissance</li>
                                    <li>Trois photos Format identité couleur</li>
                                    <li>Une Chemise cartonée</li>
                                    <li>Une rame de papier A4 pour les ancien etudian et A3 pour les nouveaux</li>
                                    <li>Un paquet de marker schneider non permanent</li>
                                    <li>Un enveloppe kaki format A4</li>
                                    <li>Les résultats de l'années précédente ou la photocopie legalisé du BAC ou diplome équivalent</li>
                                    <li>Frais d'inscription plus un mois de garentie</li>
                                    <li>Une boite de craie blanche</li>
                                    <li>Frais du Ministere 10.000 FCFA</li>
                                    <li>Assurence 1.000 FCFA</li>
                                </ol>
                            -->
                                <p>L’inscription est annuelle. Celle à caractère pédagogique s’effectue lors de l’inscription administrative.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="course-details-2">
                            <div class="over-view-content">
                                <h4>Année scolaire 2022 - 2023</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Frais Mensuels UHL Brazzaville</h5>
                                        <div class="over-view-list">
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence professionnelle 1 : <strong>40.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence professionnelle 2 : <strong>50.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence professionnelle 3 : <strong>50.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Master professionnelle : <strong>75.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence en droit 1 : <strong>40.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence en droit 2 : <strong>50.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence en droit 3 : <strong>50.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Master en droit : <strong>75.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Frais Mensuels UHL Pointe-Noire</h5>
                                        <div class="over-view-list">
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence professionnelle 1 : <strong>40.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence professionnelle 2 : <strong>50.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence professionnelle 3 : <strong>55.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Master professionnelle : <strong>75.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence en droit 1 : <strong>50.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence en droit 2 : <strong>55.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Licence en droit 3 : <strong>60.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                            <div class="sin-over-view-list">
                                                <div class="course-list-icon">
                                                    <i class="fa fa-check"></i> .
                                                </div>
                                                <div class="course-list-content">
                                                    <p>Master en droit : <strong>85.000 fcfa</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="course-details-3">
                            <div class="over-view-content">
                                <h4>Année scolaire 2021 - 2022</h4>
                                <h5>Inscription</h5>
                                <div class="over-view-list">
                                    <div class="step-app" id="demo">
                                        <ul class="step-steps d-none">
                                            <li data-step-target="step1">Information personnelle</li>
                                            <li data-step-target="step2" id="stepTwo">Step 2</li>
                                            <li data-step-target="step3">Step 3</li>
                                        </ul>
                                        <div class="step-content">
                                            <div class="step-tab-panel" data-step="step1">
                                                <div class="checkout-area">
                                                    <div class="billing-info-wrap">
                                                        <h4 class="">Information personnel</h4>
                                                        <p class="mb-4">Entrer vos informations personnel</p>
                                                        <form action="{{ route('admission_store') }}" method="POST" id="info-personnel">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="lastname">Nom complet</label>
                                                                        <input type="text" name="lastname" id="lastname" class="form-control @error('lastname') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="lastname-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="firstname">Prénom</label>
                                                                        <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="firstname-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class=" mb-20">
                                                                        <label>Genre:</label><br>
                                                                        <input type="radio" class="form-control @error('genre') is-invalid @enderror" name="genre" id="homme" style="width: auto; height: auto"> <label for="homme">Homme</label>
                                                                        <input type="radio" class="form-control @error('genre') is-invalid @enderror" name="genre" id="femme" style="width: auto; height: auto"> <label for="femme">Femme</label>
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="genre-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="date_of_birth">Date de naissance</label>
                                                                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="date_of_birth-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="place_of_birth">Lieu de naissance</label>
                                                                        <input type="text" name="place_of_birth" id="place_of_birth" class="form-control @error('place_of_birth') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="place_of_birth-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="country_of_birth">Pays de naissance</label>
                                                                        <input type="text" name="country_of_birth" id="country_of_birth" class="form-control @error('country_of_birth') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="country_of_birth-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="email">Email</label>
                                                                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="email-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="address">Adresse</label>
                                                                        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="address-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="phone">Télephone</label>
                                                                        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="phone-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="avatar">Photo</label>
                                                                        <input type="file" name="avatar" id="avatar" class="form-control @error('avatar') is-invalid @enderror">
                                                                        <div class="invalid-feedback" role="alert">
                                                                            <span id="avatar-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step-tab-panel" data-step="step2">
                                                <div class="checkout-area">
                                                    <div class="billing-info-wrap">
                                                        <h4 class="">Niveau d'étude actuel</h4>
                                                        <form action="test.php" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="current_cycle">Cycle</label>
                                                                        <select name="current_cycle" id="current_cycle">
                                                                            <option value="">Secondaire (S)</option>
                                                                            <option value="">Licence (L)</option>
                                                                            <option value="">Master (M)</option>
                                                                            <option value="">Doctorat (D)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="current_level">Niveau</label>
                                                                        <select name="current_level" id="current_level">
                                                                            <option value="">Baccalaureat</option>
                                                                            <option value="">Licence1</option>
                                                                            <option value="">Licence2</option>
                                                                            <option value="">Licence3</option>
                                                                            <option value="">Master1</option>
                                                                            <option value="">Master2</option>
                                                                            <option value="">Doctorat</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-info mb-20">
                                                                        <label for="last_degree">Photocopie legalisé du BAC ou diplome équivalent</label>
                                                                        <input type="file" name="last_degree" id="last_degree">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step-tab-panel" data-step="step3">
                                                <div class="checkout-area">
                                                    <div class="billing-info-wrap">
                                                        <h4 class="">Etude actuelle</h4>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="etablissement">Etablissement</label>
                                                                        <select name="etablissement" id="etablissement">
                                                                            <option value="">UHL Brazzaville</option>
                                                                            <option value="">UHL Pointe-Noire</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="cycle">Cycle</label>
                                                                        <select name="cycle" id="cycle">
                                                                            <option value="">Licence (L)</option>
                                                                            <option value="">Master (M)</option>
                                                                            <option value="">Doctorat (D)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="level">Niveau</label>
                                                                        <select name="level" id="level">
                                                                            <option value="">Licence1</option>
                                                                            <option value="">Licence2</option>
                                                                            <option value="">Licence3</option>
                                                                            <option value="">Master1</option>
                                                                            <option value="">Master2</option>
                                                                            <option value="">Doctorat</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="formation">Filieres</label>
                                                                        <select name="formation" id="formation">
                                                                            <option value="">Droit</option>
                                                                            <option value="">Informatique</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="billing-select mb-20">
                                                                        <label for="motivation">Motivation</label>
                                                                        <textarea name="motivation" id="motivation" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-footer">
                                          <button data-step-action="prev" class="step-btn">Retour</button>
                                          <button data-step-action="next" class="step-btn ">Continuer</button>
                                          <button data-step-action="finish" class="step-btn">Envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                {{-- @include('partials.sidebar') --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('assets/js/admission.js') }}"></script>
    <script>
        $('#demo').steps({
            onChange: function (currentIndex, newIndex, stepDirection) {

                // Steps1
                if (currentIndex === 0) {
                    if (stepDirection === 'forward') {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        });
                        // Nettoyage des champs
                        $('div+span').html('');
                        $('input').removeClass('is-invalid');
                        $('select').removeClass('is-invalid');
                        $.ajax({
                            method: $('#info-personnel').attr('method'),
                            url: $('#info-personnel').attr('action'),
                            data: $('#info-personnel').serialize(),
                            dataType: "json"
                        })
                        .done(function (data) {
                            if (data.success) {
                                $('#stepTwo').attr('data', 'ok')
                            }
                        })
                        .fail(function (data) {
                            if (data.responseJSON) {
                                $.each(data.responseJSON, function (key, value) {
                                    $('#' + key).addClass('is-invalid')
                                    $('#' + key + '-error').html(value)
                                })
                            }
                            console.log('error');
                        })
                        if ($('#stepTwo').attr('data') === 'ok') {
                            return true
                        }
                    }
                    
                }

                // Steps2
                if (currentIndex === 1) {
                    if (stepDirection === 'forward') {
                        return true
                    }
                    if (stepDirection === 'backward') {
                        $('#stepTwo').attr('data', '')
                        return true
                    }
                }

                // Steps3
                if (currentIndex === 2) {
                    if (stepDirection === 'forward') {
                        return true
                    }
                    if (stepDirection === 'backward') {
                        return true
                    }
                }
            },
            onFinish: function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                // Nettoyage des champs
                $('div+span').html('');
                $('input').removeClass('is-invalid');
                $('select').removeClass('is-invalid');
                $.ajax({
                    method: $('#info-personnel').attr('method'),
                    url: $('#info-personnel').attr('action'),
                    data: $('#info-personnel').serialize(),
                    dataType: "json"
                })
                .done(function (data) {
                    if (data.success) {
                        $('#stepTwo').attr('data', 'ok')
                    }
                })
                .fail(function (data) {
                    if (data.responseJSON) {
                        $.each(data.responseJSON, function (key, value) {
                            $('#' + key).addClass('is-invalid')
                            $('#' + key + '-error').html(value)
                        })
                    }
                    console.log('error');
                })
            }
        });
    </script>
@endsection