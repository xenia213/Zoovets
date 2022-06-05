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
               <div class="row mb-1">
                  <div class="col-sm-6">
                     <h2 class="m-0">Новости</h1>
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
                   @foreach ($posts as $post)
                      <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box ">                        
                          
                          <div class=" info-box-content" >
                             <span class="card-header p-3 info-box-text">{{ $post->title }}</span>
                             <span class="info-box-number p-3">{{ $post->created_at }}</span>
                             <img class="card-img-top" src="{{URL::asset($post->img)}}" alt="Card image cap">
                             <a href="{{ route ('news_one', $post->id) }}"  class="btn btn-light">    Подробнее</a></p>
                             <!--<a href="{{url('posts/'.$post->id)}}" class="btn btn-light">    ...читать далее</a></p>-->
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