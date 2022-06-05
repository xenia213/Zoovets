@extends('profile.layouts.style')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>  
    <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h2 class="m-0">
                         {{ $posts -> subject }}
                     </h1>
                     <h1><span class="info-box-text">{{ $posts->title }}</span></h1>
                     <x-jet-section-border />
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
                       
                        <section class="content">
     <div class="container-fluid">
         <div class="card">
             <div class="card-body p-1">
                 <table class="table table-striped projects">
                   <div class="row">
                  
                      <div class="col-md-12 col-sm-15 col-12">
                        <div class="info-box bg-gradient-light">                        
                          
                          <div class="info-box-content">
                             <span class="info-box-number">{{ $posts->created_at }}</span>
                             <img class="card-img-top" src="{{URL::asset($posts->img)}}" alt="Card image cap">
                             <span class="card-text">{!! $posts->text !!}</span>
                             
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      
                  
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