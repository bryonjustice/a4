@extends('layouts.master')

@section('title')
    Defect Backlog
@endsection

@section('content')
    <div class="uk-card uk-card-default">
    <table class="uk-table uk-table-small uk-table-divider uk-table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Priority</th>
                <th>State</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($defects as $defect)
                <tr>
                    <td>{{ $defect->id }}</td>
                    <td>{{ $defect->title }}</td>
                    <td>{{ $defect->state->long_name }}</td>
                    <td>{{ $defect->priority->long_name }}</td>
                    <td>
                        <a href="#"
                            class="uk-icon-link uk-margin-small-right"
                            uk-icon="icon: file-edit"></a>
                        <a href="#"
                            class="uk-icon-link" uk-icon="icon: trash"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
