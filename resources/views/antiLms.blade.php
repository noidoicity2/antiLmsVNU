<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style>

</style>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-danger">Anti LMS</h1>
            <div class="login-form">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" value="DDP0603112" class="form-control" id="username" placeholder="Nhập username LMS">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" value="qpan020304" class="form-control" id="password" placeholder="Nhập password LMS">
                    <div  class="form-text text-danger"> Tôi sẽ ko lưu password của bạn</div>

                </div>

                <button id="loginBtn"  class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>

    function loginLms() {

    }
    function getLoginInfo() {
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        let loginUrl =  "https://lms.vnu.edu.vn/dhqg.authentication.api/connect/token";
        let loginBody = {
            "grant_type" : "password",
            "client_id" : "web",
            "scope" : "",
            "username" : username,
            "password" : password
        }
        try {
            const instance = axios({
                method: 'post',
                url: loginUrl,
                data: loginBody,
                headers:  {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Accept" :  "application/json, text/plain, *",
                    // "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36",
                },
            });

            console.log(loginBody)
            // const response = await axios.post(loginUrl , loginBody );
            // console.log(response);
        } catch (error) {
            console.error(error);
        }
    }

    document.getElementById("loginBtn").addEventListener("click", getLoginInfo);





</script>
</html>
