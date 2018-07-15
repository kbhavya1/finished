@extends('seeder.layouts.master')

@section('content')

        <table>
            <tr>
                <th>id</th>
                <th>package</th>
                <th>set</th>
                <th>question_id</th>
            </tr>
            @foreach($results as $results)
            <tr>
                <td>{{ $results->id }} </td>
                <td>{{ $results->package }}</td>
                <td>{{ $results->set }}</td>
                <td>{{ $results->question_id }}</td>
                <td><a href="{{ url('/questionset/'.$results->id.'/edit') }}"><input type="button" value="edit"></a></td>


            </tr>
            @endforeach
        </table>

@endsection