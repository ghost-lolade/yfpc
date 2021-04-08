@extends('layout')
@section('content')

<div class="container">
    <h2>Donors</h2>
    <div class="table-responsive">          
        <table class="table"> 
            <thead>
                <tr class="table-success">
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $donors as $donor)
                <tr>
                    <td>{{$donor['id']}}</td>
                    <td>{{$donor['first_name']}}</td>
                    <td>{{$donor['last_name']}}</td>
                    <td>{{$donor['email']}}</td>
                    <td>{{$donor['phone']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $donors->links() !!}
        </div>
    </div>
</div>
<div class="container">
    <h2>Volunteers</h2>
    <div class="table-responsive">          
        <table class="table"> 
            <thead>
                <tr class="table-success">
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $volunteers as $volunteer)
                <tr>
                    <td>{{$volunteer['id']}}</td>
                    <td>{{$volunteer['first_name']}}</td>
                    <td>{{$volunteer['last_name']}}</td>
                    <td>{{$volunteer['email']}}</td>
                    <td>{{$volunteer['phone']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $volunteers->links() !!}
        </div>
    </div>
</div>
    
@stop