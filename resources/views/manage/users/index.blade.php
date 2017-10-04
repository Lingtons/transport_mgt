@extends('layouts.manage')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Users</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</>
                                <th>Date Created</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Email</>
                              <th>Date Created</th>
                              
                          </tr>
                        </tfoot>
                        <tbody>
                            @if (count($users))
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
