<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default App Title')</title>
</head>
<body>
    <div style="display: flex;">
        <div>
            this is side bar
        </div>
        <div>
            <nav>
                this is nav bar
            </nav>
            <div>
                <main>
                    @yield('content')   
                </main>
                <footer>
                    this is footer
                </footer>
            </div>
        </div>
    </div>
</body>
</html>