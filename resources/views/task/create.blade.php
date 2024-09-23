<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Create a Task</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
    <form method="post" action="{{route('task.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <label>Status : </label>
            <select class="form-select" name="status" placeholder="Status">
                <option>Not Start Yet</option>
                <option>In Progress</option>
                <option>Completed</option>
            </select>
        </div>
        <div>
            <label>Due Date</label>
            <input type="text" name="due_date" placeholder="Due Date" />
        </div>
        <div>
            <label>Priority : </label>
            <select class="form-select" name="priority" placeholder="Priority">
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Save a new Task"/>
        </div>
    </form>
</body>
</html>