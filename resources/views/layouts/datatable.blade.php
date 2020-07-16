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
                    <th class="text-white">Phone Number</th>
                    <th class="text-white">Date</th>
                    <th class="text-white">Email</th>
                    @if(request()->route()->getName() == "All Trainees" || request()->route()->getName() == "New Trainees" || request()->route()->getName() == "Old Trainees")
                    <th class="text-white">Image</th>
                    <th class="text-white">Status</th>
                    @else
                    <th class="text-white"> Chapters Read</th>
                    <th class="text-white">View revelations</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="font-weight-bold">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
                <tr class="text-white">
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td><a href="/get-individual-revelations/1"><i class="fa fa-eye"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>