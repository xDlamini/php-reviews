<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBM Reviews</title>
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

        .reviews-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .review {
            width: 30%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .review img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .rating {
            color: #FFD700; /* Set star color to gold */
            font-size: 24px;
            margin-bottom: 10px;
        }

        .social-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }

        .cta-button {
            text-align: center;
            margin-top: 20px;
        }

        .cta-button a {
            background-color: #006699;
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .cta-button a:hover {
            background-color: #004466;
        }
    </style>
</head>
<body>

    <h1>Google Reviews</h1>

    <div class="reviews-container">
        <!-- Existing reviews will be displayed here -->
        <?php
        $existingReviews = [
            // existing reviews
            [
                'name' => 'John',
                'review' => 'I loved the team that was helping me reach my goals.',
                'rating' => 4,
                'photo' => 'https://example.com/john-doe.jpg',
                'date' => '2023-11-15',
                'google_account' => 'https://plus.google.com/johndoe',
                'social_links' => ['https://linkedin.com/johndoe', 'https://twitter.com/johndoe'],
            ],
            [
                'name' => 'Mr X',
                'rating' => 5,
                'review' => 'Great company with innovative solutions.',
                'photo' => 'https://example.com/john-doe.jpg',
                'date' => '2023-11-15',
                'google_account' => 'https://plus.google.com/johndoe',
                'social_links' => ['https://linkedin.com/johndoe', 'https://twitter.com/johndoe'],
            ],
            [
                'name' => 'Xolile',
                'rating' => 3.5,
                'review' => 'Good Perfomance.',
                'photo' => 'https://example.com/john-doe.jpg',
                'date' => '2023-12-11',
                'google_account' => 'https://plus.google.com/johndoe',
                'social_links' => ['https://linkedin.com/johndoe', 'https://twitter.com/johndoe'],
            ],
        ];

        foreach ($existingReviews as $review) {
            echo "<div class='review'>";
            if (isset($review['photo'])) {
                echo "<img src='{$review['photo']}' alt='User Photo'>";
            }
            echo "<h3>{$review['name']}</h3>";
            echo "<div class='rating'>";
            for ($i = 0; $i < $review['rating']; $i++) {
                echo "★";
            }
            echo "</div>";
            echo "<p>{$review['review']}</p>";
            echo "<p><strong>Date:</strong> {$review['date']}</p>";
            echo "<div class='social-links'>";
            if (isset($review['google_account'])) {
                echo "<a href='{$review['google_account']}' target='_blank'>Google</a>";
            }

            // Display other social links if available
            if (isset($review['social_links'])) {
                foreach ($review['social_links'] as $link) {
                    echo "<a href='{$link}' target='_blank'>Social</a>";
                }
            }

            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="cta-button">
        <a href="review_form.php">Write a Review</a>
    </div>

</body>
</html>
