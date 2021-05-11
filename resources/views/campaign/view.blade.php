@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sales Campaign Data</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Campaign Id</th>
                            <th>Campaign Name</th>
                            <th>Total Revenue</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($campaigns) != 0)
                            @foreach ($campaigns as $campaign)
                                <tr>
                                    <td>{{$campaign->id}}</td>
                                    <td>{{$campaign->campaign_name}}</td>
                                    <td>{{$campaign->totalRevenue[0]->TOTAL ? $campaign->totalRevenue[0]->TOTAL : '0.00'}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="3">No Data</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    {{ $campaigns->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
