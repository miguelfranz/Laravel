<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes App</title>
    <style>
        body { font-family: sans-serif; max-width: 640px; margin: 40px auto; padding: 0 16px; }
        .note { border: 1px solid #ddd; border-radius: 8px; padding: 12px 16px; margin-bottom: 12px; }
        .actions { display: flex; gap: 8px; align-items: center; }
        input, textarea { width: 100%; padding: 8px; margin: 4px 0 12px; box-sizing: border-box; }
        .success { background: #e6f7e9; padding: 10px; border-radius: 6px; margin-bottom: 16px; }
        .error { color: #c0392b; font-size: 14px; margin-top: -8px; margin-bottom: 8px; }
        button, .btn { padding: 6px 12px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>📝 Notes</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>