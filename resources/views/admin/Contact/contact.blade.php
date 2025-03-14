@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
<main class="container mx-auto  bg-slate-200 h-full flex justify-between flex-wrap content-stretch px-6 py-3 gap-5">
    @foreach ( $contacts as $contact )
    <section class="w-[400px] h-[200px]  bg-red-400 px-3 py-3 rounded-lg">
        <div class="flex justify-start gap-3">
            <img src="./images/home.png" alt="" class="w-[80px] h-[80px] rounded-full ">
            <div class="self-center">
                <h1 class="font-bold ">{{$contact->name}}</h1>
                <p class="text-slate-400 font-bold">{{$contact->email}}</p>
            </div>
        </div>
        <p class="tracking-tight text-sm mt-3">{{$contact->message}}</p>
    </section>
    @endforeach
</main>
</div>
@endsection
