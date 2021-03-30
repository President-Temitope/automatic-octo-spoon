@extends('dashboard::layouts.master')

@section('content')
    @if(count($investments) > 0 )
    @include('Core::table',[
    $title => 'Investment Table',
    $description => 'Manage all investments activities',
    $fieldlists => ['id','title','price','proposed_amount','status'],
    $modeldata => $investments
])
    @else
        <script>
            alert('No investments plan added currently')
        </script>
    @endif
@endsection
