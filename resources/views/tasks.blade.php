@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        S'inscrire
                    </div>
                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')

                        <!-- Formulaire d'inscription -->
                        <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Nom -->
                            <div class="form-group">
                                <label for="form-nom" class="col-sm-3 control-label">Nom</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nom" id="form-nom" class="form-control" placeholder="Dupont">
                                </div>
                            </div>

                            <!-- Prénom -->
                            <div class="form-group">
                                <label for="form-prenom" class="col-sm-3 control-label">Prénom</label>
                                <div class="col-sm-6">
                                    <input type="text" name="prenom" id="form-prenom" class="form-control" placeholder="Jean">
                                </div>
                            </div>

                            <!-- Mail -->
                            <div class="form-group">
                                <label for="form-mail" class="col-sm-3 control-label">E-Mail</label>
                                <div class="col-sm-6">
                                    <input type="email" name="mail" id="form-mail" class="form-control" placeholder="nom@example.com">
                                </div>
                            </div>

                            <!-- Mot de passe -->
                            <div class="form-group">
                                <label for="form-passe" class="col-sm-3 control-label">Mot de passe</label>
                                <div class="col-sm-6">
                                    <input type="password" name="passe" id="form-passe" class="form-control" placeholder="Mot de passe">
                                </div>
                            </div>

                            <!-- Bouton pour s'inscrire -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-user-plus"></i> Valider
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Se connecter
                    </div>
                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')

                        <!-- Formulaire d'inscription -->
                        <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Mail -->
                            <div class="form-group">
                                <label for="form-mail" class="col-sm-3 control-label">E-Mail</label>
                                <div class="col-sm-6">
                                    <input type="email" name="mail" id="form-mail" class="form-control" placeholder="nom@example.com">
                                </div>
                            </div>

                            <!-- Mot de passe -->
                            <div class="form-group">
                                <label for="form-passe" class="col-sm-3 control-label">Mot de passe</label>
                                <div class="col-sm-6">
                                    <input type="password" name="passe" id="form-passe" class="form-control" placeholder="Mot de passe">
                                </div>
                            </div>

                            <!-- Bouton pour s'inscrire -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-user-plus"></i> Valider
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
