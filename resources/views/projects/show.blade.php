@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Projects</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
            </div>
        </div>
    </div><br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $project->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Active:</strong>
                @if ( $project->active == '0' )
                    <a style="color: red !important;">{{'No'}}<a>
                @else
                    <a style="color: lime !important;">{{'Yes'}}</a>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                {{ $project->code }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"style="padding-top: 10px;">
                <strong>Start Date:</strong>
                {{ date('d-m-Y', strtotime($project->start_date)) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End Date:</strong>
                {{ date('d-m-Y', strtotime($project->end_date)) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hours:</strong>
                {{ $project->max_hours }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="padding-top: 10px;">
                <strong>Participants:</strong>
                <table>
                    {{-- Hier toont hij elke user uit project users --}}
                @foreach($project->users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="padding-top: 10px;">
                <strong>Project score:</strong>
                {{ $project->judgement }}
            </div>
        </div>
    </div>
@endsection
