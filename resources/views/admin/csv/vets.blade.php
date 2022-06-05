@extends('layouts.admin_layout')

@section('title', 'Обновление данных')

@section('content')

<div class="card-header">
   <h3 class="card-title"></h3>
</div>

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Данные обновлены</h3>
    </div>
</div>

<a href="{{ route ('csv.index') }}" class="nav-link">
   <button type="button" class="btn btn-outline-info btn-block btn-flat"><i class="fa fa-book"></i>Все пациенты</button>
</a>
<a href="{{ route ('usercsv.create') }}" class="nav-link">
   <button type="button" class="btn btn-outline-info btn-block btn-flat"><i class="fa fa-book"></i>Сопоставить пользователей с загруженными данными</button>
</a>









@endsection