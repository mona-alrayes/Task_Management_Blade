
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Tasks</title>
</head>
<body>
    <h1>مرحبا {{ $user->name }}!</h1>
    <p>في القائمة التالية مهماتك المعلقة - pending tasks</p>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }} - Due: {{ $task->due_date }} -status: {{$task->status}}</li>
        @endforeach
    </ul>

    <p>للمزيد من المعلومات راجع موقعنا</p>
    <p>شكرا لاستخدامكن خدماتنا </p>
</body>
</html>
