@extends('layouts.manage')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Financial reports</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <td>report Code</td>
                              <td>Transit Code</td>
                              <td>Passenger Name</td>
                              <td>Number Of Seats</td>
                              <td>Status</td>
                              <td>Total Amount</td>
                              <td>Travel Date</td>      
                          </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <tr>
                              <td>report Code</td>
                              <td>Transit Code</td>
                              <td>Passenger Name</td>
                              <td>Number Of Seats</td>
                              <td>Status</td>
                              <td>Total Amount</td>
                              <td>Travel Date</td>       
                          </tr>
                        </tr>
                      </tfoot>
                      <tbody>
                          @if (count($reports))
                          @foreach($reports as $report)
                          <tr>
                              <td>{{$report->unique_code}}</td>
                              <td>{{$report->transit->transit_code}}</td>
                              <td>{{$report->user->name}}</td>
                              <td>{{$report->number_of_seats}}</td>
                              <td>{{$report->status}}</td>
                              <td>{{$report->total_amount}}</td>
                              <td>{{$report->travel_date}}</td>
                          </tr>
                          @endforeach
                          @endif
                      </tbody>
                    </table>
                    <h1>Total Amount: {{$total}}</h1>
                    {!! $reports->render() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
</div>
@stop
