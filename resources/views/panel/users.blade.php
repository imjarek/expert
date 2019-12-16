

@extends('layouts.panel')

@section('title', 'Пользователи')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <button class="btn btn-default">
                <i class="fa fa-edit"></i> <a href="/panel/user/create">Добавить пользователя</a>
            </button>
        </div>
    </div>

    <table>
        <thead>
        <th>
            ID
        </th>
        <th>
            ФИО
        </th>
        <th>
            Дата создания
        </th>
        </thead>
    @foreach($users as $user)

        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
            <h6 class="m-0 font-weight-bold text-primary"><a href="/panel/user/{{ $user->id }}">{{ $user->full_name }}</a>
                @if  (!$user->is_active)
                    [Не активен]
                @endif
            </h6>
            </td>
            <td>
                {{ $user->created_at }}
            </td>
            <td>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Действия:</div>
                    <a class="dropdown-item" href="/panel/user/{{ $user->id }}/edit">Редактировать</a>
                    <a class="dropdown-item" href="/panel/user/delete/{{ $user->id }}">Удалить</a>
                    <div class="dropdown-divider"></div>
                    @if ($user->is_active)
                        <a class="dropdown-item" href="/panel/courses/{{ $user->id }}/edit">Отключить</a>
                    @else
                        <a class="dropdown-item" href="/panel/courses/{{ $user->id }}/edit">Включить</a>
                    @endif
                </div>
            </div>
            </td>
        </tr>
    @endforeach
    </table>

@endsection

