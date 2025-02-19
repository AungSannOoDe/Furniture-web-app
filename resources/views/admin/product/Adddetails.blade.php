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
   <h2 class="text-center">Add Details for product</h2>
 <div class="row mb-3">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-body mb-3">
                <form action="">
                    <div class="form-group">
                        <label for="width">Width</label>
                        <input type="number" class="form-control" id="width"  placeholder="Enter Width..">
                      </div>
                      <div class="form-group mt-3">
                        <label for="heigth">Height</label>
                        <input type="number" class="form-control" id="heigth"  placeholder="Enter Width..">
                      </div>
                      <div class="form-group mt-3">
                        <label for="model">Model Number</label>
                        <input type="text" class="form-control" id="heigth"  placeholder="Enter Model..">
                      </div>
                      <div class="form-group mt-3">
                        <label for="warr">Warrantly</label>
                        <input type="number" class="form-control" id="warr"  placeholder="Enter Warrantly..">
                      </div>
                      <div class="form-group mt-3">
                        <label for="m1">Material 1</label>
                        <input type="text" class="form-control" id="m1"  placeholder="Enter Material 1..">
                      </div>
                      <div class="form-group mt-3">
                        <label for="m2">Material 2</label>
                        <input type="text" class="form-control" id="m2"  placeholder="Enter Material 2..">
                      </div>
                      <div class="form-group mt-3">
                        <label for="coun">Country</label>
                        <input type="text" class="form-control" id="coun"  placeholder="Enter Country..">
                      </div>
                      <div class="mt-3 ">
                        <button class="btn btn-primary block w-100">Add Details</button>
                      </div>
                </form>
            </div>

        </div>
    </div>
 </div>
  </section>

</div>


@endsection
@push('addDetails')
    <script src="{{asset('js/adddetails.js')}}"></script>
@endpush
@push('formlayoutes')
    <script src="{{asset('js/formDetails.js')}}"></script>
@endpush
