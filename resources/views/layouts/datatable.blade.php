<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
    <h4 class="card-title">{{ request()->route()->getName() }}</h4>
    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
    <div class="table-responsive m-t-40">
        <table id="example23"
            class="display nowrap table table-hover table-striped table-bordered"
            cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                    <th>Email</th>
                    @if(request()->route()->getName() == "All Trainees" || request()->route()->getName() == "New Trainees" || request()->route()->getName() == "Old Trainees")
                    <th>Image</th>
                    <th>Status</th>
                    @else
                    <th>Chapters Read</th>
                    <th>Remaining chapters</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Julius Ssemakula</td>
                    <td>256 702913454</td>
                    <td>{{ date('Y-m-d') }}</td>
                    <td>julisema4@gmail.com</td>
                    <td>10</td>
                    <td>30</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>