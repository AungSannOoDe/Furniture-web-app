@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">

    <div class="row px-3 mt-5">
        <div class="col-11 ms-5">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>OrderId</th>
                            <th>UserName</th>
                            <th>orderCode</th>
                            <th>Start date</th>
                            <th>total</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($order)!=0)
                        @foreach ($order as  $o)
                        <tr>
                            <td>{{$o->id}}</td>
                            <td>{{$o->username}}</td>
                            <td>{{$o->order_code}}</td>
                            <td>{{$o->total_price}}</td>
                            <td>{{$o->created_at->format('F-j-Y')}}</td>
                            <td>
                                <select name="status" id="status" class="form-control">
                                    <option value="0" @if ($o->status==0)
                                        selected
                                    @endif >
                                        pending
                                    </option>
                                    <option value="1" @if ($o->status==1)
                                        selected
                                    @endif>
                                        Accept
                                    </option>
                                    <option value="2" @if ($o->status==2)
                                        selected
                                    @endif>
                                        reject
                                    </option>
                                </select>
                            </td>
                        </tr>
                        @endforeach
                        @else
                              <tr >
                                <td colspan="6">
                                    <h6 class="text-danger text-center">This is no product </h6>
                                </td>
                              </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>

    </div>

    </div>
@endsection
@push('scripts')
   <script src="{{asset('js/orderstatus.js')}}"></script>
@endpush
