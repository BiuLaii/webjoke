<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <title>Document</title>
</head>

<body>
    <section class="main">
        <section id="header">
            <div class="logo">
                <a class="img-logo" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                </a>
            </div>

            <div class="user">
                <a class="img-user" href="#">
                    <img src="{{ asset('images/dog.jpg') }}" alt="Logo" class="logo">
                </a>
            </div>

            <div class="name-user">
                <a href="#" class="name">
                    Tran Minh Hoan
                </a>
                <a href="">
                    user
                </a>
            </div>
        </section>

        <section id="slider">
            <div class="text-content">
                <h1 class="text-heading">A joke a day keeps the doctor away.</h1>
                <div class="text-description">If you joke wrong way, your teeth have to pay.(Serious)</div>
            </div>
        </section>

        <section id="content">
            <div class="content-text">
                <p class="auto-text">A child asked his father, "How were people born?" So his father said, "Adam and Eve
                    made babies, then
                    their babies became adults and made babies, and so on."
                    The child then went to his mother, asked her the same question and she told him, "We were monkeys
                    then we evolved to become like we are now."
                    The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was
                    talking about her side of the family."</p>
            </div>

            <div class="horizontal-line"></div>

            <div class="content-button">
                <button class="button-like">
                    This is funny!
                </button>

                <button class="button-dislike">
                    This is not funny!
                </button>
            </div>
        </section>

        <section id="footer">
            <div class="footer-content">
                <p>
                    This app will display a single joke for the user to read. After reading the joke, the user will like
                    or dislike the joke. The app will record the vote in database and then show another joke for the
                    user to read. When there is no more jokes to show, the app will display a "That's all the jokes for
                    today! Come back another day!" message.
                    There is no need to display the result of the votes. User should not see the same joke twice. User
                    do not need to register or login to view the joke or vote for the joke.
                </p>
                <div class="content-secsion">HoanTran 2023 TMH</div>
            </div>
        </section>
    </section>

</body>

</html>
