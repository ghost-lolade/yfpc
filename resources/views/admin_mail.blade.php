@if ($donor_details)
<div class="container">
    <h2>{{$donor_details['type']}}</h2>
    <div class="table-responsive">          
    <table class="table"> 
      <thead>
        <tr>
          <th>#</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>{{$donor_details['first_name']}}</td>
          <td>{{$donor_details['last_name']}}</td>
          <td>{{$donor_details['email']}}</td>
          <td>{{$donor_details['phone']}}</td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
@endif

{{-- @if ( $volunteer_details)
    <div>{{ $volunteer_details}}</div> --}}