@extends('layouts.master')


@section('title')

        Dashboard Admin

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>                      
                    </thead>
                    <tbody>
                      <tr>
                        <td> Dakota Rice</td>
                        <td>Niger</td>
                        <td>Oud-Turnhout</td>
                        <td>
                          <a href="#" class="btn btn-success">Edit</a>
                        </td>
                         <td>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>

@endsection

@section('scripts')


@endsection

