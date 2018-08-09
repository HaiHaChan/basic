@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-10 offset-1">
            <div class="box box-custom">
                <div class="box-tools tool-fix-width">
                    {{-- search box --}}
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{ trans('admin.public.table', ['name' => 'User']) }}</h3>
                </div>
                <div class="box-body no-padding table-box">
                    <table class="table table-hover table-responsive table-users">
                        <tr>
                            <th class="width-10-percent text-center">{{ trans('admin.public.name') }}</th>
                            <th class="width-20-percent text-center">{{ trans('admin.user.avatar') }}</th>
                            <th class="width-20-percent text-center">{{ trans('admin.user.email') }}</th>
                            <th class="width-10-percent text-center">{{ trans('admin.public.created_at') }}</th>
                            <th class="width-10-percent text-center">{{ trans('admin.user.role') }}</th>
                            <th class="width-30-percent text-center" colspan="3">{{ trans('admin.public.action') }}</th>
                        </tr>
                        @if (isset($users) && !empty($users))
                            @foreach ($users as $user)
                            <tr class="cursor-hover">
                                <td>{{ $user->name }}</td>
                                <td class="text-center"><img src="{{ asset('images/' . $user->avatar) }}" style="width: 50px; height: 50px;"></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td class="text-center">{{ $user->role }}</td>
                                <td>
                                    <button href="{{ route('users.show', ['id' => $user->id]) }}"><i class="fa fa-edit"></i></button> 
                                </td>
                                <td>
                                    <button><i class="fa fa-eye"></i></button>
                                </td>
                                <td>
                                    <button><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-11">
            <nav aria-label="Page navigation example">
                {{ $users->links() }}
            </nav>
        </div>
    </div>
@endsection
