<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
    <h4 class="card-title text-white">{{ request()->route()->getName() }}</h4>
    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
    <div class="table-responsive m-t-40 text-white">
        <table id="example23"
            class="display nowrap table table-hover table-striped table-bordered"
            cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="text-white">Name</th>
                    <th class="text-white">Date</th>
                    <th class="text-white">Email</th>
                    {{--
                    <th class="text-white">Image</th>
                    <th class="text-white">Status</th>
                    --}}
                    <th class="text-white">View revelations</th>
                </tr>
            </thead>
            <tbody>
            @foreach($my_revelations as $revelation)
                <tr class="font-weight-bold">
                    <td>{{$revelation->name}}</td>
                    <td>{{ $revelation->created_at->format('Y-m-d')}}</td>
                    <td>{{$revelation->email}}</td>
                    <td><a href="/get-individual-revelations/{{$revelation->id}}"><i class="fa fa-eye"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>