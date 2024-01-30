<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a Review - Review</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #006699;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #006699;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #006699;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #004466;
        }
    </style>
</head>
<body>

    <h1>Write a Review</h1>

    <form action="" method="post">
        <label for="name">Your Name:</label>
        <input type="text" name="name" required>

        <label for="rating">Rating:</label>
        <select name="rating" required>
            <option value="1">★</option>
            <option value="2">★★</option>
            <option value="3">★★★</option>
            <option value="4">★★★★</option>
            <option value="5">★★★★★</option>
        </select>

        <label for="photo">Your Photo URL:</label>
        <input type="text" name="photo" placeholder="URL to your photo">

        <label for="google_account">Your Google Account:</label>
        <input type="text" name="google_account" placeholder="Google Account URL">

        <label for="social_links">Your Social Links (comma-separated):</label>
        <input type="text" name="social_links" placeholder="Social Links">

        <label for="review">Your Review:</label>
        <textarea name="review" required></textarea>

        <button type="submit">Submit Your Review</button>
        
    </form>

</body>
</html>
