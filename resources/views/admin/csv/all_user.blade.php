@extends('layouts.admin_layout')

@section('title', 'Пользователи')

@section('content')


<div class="card">
        <div class="card-header">
          <h3 class="card-title">Все пользователи без показателей питомцев</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0" style="display: block;">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 30%">
                          Имя Фамилия 
                      </th>
                      <th style="width: 30%">
                          Логин
                      </th>
                      <th style="width: 30%">
                          Питомец
                      </th>
                      <th>
                          Email
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach ($all_user as $all)
                  <tr>
                      <td>
                      {{ $all['id'] }}
                      </td>
                      <td>
                      {{ $all['firstname'] }} {{ $all['lastname'] }}
                      </td>
                      <td>
                      {{ $all['name'] }}
                      </td>
                      <td>
                      {{ $all['pitomec'] }}
                      </td>
                      <td class="project_progress">
                      {{ $all['email'] }}
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
@endsection

