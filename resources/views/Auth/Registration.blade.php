<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\login.css">
    <title>RegisterHere</title>
</head>
<body>
    @include('user/header')
    <br>

    <section class="myform-area">
        <div class="container">
            <div class="row justify-content-center">
                <h2 style="text-align:center">New User?
                    Welcome!Register Now </h2>
                <div class="col-lg-8">
                    <div class="form-area login-form">
                        <div class="form-content">
                            <h2>Investment<br>Benifits</h2>
                            <p>One of the few places where this is especially true is when it comes to managing your portfolio. Investment advisors and Research analysts can be hired at a cost,
                                but its usually a no brainer for most of us when it comes to fee & free. However, We must all remember that there are no free lunches in the world & we get what we pay for.</p>

                        </div>
                        <div class="form-input">
                             @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                            <form action="{{url('postRegistration')}}" method="POST" id="regForm">
                              
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="" name="name" autocomplete="off" required="" autofocus>
                                    <label>User Name</label>
                                    @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" id="" name="email" autocomplete="off" required="" autofocus>
                                    <label>User Email</label>
                                    @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" id="" name="password" required="" autofocus>
                                    <label>password</label>
                                    @if ($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="myform-button">
                                    <button type="submit" class="myform-btn">Register</button>
                                </div>
                                <hr> <div class="form-group" style="text-align:center">
                    <span style="color:blue">Already Existing!!<a href="login"  style="color:red">LoginHere</a></span>
                    </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('user/footer')
</body>

</html>