@extends('layouts.app')

@section('title', 'Dashboard')

@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Projects
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Repository</th>
                                    <th scope="col" class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projectList as $project)
                                    <tr class="table-{{$project->type->color}}">
                                        <th scope="row">{{$project->id}}</th>
                                        <td>{{$project->title}}</td>
                                        <td>{{$project->repo}}</td>
                                        <td class="text-center">{{$project->date}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Go to Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Types
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col" class="text-center">Badge</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($typeList as $type)
                                    <tr class="table-{{$type->color}}"">
                                        <th scope="row">{{$type->id}}</th>
                                        <td>{{$type->name}}</td>
                                        <td class="text-center"><span class="badge bg-dark">{{$type->name}}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin.types.index')}}" class="btn btn-primary">Go to Types</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection