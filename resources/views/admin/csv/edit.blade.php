@extends('layouts.admin_layout')

@section('title', 'Редактировать данные')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать данные: {{ $csv['title'] }}</h1>
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
                        <form action="{{ route('csv.update', $csv['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Имя</label>
                                    <input type="text" value="{{ $csv['lastname'] }}" name="lastname" class="form-control"
                                        id="exampleInputEmail1" placeholder="Введите Имя" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Фамилия</label>
                                    <input type="text" value="{{ $csv['firstname'] }}" name="firstname" class="form-control"
                                        id="exampleInputEmail1" placeholder="Введите Фамилию" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Питомец</label>
                                    <input type="text" value="{{ $csv['pitomec'] }}" name="pitomec" class="form-control"
                                        id="exampleInputEmail1" placeholder="Введите Имя питомца" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Показатель 1</label>
                                    <input type="text" value="{{ $csv['pokazatel1'] }}" name="pokazatel1" class="form-control"
                                        id="exampleInputEmail1" placeholder="Введите показатель 1" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Показатель 2</label>
                                    <input type="text" value="{{ $csv['pokazatel2'] }}" name="pokazatel2" class="form-control"
                                        id="exampleInputEmail1" placeholder="Введите показатель 2" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Показатель 3</label>
                                    <input type="text" value="{{ $csv['pokazatel3'] }}" name="pokazatel3" class="form-control"
                                        id="exampleInputEmail1" placeholder="Введите показатель 3" required>
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