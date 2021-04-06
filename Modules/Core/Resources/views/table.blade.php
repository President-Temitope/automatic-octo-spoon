<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$description}}</h6>
            <button class="btn btn-outline-success -align-right" {!! $addButton !!}>Add plan</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        @foreach($fieldlists as $fieldlist)
                            <th>{{$fieldlist}}</th>

                        @endforeach
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        @foreach($fieldlists as $fieldlist)
                            <th>{{$fieldlist}}</th>
                        @endforeach
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @if(count($modeldata) > 0)

                        @foreach($modeldata as $data)



                            <tr>
                                @foreach($fieldlists as $fieldlist)

                                    <td>{{$data->$fieldlist}}</td>

                                @endforeach

                                <td>
                                    <a href="" class="btn btn-outline-secondary" {!! $editButton ?? ''!!}"#{{Str::slug($data->title)}}">Edit</a> <span><a href="{{$deleteButton}}{{$data->id}}" class="btn btn-outline-danger ">Delete</a></span>
                                </td>
                            </tr>
                        @endforeach


                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
