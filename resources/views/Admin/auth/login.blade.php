<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>Login</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        :root {
            --primary_color: #fcb800;
            --white: #ffffff;
            --black: #323232;
            --menu_text_color: #ffffff;
            --menu_background: #fcb800;
            --border: #ced4da;
            --shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
            --hover: #fcb800;
        }

        .required_r {
            color: red;
            font-size: 20px;
        }

        /*
        ==============================================================
            Auth Area Css
        ==============================================================
        */
        .auth_wrap_content {
            display: grid;
            align-items: center;
            height: 100vh;
        }

        .auth_wrap {
            border: 1px solid var(--border);
            padding: 50px;
            border-radius: 3px;
        }

        .auth_title {
            text-align: center;
            margin-bottom: 40px;
        }

        .auth_item {
            margin-bottom: 15px;
        }

        .auth_item label {
            display: block;
            margin-bottom: 2px;
        }

        .auth_item input {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 3px;
            padding: 10px 15px;
        }

        .auth_sub_btn {
            text-align: center;
        }

        .auth_sub_btn_link {
            display: inline-block;
            text-align: center;
            border: none;
            background-color: var(--primary_color);
            color: var(--white);
            padding: 10px 15px;
            border-radius: 3px;
            text-transform: uppercase;
            transition: .3s;
            font-size: 16px;
            outline: none;
            font-weight: 600;
        }

        .auth_sub_btn_link:hover {
            color: var(--black);
        }

        .auth_forgotten_pass {
            margin-bottom: 15px;
        }

        .auth_forgotten_pass_link {
            display: inline-block;
            color: var(--black);
            border-bottom: 1px solid var(--white);
            transition: .3s;
        }

        .auth_forgotten_pass_link:hover {
            color: var(--hover);
            border-bottom: 1px solid var(--hover);
        }

        .auth_link_page {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .auth_link_page_link {
            color: var(--primary_color);
            transition: .3s;
        }

        .auth_link_page_link:hover {
            color: var(--black);
        }
    </style>
</head>

<body>

    <!--============ Auth Area Start ============-->
    <section class="auth_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12 m-auto">
                    <div class="auth_wrap_content">
                        <div class="auth_wrap">
                            <div class="auth_title">
                                <h3>Admin Login</h3>
                            </div>
                            <form action="{{ route('admin.adminLogin') }}" method="POST">
                                @csrf
                                <div class="auth_form">
                                    <div class="auth_item">
                                        <label>Email <span class="required_r">*</span></label>
                                        <input type="email" placeholder="Enter login email" name="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="auth_item">
                                        <label>Password <span class="required_r">*</span></label>
                                        <input type="password" placeholder="Enter login password" name="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- <div class="auth_forgotten_pass">
                                        <a href="#" class="auth_forgotten_pass_link">Forgotten  password?</a>
                                    </div> -->
                                    <div class="auth_sub_btn">
                                        <button type="submit" class="auth_sub_btn_link">Login</button>
                                    </div>
                                    <!-- <div class="auth_link_page">
                                        <p>Don't have an account?</p>
                                        <a href="#" class="auth_link_page_link">Register</a>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============ Auth Area End ============-->

</body>

</html>
