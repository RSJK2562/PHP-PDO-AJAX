<!doctype html>
<html lang="en">

<head>
  <title>JSON</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <h3 class="text-center bg-info p-2 text-light fw-bold">Read JSON Data</h3>
  </header>
  <main>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6" id="json_data" style="text-align: center;">
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function(){
            // $.ajax({
            //     url : "myjson-data.json",
            //     type : "GET",
            //     success: function(data){
            //         // console.log(data);
            //         // $("#json_data").append(data.id + "<br>" + data.title + "<br>" + data.body);
            //         $.each(data, function(key,value){
            //             $("#json_data").append(value.id + " - " + value.title + "<br>");
            //         });
            //     }
            // });

            // ShortCut Funcation
            $.getJSON(
                "JSON/myjson-data.json",
                function(data){
                    $.each(data, function(key,value){
                        $("#json_data").append(value.id + " - " + value.title + "<br>");
                    });
                }
            );
        });
    </script>
</body>

</html>