@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif



                        {{ Form::open(array('url' => "/book/add/")) }}
                        {{  Form::label('nom','Nom du livre')}}
                        {{  Form::text('nom')}}
                        {{  Form::label('auteur','Auteur du livre')}}
                        {{  Form::text('auteur')}}
                        {{  Form::label('description','Description du livre')}}
                        {{  Form::text('description')}}
                        {{  Form::label('genre','Genre du livre')}}
                        {{  Form::text('genre')}}
                        {{ Form::submit('Valider!')}}
                        {{ Form::close() }}
                    </div>

            <div class="panel panel-default">
                <div class="panel-heading">Vos Livre !!!</div>


                        @foreach($books as $book)
                          <div class="" style="padding:20px 10px;">
                            <div class="">
                              <b>Nom</b> :{{$book->nom}}
                            </div>
                            <div class="">
                              <b>Auteur</b> :{{$book->auteur}}
                            </div>
                            <div class="">
                              <b>Description</b> :{{$book->description}}
                            </div>
                            <div class="">
                              <b>Genre</b> :{{$book->genre}}
                            </div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal{{$book->id}}"> Modifier </button>
                            {{ Form::open(array('url' => '/book/supp')) }}
                                            <input type='hidden' value="{{$book->id}}" name="id_supp">
                                        <button type="submit" class="btn btn-default">Supprimer</button>

                             {{ Form::close() }}
                          </div>


                                        <div class="modal fade" id="myModal{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                                    </div>
                                                    {{ Form::open(array('url' => '/book/edit')) }}
                                                    <div class="modal-body">

                                                        <input type='text' name="book_rename">
                                                        <input type='hidden' value="{{$book->id}}" name="id_edit">

                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Modifier votre livre !</button>

                                                    </div>
                                                    {{ Form::close() }}
                                                </div>
                                            </div>
                                        </div>

                          @endforeach
                          {!! $link !!}



        </div>
    </div>
</div>
@endsection
