@extends('layouts.master')
@section('content')
    <div class="table-responsive">
        <table id="individual_table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Date</th>
                <th>BTC</th>
                <th>Address</th>


            </tr>
            </thead>
            <tbody id="table-body">

            </tbody>
            <tfoot>
            <tr>
                <th>Date</th>
                <th>BTC</th>
                <th>Address</th>

            </tr>
            </tfoot>
        </table>

        <div class="col-md-4">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" id="prev" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" id="next" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @push('page-script')
        <script>

                $.ajax({
                    type: 'GET',
                    url: '/investments/btclog',
                    dataType: 'json',
                    success: function (result) {
                        var response = "";
                    console.log(result)
                        for (var datum in result) {

                        }
                        // $("#table-body").html(response);
                        console.log(result);
                    }
                });
        </script>
    @endpush
@endsection
