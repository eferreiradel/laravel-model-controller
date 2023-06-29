@extends('template');
<?php $pageTitle = "Movies"; ?>
@section('main')
<div class="contaier-fluid">
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-3 py-2">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            {{$movie->title}}
                        </h4>
                    </div>
                    <div class="card-body px-0">
                        <table class="table table-striped">
                            <tr>
                                <td>
                                    Original Title: 
                                </td>
                                <td>
                                    {{$movie->original_title}}
                                </td>
                            </tr>    
                            <tr>
                                <td>
                                    Nationality: 
                                </td>
                                <td>
                                    {{$movie->nationality}}
                                </td>
                            </tr>    
                            <tr>
                                <td>
                                    Date: 
                                </td>
                                <td>
                                    {{$movie->date}}
                                </td>
                            </tr>    
                            <tr>
                                <td>
                                    Vote: 
                                </td>
                                <td>
                                    {{$movie->vote}}
                                </td>
                            </tr>    
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection