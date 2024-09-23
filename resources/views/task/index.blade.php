<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Task</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('task.create')}}">Create a Task Infos</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Priority</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($task as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->status}}</td>
                    <td>{{$task->due_date}}</td>
                    <td>{{$task->priority}}</td>
                    <td>
                        <a href="{{route('task.edit', ['task' => $task])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('task.destroy', ['task' => $task])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>