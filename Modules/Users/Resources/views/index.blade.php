@extends('dashboard::layouts.master')

@section('content')
    @if(count($users) > 0 )
        @include('Core::table',[
        $title => 'Users Table',
        $description => 'Manage all users activities',
        $fieldlists => ['id','firstname','lastname','email','cryptocurrency','wallet','email_verified_at','created_at'],
        $modeldata => $users,
        $addButton = '',
        $editButton = 'data-toggle="modal" data-target=',
        $deleteButton = '/users/deleteUser/'
    ])
        <!-- Edit user -->
        @foreach($users as $user)
            <div class="modal fade" id="{{$user->firstname}}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{$user->lastname}}'s details:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/investments/updateInvestment">
                                @csrf
                                <div class="form-group">
                                    <label for="input">Title</label>
                                    <input class="form-control" type="text" id="input" name="title" placeholder="Enter title" value="{{$investment->title}}" autocomplete="on" />
                                </div>
                                <div class="form-group">
                                    <label for="input">Proposed Amount</label>
                                    <input class="form-control" type="number" id="input" min="1" name="proposed_amount" placeholder="Enter Proposed amount" value="{{$investment->proposed_amount}}" autocomplete="on" />
                                    <input class="form-control" type="hidden" id="input" name="id" value="{{$investment->id}}" />
                                </div>
                                <div class="form-group">
                                    <label for="input">Price</label>
                                    <input class="form-control" type="number" min="1" id="input" name="price" placeholder="Enter amount" value="{{$investment->price}}" autocomplete="on" />
                                </div>

                                <div class="form-group">

                                    <input class="form-control btn btn-outline-success" type="submit"/>
                                </div>

                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <script>
            alert('No User is currently signed up')
        </script>
    @endif
@endsection
