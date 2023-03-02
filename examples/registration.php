<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration Page</title>
    	<link rel="stylesheet" type="text/css" href="bootstrap.css" />
 	</head>

<body>
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
    		<div class="panel-heading text-center">
				<h1>User Registration Form</h1>
		  	</div>
			<div class="panel-body">
				<form action="add_user.php" method="post">
					<div class="form-group">
						<label for="firstName">First Name:</label>
						<input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="surName">Surname</label>
                <input
                  type="text"
                  class="form-control"
                  id="surName"
                  name="surName"
                />
               </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="county">County</label>
                <input
                  type="county"
                  class="form-control"
                  id="county"
                  name="county"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; David Peixe</small>
          </div>
        </div>
      </div>
    </div>
    </button>
  </div>
  </body>
</html>