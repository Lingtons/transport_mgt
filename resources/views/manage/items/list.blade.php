@extends('layouts.manage')

@section('content')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Manage Items</h2>
                    <span class="m-l-50 pull-right"><a href="{{route('items.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Item </a></span>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Quantity</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                          @if (count($items))
                          @foreach($items as $item)
                          <tr>
                              <td>{{$item->name}}</td>
                              <td>{{$item->quantity}}</td>
                              <td>
                                  <a href="{{ route('items.edit', ['id' => $item->id]) }}" class="btn btn-block btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                              </td>
                          </tr>
                          @endforeach
                          @endif
                      </tbody>
                    </table>
                    {!! $items->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
