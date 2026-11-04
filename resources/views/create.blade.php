<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
        }
        body {
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            color: #1f2937;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #4b5563;
            font-size: 14px;
            font-weight: 500;
        }
        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 15px;
            color: #1f2937;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }
        button {
            width: 100%;
            background-color: #2563eb;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Add New Book</h2>
        <form action="/book_list" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="form-group">
                <label for="title">Book Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="book_title"
                    placeholder="Enter book title" 
                    required
                >
            </div>
        
            <div class="form-group">
                <label for="price">Price (PKR)</label>
                <input 
                    type="number" 
                    id="price" 
                    name="book_price"
                    step="0.01" 
                    min="0" 
                    placeholder="0.00" 
                    required
                >
            </div>
        
            <div class="form-group">
                <label for="author">Author Name</label>
                <input 
                    type="text" 
                    id="author" 
                    name="author"
                    placeholder="Enter author name" 
                    required
                >
                <div class="form-group">
                    <label for="user_image">Book Image</label>
                    <input 
                        type="file" 
                        id="user_image" 
                        name="user_image"
                    >
                </div>
            </div>
            <button type="submit">Submit Book</button>
        </form>
    </div>

</body>
</html>
