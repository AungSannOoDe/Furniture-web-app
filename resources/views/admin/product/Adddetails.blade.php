@extends('admin.layouts.app')
@push('styles')
    <style>
        .tr{
            transition: 1s
        }
         .tr:hover{
   background: #f1f1f1;
         }
        </style>
@endpush
@section('Content')
<div id="layoutSidenav_content">
    <div class="container">
          <div class="row px-4 py-4">
            <div class="col-5  ">
                <div class="card ">
                    <div class="card-header">
                        <h2 class="text-center">Choose Category</h2>
                    </div>
                    <div class="card-body">
                         <select name="" id="detailsCate" class="form-control">
                           @if (count($Categories)==0)
                           <option value="">Selected Category</option>
                           @else
                           <option value="">Selected Category</option>
                            @foreach ($Categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->Cate_name}}</option>
                             @endforeach
                           @endif
                         </select>
                    </div>
                </div>
            </div>
            <div class="col-5 offset-2">
                <div class="card ">
                    <div class="card-header">
                        <h2 class="text-center">Add product</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col"> product Name</th>
<th></th>
                              </tr>
                            </thead>
                            <tbody id="detailsTable">
                            </tbody>
                          </table>
                    </div>
                </div>

            </div>
          </div>
    </div>
{{-- add details for product --}}
  <section class="cotainer" id="FormContainer">
  </section>

</div>


@endsection
@push('addDetails')
    <script src="{{asset('js/adddetails.js')}}"></script>
@endpush
@push('formlayoutes')
    <script src="{{asset('js/formDetails.js')}}"></script>
@endpush
@push('formadd')
    <script src="{{asset('js/formadd.js')}}"></script>
@endpush
