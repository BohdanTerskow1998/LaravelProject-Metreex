<h1 style="text-align: center;">Our team</h1> <br />
<table class="table">
	  <thead>
    <tr style="text-align: center;">
      <th scope="row" style="width: 250px;">Name</th>
      <th colspan="2" class="table-active">Bio</th>
      <th scope="row">Instagram or email</th>
    </tr>
  </thead>
	  <tbody>
	  	@foreach($team as $e)
		    <tr>
		      <td scope="row" style="width: 250px;">{{$e->name}}</td>
		      <td colspan="2" class="table-active">{{$e->bio}}</td>
		      <td>{{$e->inst}}</td>
		    </tr>
	    @endforeach
	  </tbody>
</table>

<div style="display: flex; align-items: center; justify-content: center;">{{$team->links('vendor.pagination.bootstrap-4')}}</div>


