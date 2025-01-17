<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tipoff Project</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=Tipoff">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=Tipoff">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=Tipoff">
    <link rel="manifest" href="/manifest.json?v=Tipoff">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=Tipoff" color="#d32f2f">
    <link rel="shortcut icon" href="/favicon.ico?v=Tipoff">
    <meta name="apple-mobile-web-app-title" content="Tipoff">
    <meta name="application-name" content="Tipoff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="@yield('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')">

    <meta property=”og:type” content=”article”>
    <meta property="og:url" content="https://tipoff.com{{ $_SERVER['REQUEST_URI'] }}">
    <meta property="og:site_name" content="Tipoff">
    <meta property="og:image" content="@yield('featured_image', 'https://tipoff.com/ogimage.jpg')">
    <meta property="og:image:secure_url" content="@yield('featured_image', 'https://tipoff.com/ogimage.jpg')">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:title" content="@yield('title', 'Tipoff Project')">
    <meta property="og:description" content="@yield('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')">
    <meta property=”article:publisher” content=”https://www.facebook.com/Tipoff”>
    <meta property="article:published_time" content="@yield('created_at', '2017-06-19T13:30:00-04:00')">
    <meta property="article:modified_time" content="@yield('updated_at', '2017-06-19T13:30:00-04:00')">
    <meta property="article:section" content="Business">
    <meta property=”article:author” content=”@yield('fbauthor', 'https://www.facebook.com/DrewRoberts')”>
    <meta property="article:tag" content="Business">
    <meta property="fb:pages" content="153199288166906">

    <meta name=”twitter:url” content="https://tipoff.com{{ $_SERVER['REQUEST_URI'] }}">
    <meta name="twitter:title" content="@yield('title', 'Tipoff Project')">
    <meta name="twitter:description" content="@yield('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')">
    <meta name="twitter:image" content="@yield('featured_image', 'https://tipoff.com/ogimage.jpg')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TipoffProject">
    <meta name="twitter:creator" content="@DrewRoberts">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Tipoff",
      "alternateName": "Tipoff.com",
      "url": "https://tipoff.com"
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Tipoff",
      "logo": "https://tipoff.com/logo.png",
      "founder": "Drew Roberts",
      "url": "https://tipoff.com",
          "sameAs": [
            "https://www.facebook.com/Tipoff",
            "https://www.instagram.com/tipoff/",
            "https://www.linkedin.com/company/TipoffProject",
            "https://twitter.com/TipoffProject",
            "https://plus.google.com/+Tipoff"
          ]
    }
    </script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

    <style>
        body, html {
            background: url('/img/spark-bg.png');
            background-repeat: repeat;
            background-size: 300px 200px;
            height: 100%;
            margin: 0;
        }

        .full-height {
            min-height: 100%;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-fill {
            flex: 1;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .text-center {
            text-align: center;
        }

        .links {
            padding: 1em;
            text-align: right;
        }

        .links a {
            text-decoration: none;
        }

        .links button {
            background-color: #3097D1;
            border: 0;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-family: 'Open Sans';
            font-size: 14px;
            font-weight: 600;
            padding: 15px;
            text-transform: uppercase;
            width: 100px;
        }
    </style>
</head>
<body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-100525006-1', 'auto');
      ga('send', 'pageview');
    </script>

    <div class="full-height flex-column">
        <nav class="links">
            <a href="/quotes" style="margin-right: 15px;">
                <button>
                    Quotes
                </button>
            </a>

            <a href="/books">
                <button>
                    Books
                </button>
            </a>
        </nav>

        <div class="flex-fill flex-center">
            <h1 class="text-center">
                <img src="/img/tipoff_project.png">
            </h1>
        </div>
    </div>
</body>
</html>
