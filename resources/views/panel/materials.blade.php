

@extends('layouts.panel')

@section('title', 'Материалы')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <button class="btn btn-default">
                <i class="fa fa-edit"></i> <a href="/panel/material/create">Добавить материал</a>
            </button>
        </div>
    </div>

    <table>
        <thead>
        <th>
            ID
        </th>
        <th>
            Название
        </th>
        <th>
            Описание
        </th>
        <th>
            Статус
        </th>
        </thead>
    @foreach($materials as $material)

        <tr>
            <td>
                {{ $material->id }}
            </td>
            <td>
            <h6 class="m-0 font-weight-bold text-primary"><a href="/panel/material/{{ $material->id }}">{{ $material->title }}</a>
                @if  (!$material->is_active)
                    [Выключен]
                @endif
            </h6>
            </td>
            <td>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Действия:</div>
                    <a class="dropdown-item" href="/panel/user/{{ $material->id }}/edit">Редактировать</a>
                    <a class="dropdown-item" href="/panel/user/delete/{{ $material->id }}">Удалить</a>
                    <div class="dropdown-divider"></div>
                    @if ($material->is_active)
                        <a class="dropdown-item" href="/panel/courses/{{ $material->id }}/edit">Отключить</a>
                    @else
                        <a class="dropdown-item" href="/panel/courses/{{ $material->id }}/edit">Включить</a>
                    @endif
                </div>
            </div>
            </td>
        </tr>
    @endforeach
    </table>

@endsection

