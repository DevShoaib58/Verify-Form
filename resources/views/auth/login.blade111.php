<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>internationalcours</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta />
</head>

<body>
    <p id="skip">Skip to: <a href="#" title="Login">Login</a></p>

    <div id="header">
        <h1 title="Candidate Results">
            <a href="#" title="Candidate Results">Candidate Results</a>
        </h1>
        <span class="logo" title="University of Cambridge International Examinations"></span>
    </div>

    <div id="login">
        <form method="POST" action="{{ route('login') }}">
            @csrf 
            <fieldset>
                <legend>Enter your login details to access your results:</legend>
                <div id="credentials">
                    <label for="username" class="username">Candidate Number:</label>
                    <input type="text" id="username" name="email" class="username" maxlength="30"
                        value="" placeholder="Candidate Number"/>
                    <span>(as provided by your centre)</span>
                    {{-- <br class="clearboth" /> --}}
                    {{-- <label for="password" class="username">Certificate Number:</label> --}}
                    <input type="hidden" id="password" name="password" class="password" maxlength="24"
                        value="12345678" placeholder="Certificate Number"/>
                    <input type="submit" id="submit" title="get your results" value="Get Result" />
                </div>
                <p>
                    If you are having difficulty logging in, please contact your Centre.
                </p>
            </fieldset>
        </form>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr />
    <div id="footer" class="login">
        <p>
            v3.0.2 Copyright © UCLES 2017.<br />
            All Rights Reserved. Please read our
            <a href="#" title="Candidate Support legal information">Terms &amp; Conditions</a>.
        </p>
    </div>

    <div id="torrent-scanner-popup" style="display: none"></div>
</body>

</html>
