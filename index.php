<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multiple Stpes Form</title>
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Work+Sans:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="StyleSheets/style.css" />
  </head>

  <body>
    <div class="wrapper d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5 rounded add-style bg-secondary">
            <h4 class="text-center pb-3 text-white" id="result">Personal Enter the Information</h4>
            <div class="progress" style="height: 26px;">
              <div
                class="progress-bar bg-success rounded"
                style="width: 20%"
                role="progressbar"
                id="progressBar"
                
              >
                <b class="lead" id="progresstext">Step1</b>
              </div>
            </div>
  
            <form action="" method="post" id="form-data">
              <div id="first" class="mt-3">
                <div class="form-group">
                  <label for="name">First Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="First Name"
                    id="fname"
                  />
                  <b class="form-text text-danger" id="fn-Error"></b>
                </div>
                <div class="form-group">
                  <label for="username">Last Name</label>
                  <input
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="Last Name"
                    id="lname"
                  />
                  <b class="form-text text-danger" id="ln-Error"></b>
                </div>
                <div class="form-group">
                  <a href="#" class="btn btn-danger" id="next-1">Next</a>
                </div>
              </div>
              <div id="second">
                <h5>Contact information</h5>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Email"
                    id="email"
                  />
                  <b class="form-text text-danger" id="email-Error"></b>
                </div>
                <div class="form-group">
                  <label for="phone">phone</label>
                  <input
                    type="number"
                    name="phone"
                    class="form-control"
                    placeholder="Enter phone"
                    id="phone"
                  />
                  <b class="form-text text-danger" id="phone-Error"></b>
                </div>
                <div class="form-group">
                  <a href="#" class="btn btn-danger" id="prev-2">Previous</a>
                  <a href="#" class="btn btn-danger" id="next-2">Next</a>
                </div>
              </div>
              <div id="third">
                <h5>Choose Password</h5>
                <div class="form-group">
                  <label for="password">password</label>
                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                    id="password"
                  />
                  <b class="form-text text-danger" id="p-Error"></b>
                </div>
                <div class="form-group">
                  <label for="cpassword">password</label>
                  <input
                    type="password"
                    name="cpassword"
                    class="form-control"
                    placeholder="Enter Password"
                    id="cpassword"
                  />
                  <b class="form-text text-danger" id="cp-Error"></b>
                </div>
                <div class="form-group">
                  <a href="#" class="btn btn-danger" id="prev-3">Previous</a>
                  <input
                    type="submit"
                    name="submit"
                    value="submit"
                    id="submit"
                    class="btn btn-success"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/custom.js"></script>
  </body>
</html>
