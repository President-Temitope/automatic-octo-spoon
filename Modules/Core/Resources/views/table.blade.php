<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$description}}</h6>
            <button class="btn btn-outline-success -align-right">Add plan</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        @foreach($fieldlists as $fieldlist)
                            <th>{{$fieldlist}}</th>
                            <th>Actions</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        @foreach($fieldlists as $fieldlist)
                            <th>Actions</th>
                        @endforeach
                    </tr>
                    </tfoot>
                    <tbody>
                    @if(count($modeldata) > 0)
                    <tr>
                        @foreach($fieldlists as $fieldlist)
                            @foreach($modeldata as $data)
                        <td>{{$data->$fieldlist}}</td>
                        <td><button class="btn btn-outline-secondary ">Edit plan</button></td>
                        <td> <button class="btn btn-outline-danger ">Delete plan</button></td>
                            @endforeach
                        @endforeach
                    </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
