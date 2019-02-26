<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Select One</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="../index.html">Scrum 3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="../index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="displayAll.html">Display All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insert.html">Insert Record</a>
            </li>
          </ul>
        </div>
      </nav>
        <div class="container text-center">
            <form class="" action="" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="user">tableName</span>
                    </div>
                    <input type="text" id="tableName" name="tableName" value="<?= $_REQUEST['tableName'] ?>" class="form-control" readonly>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="user">ID</span>
                    </div>
                    <input type="text" id="ID" name="ID" value="<?= $_REQUEST['ID'] ?>" class="form-control" readonly>
                </div>
                <div id="form_end">

                </div>
                <div class="">
                  <input type="button" name="" value="Update" class="btn btn-primary" onclick="updateRecord()">
                </div>
            </form>
        </div>
        <script type="text/javascript">
          function input_fields(name,id , value) {
            var output = '<div class="input-group mb-3">';
            output += '<div class="input-group-prepend">';
            output += '<span class="input-group-text" for="user">' + name + '</span>';
            output += '</div>';
            output += '<input type="text" id="' + id + '" name="' + id + '" value="' + value + '" class="form-control">';
            output += '</div>';
            return output;
          }

          function build_form() {
            var tableName = '<?= $_REQUEST['tableName'] ?>';
            var id = <?= $_REQUEST['ID'] ?>;
            var output, result, xmlhttp, params, data, x = '';
            params = "method=getOne";
            params += "&tableName=" + tableName;
            params += "&ID=" + id;

            xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText.replace(/\\u0000/g,"");

                response = response.replace(/Customer|Order|Product/g, "");
                // alert(response);
                data = JSON.parse(response);

                var form_end = document.getElementById("form_end");

                for(x in data) {
                  if (tableName == 'customers'){
                    output = input_fields("First Name", "firstName", data[x].firstName);
                    output += input_fields("Last Name", "lastName", data[x].lastName);
                    output += input_fields("Email", "email", data[x].email);
                    output += input_fields("Phone", "phone", data[x].phone);

                  }
                  else if (tableName == 'orders') {
                    output = input_fields("Shipping Address", "shippingAddress", data[x].shippingAddress);
                    output += input_fields("Order Date", "orderDate", data[x].orderDate);
                    output += input_fields("Expected Arrival Date", "expectedArrivalDate", data[x].expectedArrivalDate);
                    output += input_fields("Price", "price", data[x].price);
                  }
                  else if (tableName == 'products') {
                    output = input_fields("Name", "name", data[x].name);
                    output += input_fields("Color", "color", data[x].color);
                    output += input_fields("Description", "description", data[x].description);
                    output += input_fields("Price", "price", data[x].price);
                  }
                  // alert(output);
                  form_end.innerHTML = output;
                }
              }
            };


            xmlhttp.open("POST", "../Provider_2/API_2.php?"+params, false);
            xmlhttp.send();
          }

          function updateRecord(){
            var tableName = '<?= $_REQUEST['tableName'] ?>';
            var id = <?= $_REQUEST['ID'] ?>;
            var output, result, xmlhttp, params, data, x = '';
            params = "method=update";
            params += "&tableName=" + tableName;
            params += "&ID=" + id;

            xmlhttp = new XMLHttpRequest();

            if (tableName == 'customers'){
              params += "&firstName=" + document.getElementById("firstName").value;
              params += "&lastName=" + document.getElementById("lastName").value;
              params += "&email=" + document.getElementById("email").value;
              params += "&phone=" + document.getElementById("phone").value;

            }
            else if (tableName == 'orders') {
              params += "&shippingAddress=" + document.getElementById("shippingAddress").value;
              params += "&orderDate=" + document.getElementById("orderDate").value;
              params += "&expectedArrivalDate=" + document.getElementById("expectedArrivalDate").value;
              params += "&price=" + document.getElementById("price").value;
            }
            else if (tableName == 'products') {
              params += "&name=" + document.getElementById("name").value;
              params += "&color=" + document.getElementById("color").value;
              params += "&description=" + document.getElementById("description").value;
              params += "&price=" + document.getElementById("price").value;
            }
            xmlhttp.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText.replace(/\\u0000/g,"");

                response = response.replace(/Customer|Order|Product/g, "");
                //alert(response);
                data = JSON.parse(response);
                alert(data.message);
              }
            };
            xmlhttp.open("POST", "../Provider_2/API_2.php?"+params, false);
            xmlhttp.send();


            build_form();
          }


          build_form();
        </script>
    </body>
</html>
