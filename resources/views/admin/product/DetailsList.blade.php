@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
    <div class="container">
<div class="row px-4 py-4">
    <table class="w-100 table">
        <thead>
           <tr>
               <th>Product Name</th>
               <th>width</th>
               <th>height</th>
               <th>Model Number</th>
               <th>Warrantly</th>
               <th>Material_1</th>
               <th>Material_2</th>
               <th>Country</th>
               <th></th>
               <th></th>
           </tr>
        </thead>
        <tbody>
            <tr>
                @if (count($details)==0)
                  <td class="text-danger text-center" colspan="10">There is no detials for product</td>
                @else
                @foreach ( $details as $detail )
                <td>{{$detail->product_id}}</td>
                <td>{{$detail->width}} cm</td>
                <td>{{$detail->height}} cm</td>
                <td>{{$detail->ModelNumber}}</td>
                <td>{{$detail->Warrantly}} Years</td>
                <td>{{$detail->Material_1}}</td>
                <td>{{$detail->Material_2}}</td>
                <td>{{$detail->Country}}</td>
                <td>
                    <button class="btn btn-warning">Edit</button>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
                @endforeach
                @endif
            </tr>
        </tbody>
     </table>
</div>
    </div>

</div>
@endsection
