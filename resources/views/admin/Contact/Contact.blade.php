@extends('admin.layouts.app')
@section('Content')
    <div id="layoutSidenav_content">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="mx-auto ">
                    <h2 class="text-center">Contact to admin</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>description</th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                  @if (count($Contacts)==0)
                  <tr>
                    <td colspan="5" class="mx-auto text-center text-danger">There is no contact</td>
                  </tr>

                  @else
                  @foreach($Contacts as $contact)
                  <tr>
                      <td>Aung</td>
                      <td>aung@gmail.com</td>
                      <td>09-677513378</td>
                      <td>View details</td>
                      <td>
                          <a href="" class="btn btn-danger">delete</a>
                      </td>
                  </tr>
                  @endforeach
                  @endif



                </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
