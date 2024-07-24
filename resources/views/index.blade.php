<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Website</title>
    <link rel="stylesheet" href="frontentcss/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Sports Central</h1>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
@yield('front')
    <section id="home">
        <h2>Latest Sports News</h2>
        <div class="news-item">
            <h3>Football Championship</h3>
            <p>Exciting match between top teams.</p>
            <button onclick="showMore(this)">Read More</button>
            <p class="more-text" style="display:none;">Full article content goes here...</p>
        </div>
        <div class="news-item">
            <h3>Basketball Tournament</h3>
            <p>Thrilling games and surprising outcomes.</p>
            <button onclick="showMore(this)">Read More</button>
            <p class="more-text" style="display:none;">Full article content goes here...</p>
        </div>
    </section>

     <section id="events">
        <h2>Upcoming Events</h2>
        <ul>
            <li>Football Finals - August 20</li>
            <li>Marathon - September 10</li>
            <li>Basketball Semi-finals - October 5</li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Sports Central. All rights reserved.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
