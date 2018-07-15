
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
        <table>
            <tr>
                <th><strong>id</strong></th>
            <th><strong>Subject</strong></th>
            <th><strong>Question</strong></th>
            <th><strong>Option 1</strong></th>
            <th><strong>Option 2</strong></th>
            <th><strong>Option 3</strong></th>
            <th><strong>Option 4</strong></th>
            <th><strong>Option 5</strong></th>
            <th><strong>Option 6</strong></th>
            <th><strong>Correct Option 1</strong></th>
            <th><strong>Correct Option 2</strong></th>
            <th><strong>Correct Option 3</strong></th>
            <th><strong>Correct Option 4</strong></th>
            <th><strong>Correct Option 5</strong></th>
            <th><strong>Correct Option 6</strong></th>
            </tr>
            @foreach($data as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                <td>{{ $data->subject }}</td>
                <td>{{ $data->ques }}</td>
                <td>{{ $data->op1 }}</td>
                <td>{{ $data->op2 }}</td>
                <td>{{ $data->op3 }}</td>
                <td>{{ $data->op4 }}</td>
                <td>{{ $data->op5 }}</td>
                <td>{{ $data->op6 }}</td>
                <td>{{ $data->iscorrect_op1 }}</td>
                <td>{{ $data->iscorrect_op2 }}</td>
                <td>{{ $data->iscorrect_op3 }}</td>
                <td>{{ $data->iscorrect_op4 }}</td>
                <td>{{ $data->iscorrect_op5 }}</td>
                <td>{{ $data->iscorrect_op6 }}</td>
                    <td><a href="{{ url('/editable/'.$data->id) }}"><input type="button" value="edit"></a></td>
                </tr>
            @endforeach
        </table>

</body>