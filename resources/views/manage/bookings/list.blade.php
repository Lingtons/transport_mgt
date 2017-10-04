@extends('layouts.manage')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Manage bookings</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <td>Booking Code</td>
                              <td>Transit Code</td>
                              <td>Passenger Name</td>
                              <td>Number Of Seats</td>
                              <td>Status</td>
                              <td>Action</td>        
                          </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <tr>
                              <td>Booking Code</td>
                              <td>Transit Code</td>
                              <td>Passenger Name</td>
                              <td>Number Of Seats</td>
                              <td>Status</td>
                              <td>Action</td>        
                          </tr>
                        </tr>
                      </tfoot>
                      <tbody>
                          @if (count($bookings))
                          @foreach($bookings as $booking)
                          <tr>
                              <td>{{$booking->unique_code}}</td>
                              <td>{{$booking->transit->transit_code}}</td>
                              <td>{{$booking->user->name}}</td>
                              <td>{{$booking->number_of_seats}}</td>
                              <td>{{$booking->status}}</td>
                              <td>
                                  <a href="{{ route('bookings.edit', ['id' => $booking->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                              </td>
                          </tr>
                          @endforeach
                          @endif
                      </tbody>
                    </table>
                    {!! $bookings->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
