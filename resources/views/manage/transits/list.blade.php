@extends('layouts.manage')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Manage Transits</h2>
                    <span class="m-l-50 pull-right"><a href="{{route('transits.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Transit </a></span>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Transit Code</th>
                              <th>Arrival Time</th>
                              <th>Departure Time</th>
                              <th>Travel Date</th>
                              <th>Status</th>
                              <th>Price</th>
                              <th>Number of Seats</th>
                              <th>Available Seats</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <tr>
                              <th>Transit Code</th>
                              <th>Arrival Time</th>
                              <th>Departure Time</th>
                              <th>Travel Date</th>
                              <th>Status</th>
                              <th>Price</th>
                              <th>Number of Seats</th>
                              <th>Available Seats</th>
                              <th>Action</th>
                          </tr>
                        </tr>
                      </tfoot>
                      <tbody>
                          @if (count($transits))
                          @foreach($transits as $transit)
                          <tr>
                              <td>{{$transit->transit_code}}</td>
                              <td>{{$transit->arrival_time}}</td>
                              <td>{{$transit->departure_time}}</td>
                              <td>{{$transit->travel_date}}</td>
                              <td>{{$transit->status}}</td>
                              <td>{{$transit->amount}}</td>
                              <td>{{$transit->number_of_seats}}</td>
                              <td>{{$transit->available_seats}}</td>
                              <td>
                                  <a href="{{ route('transits.edit', ['id' => $transit->id]) }}" class="btn btn-block btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                              </td>
                          </tr>
                          @endforeach
                          @endif
                      </tbody>
                    </table>
                    {!! $transits->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
