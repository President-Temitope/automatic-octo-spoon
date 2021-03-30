@extends('dashboard::layouts.master')

@section('content')
    @if(count($users) > 0 )
        @include('Core::table',[
        $title => 'Users Table',
        $description => 'Manage all users activities',
        $fieldlists => ['id','firstname','lastname','email','cryptocurrency','wallet','email_verified_at','created_at'],
        $modeldata => $users
    ])
    @else
        <script>
            alert('No User is currently signed up')
        </script>
    @endif
@endsection
