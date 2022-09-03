<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="icon" type="image/png" href="GoPress.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Go express Indonesia | {{ $title }}</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        background: #10002B
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #10002B
    }

    .profile-button {
        background: #10002B;
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #10002B
    }

    .profile-button:focus {
        background: #10002B
        box-shadow: none
    }

    .profile-button:active {
        background: #10002B
        box-shadow: none
    }

    .back:hover {
        color: #10002B
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #10002B
        color: #fff;
        cursor: pointer;
        border: solid 1px #10002B
    }
</style>

<body>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ auth()->user()->name }}</span><span class="text-black-50">
                        {{ auth()->user()->email }}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">

                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="/profil" method="post">
                        @csrf

                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->name }}" id="name"></div>
                            <div class="col-md-6"><label class="labels">Username</label><input type="text"
                                    class="form-control" id="username" placeholder="{{ auth()->user()->username }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                    class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text"
                                    class="form-control" placeholder="enter address line 1" value=""></div>
                            <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Area</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                    class="form-control" placeholder="enter email id" value=""></div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text"
                                    class="form-control" placeholder="education" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                    class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                    class="form-control" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center"> <button class="w-100 btn btn-lg btn-primary mt-3 profile-button" type="submit">Edit Profil</button></div>
                    </form>
                </div>

            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                            Experience</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                            class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                            class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
