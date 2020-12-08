<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="http://localhost/we_chat/assets/css/my_styles.css">
</head>

<body class="backdrop">
    <div class="backdrop-overlay"></div>
    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark pink scrolling-navbar">
            <a class="navbar-brand" href="#"><strong>WE CHAT</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

    </header>




    <!--Main Navigation-->
    <main>
        <div class="col-lg-12">
            <div class="row">
                <aside class="col-lg-3">
                    <div class="row">
                        <ul class="nav mt-3 nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contacts-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">Contacts</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <!-- Recent Chats -->
                                <ul id="chatsList" class="list-group list-group-flush">
                                    <li class="list-group-item chat_active chat_user">
                                        <a role="button">
                                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="Ali Naqi">
                                            <span class="name"> Ali Naqi</span>
                                            <span class="recent">
                                                recent message recent message ...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item chat_user">
                                        <a role="button">
                                            <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="Nuri Sahin">
                                            <span> Nuri Sahin</span></a>
                                    </li>
                                    <li class="list-group-item chat_user">
                                        <a role="button">
                                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="Ali Naqi">
                                            <span class="name"> Ali Naqi</span>
                                            <span class="recent">
                                                recent message
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item chat_user">
                                        <a role="button">
                                            <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="Nuri Sahin">
                                            <span> Nuri Sahin</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                <!-- Contacts -->
                                <ul id="contactsList" class="list-group list-group-flush">
                                    <li class="list-group-item chat_user">
                                        <a role="button">
                                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="Ali Naqi">
                                            <span> Ali Naqi</span></a>
                                    </li>
                                    <li class="list-group-item chat_user">
                                        <a role="button">
                                            <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="Nuri Sahin">
                                            <span> Nuri Sahin</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <div id="chat-box" class="col-lg-9">
                    <div id="top-box">
                        <div id="profile-box">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg">
                            <h4>Ali Naqi</h4>
                        </div>
                        <div id="chatting-box">
                            <div class="chat-msg">
                                <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg">
                                <div class="msg-box">
                                    <div class="msg">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="time">
                                        12:12 PM 08 May, 2020
                                    </div>
                                </div>
                            </div>
                            <div class="chat-msg right">
                                <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg">
                                <div class="msg-box">
                                    <div class="msg">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="time">
                                        12:12 PM 08 May, 2020
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="type-box">
                        <input type="text" autofocus placeholder="Type your message here" class="form-control">
                        <!-- <button class="btn">
                            <i class="fa fa-paperclip"></i>
                        </button> -->
                        <button class="btn">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                    <!-- <div class="container">
                        <div class="row mt-5">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <button class="btn btn-info mb-3" id="logout">Logout</button>
                                <p class="alert alert-success w-100" id="main_alert"></p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </main>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script type="module" src="http://localhost/we_chat/assets/js/main.js"></script>
</body>

</html>