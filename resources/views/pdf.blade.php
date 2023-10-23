<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Converting Data to pdf</h1>
        
        <h2>User Data</h2>
        <table class="table" border="2" width="50%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($names as $name)
                <tr>
                    <td>{{ $name->id }}</td>
                    <td>{{ $name->name }}</td>
                    <td>{{ $name->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <br>

        <button>
            <a href="{{ route('pdf_convert') }}" >Export to Pdf</a>
        </button>
    </div>
</body>
</html>