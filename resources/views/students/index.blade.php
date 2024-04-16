@extends('layouts/app')\
@section('title')

@endsection
    @section('content')



        <table class="table">
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Курс</th>
                <th>Номер телфона</th>
                <th>Удалить</th>
                <th>Изменить</th>

            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->surname}}</td>
                    <td>{{$student->course}}</td>
                    <td>{{$student->phone}}</td>
                    <td>
                        <form action="{{'student.destroy',$student->id}}" method="post">
                            @csrf
                            @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('student.edit',$student->id)}}" method="GET">
                            @csrf


                            <input type="submit" value="Изменить" class="btn btn-info">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
        @section('footer')

        @endsection
