@extends('profile.layouts.style')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Показатели') }}
        </h2>
    </x-slot>
    <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                 
                      <h2 class="m-0">Последние снятые показатели вашего питомца</h1>
                  </div><!-- /.col -->
               </div><!-- /.row -->

               <x-jet-section-border />
                 @if (session('success'))
                 <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                 </div>
                 @endif
            </div><!-- /.container-fluid -->
        </div>

  <section class="content">
     <div class="container-fluid">
         <div class="card">
             <div class="card-body p-0">
                 <table class="table table-striped projects">
                   <div class="row">
                     
                   @foreach ($user as $uc)
                      <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-info">
                          <span class="info-box-icon"><i class="far fa-heart"></i></span>
                          <div class="info-box-content">
                             <span class="info-box-text">Показатель 1</span>
                             <span class="info-box-number">{{  $uc -> pokazatel1 }}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      
                      <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-success">
                          <span class="info-box-icon"><i class="fa fa-heartbeat "></i></span>
                          <div class="info-box-content">
                          <span class="info-box-text">Показатель 2</span>
                          <span class="info-box-number">{{  $uc -> pokazatel2  }}</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->

                      <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fa fa-stethoscope"></i></span>
                            <div class="info-box-content">
                            <span class="info-box-text">Показатель 3</span>
                            <span class="info-box-number">{{  $uc -> pokazatel3  }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                   @endforeach
                   </div>
                 </table>
                 <x-jet-section-border />
             </div>
             <!-- /.card-body -->
         </div>
     </div><!-- /.container-fluid -->
  </section>
      </div>    
    </div>






    

 
</x-app-layout>

