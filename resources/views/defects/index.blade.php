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
                <th>State</th>
                <th>Priority</th>
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
                        <a href="defects/view/{{ $defect->id }}"
                            class="uk-icon-link"
                            uk-icon="icon: search"
                            title="View this record"></a>
                        <a href="defects/edit/{{ $defect->id }}"
                            class="uk-icon-link"
                            uk-icon="icon: file-edit"
                            title="Edit this record"></a>
                        <a href="defects/delete/{{ $defect->id }}"
                            class="uk-icon-link" uk-icon="icon: trash"
                            title="Delete this record"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
