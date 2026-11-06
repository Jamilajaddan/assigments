<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Safe Division Lab</title>
</head>
<body>
    <h2>Safe Division Calculator</h2>

    <form method="POST" action="/division">
        @csrf
        Number A: <input type="number" step="any" name="num_a" required><br><br>
        Number B: <input type="number" step="any" name="num_b" required><br><br>
        <button type="submit">Divide</button>
    </form>

    @if(!empty($error))
        <p style="color:red;">{{ $error }}</p>
    @elseif(isset($result))
        <p>Result: {{ $result }}</p>
    @endif
</body>
</html>