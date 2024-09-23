<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit a Task</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
    <form method="post" action="{{route('task.update', ['task' => $task])}}">
        @csrf
        @method('put')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" value="{{$task->title}}"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$task->description}}"/>
        </div>
        <div>
            <label>Status : </label>
            <select class="form-select" name="status">
                <option value="Not Start Yet" {{ $task->status == 'Not Start Yet' ? 'selected' : '' }}>Not Start Yet</option>
                <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>
        <div>
            <label>Due Date</label>
            <input type="text" name="due_date" placeholder="Due Date" value="{{$task->due_date}}"/>
        </div>
        <div>
            <label>Priority : </label>
            <select class="form-select" name="priority">
                <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
                <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Update"/>
        </div>
    </form>
</body>
</html>