<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>footerJaliyan Art</title>
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="assets_footer/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_footer/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets_footer/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets_footer/css/styles.css">
</head>

<body>
    <div class="footer-dark" style="background-color: rgb(0,0,0);">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="contact-clean">
                    <form method="post" action="{{route('store')}}">
                        @csrf
                        <h2 class="text-center">Contact Us</h2>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name" name="name" \>
                            <input class="form-control" type="text" placeholder="Contact No." name="contact"\>
                            <input class="form-control" type="text" placeholder="Message" name="message"\>
                            <button class="btn" type="submit">Send</button>
                            
                        </div>
                    </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets_footer/js/jquery.min.js"></script>
    <script src="assets_footer/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>