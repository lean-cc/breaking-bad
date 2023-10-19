<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breaking bad - Contact</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="shortcut icon" href="static/images/favicon.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <img src="static/images/logo.png" alt="Logo">
        </div>
    </header>

    <nav>
        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg> Home</a>
        <a id="current" href="contact.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg> Contact</a>
        <a href="overmij.html"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
            </svg> Over mij</a>
    </nav>

    <main>
        <div class="sections-container">
            <section>
                <article class="flex-container">
                    <form class="contact-form" method="post">
                        <div class="modal-input">
                            <input type="text" name="Naam" placeholder="Naam" required>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div>
                            <textarea rows="8" name="message" placeholder="Typ hier een bericht.." required></textarea>
                        </div>
                        <button name="submit" type="submit">Submit</button>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $webhook = "https://discord.com/api/webhooks/1161993133349941319/RycBXJUCM0EFm1BfmFoo5VJjBabOmekVUgHCHJ8D8fGgSnOBh5AND83apiTTcMUBWdGL";
                        $message = "**Naam:** " . $_POST['Naam'] . PHP_EOL . "**Email:** " . $_POST['email'] . PHP_EOL . "**Bericht:** " . "```" . $_POST['message'] . "```";


                        $data = array('content' => $message);
                        $options = array(
                            'http' => array(
                                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                                'method'  => 'POST',
                                'content' => http_build_query($data)
                            )
                        );

                        file_get_contents($webhook, false, stream_context_create($options));
                        header("Location: bedankt.html");
                    }
                    ?>
                    <div class="contact">
                        <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg> Alkmaar, Noord holland</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg> +316969420</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                            </svg> 174434@student.horizoncollege.nl</p>
                        <hr>
                        <div class="social">
                            <a target="_blank" href="https://discord.com/users/1060279051220160584"><img src="./static/images/discord-mark-blue.svg" alt="discord"></a>
                            <a target="_blank" href="mailto:174434@student.horizoncollege.nl"><img src="./static/images/email-newsletter-subscription-svgrepo-com.svg" alt="email"></a>
                            <a target="_blank" href="https://github.com/lean-cc"><img src="./static/images/github-mark-white.svg" alt="github"></a>
                            <a target="_blank" href="https://twitter.com/Cobratate"><img src="./static/images/logo.svg" alt="twitter"></a>
                        </div>
                        <hr>
                    </div>
                </article>
            </section>
        </div>
        <aside>
            <h4>Mark Margolis, Actor on Breaking Bad Dies at 83</h4>
            <p>Mark Margolis, the journeyman actor who turned in a commanding performance as the vindictive drug runner
                Hector Salamanca, a man of few words and a bell, on Breaking Bad and Better Call Saul, has died. He was
                83. <a target="_blank" href="https://www.hollywoodreporter.com/tv/tv-news/mark-margolis-dead-breaking-bad-better-call-saul-1235551107/">Lees
                    meer..</a></p>
            <hr>

            <h4>Wist je dat</h4>
            <p>Het was oorspronkelijk de bedoeling dat Jesse Pinkman in de negende aflevering zou worden uitgeschreven.
                Tijdens de pauze veroorzaakt door de schrijversstaking besloot maker Vince Gilligan, onder de indruk van
                Aaron Paul's vertolking van Jesse, het personage te herstellen.</p>
            <hr>
            <div class="reviews">
                <h4><a target="_blank" href="https://www.imdb.com/title/tt0903747/reviews">User reviews</a></h4>
                <p>4,818 Reviews</p>
            </div>
        </aside>
    </main>
    <footer>
        <p>Gemaakt door Kars <span>-</span> <a href="mailto:174434@student.horizoncollege.nl">Email</a></p>
    </footer>

</body>

</html>