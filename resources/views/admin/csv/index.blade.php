@extends('layouts.admin_layout')

@section('title', 'Пациенты')

@section('content')
   


 <!-- Content Header (Page header) -->
 <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пациенты</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <a href="{{ route ('csv.create') }}">
       <button type="button" class="btn btn-block bg-gradient-success btn-sm"><i class="fa-solid fa-plus"></i>Добавить</button>
    </a>
    

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-4">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Имя 
                                </th>
                                <th>
                                    Фамилия 
                                </th>
                                <th>
                                    ПИТОМЕЦ 
                                </th>
                                <th>
                                    ПОКАЗАТЕЛЬ-1 
                                </th>
                                <th>
                                    ПОКАЗАТЕЛЬ-2
                                </th>
                                <th>
                                    ПОКАЗАТЕЛЬ-3
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($csv as $csvts)
                                <tr>
                                    <td>
                                        {{ $csvts['id'] }}
                                    </td>
                                    <td>
                                        {{ $csvts['lastname'] }}
                                    </td>
                                    <td>
                                        {{ $csvts['firstname'] }}
                                    </td>
                                    <td>
                                        {{ $csvts['pitomec'] }}
                                    </td>
                                    <td>
                                        {{ $csvts['pokazatel1'] }}
                                    </td>
                                    <td>
                                        {{ $csvts['pokazatel2'] }}
                                    </td>
                                    <td>
                                        {{ $csvts['pokazatel3'] }}
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('csv.edit', $csvts['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form action="{{ route('csv.destroy', $csvts['id']) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection