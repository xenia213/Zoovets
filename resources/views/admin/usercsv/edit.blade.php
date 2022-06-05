@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Сопоставить данные</h1>
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action= "{{ route('usercsv.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Выберите пользователя</label>
                                        <select name="user_id" class="form-control" required>
                                            @foreach ($users as $user)
                                                <option value="{{ $user['id'] }}">{{ $user['lastname'] }} {{ $user['firstname'] }} - {{ $user['pitomec'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Выберите из загруженных данных</label>
                                        <select name="vet1_id" class="form-control" required>
                                            @foreach ($csvs as $csv)
                                                <option value="{{ $csv['id'] }}">{{ $csv['lastname'] }} {{ $csv['firstname'] }} - {{ $csv['pitomec'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

    

                            
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection