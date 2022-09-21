<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajax autocomplete</title>


    {{-- META --}}
    <meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-ui/jquery-ui.min.css')}}">

    {{-- SCRIPT --}}
    <script src="{{asset('jquery-3.3.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
</head>
<body>
    <!-- For defining autocomplete -->
    <input type="text" id='employee_search'>

    <!-- For displaying selected option value from autocomplete suggestion -->
    <input type="text" id='employeeid' readonly>

    <!-- Script -->
    <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#employee_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('employees.getEmployees')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#employee_search').val(ui.item.label); // display the selected text
           $('#employeeid').val(ui.item.value); // save selected id to input
           console.log(ui.item.label);
           console.log(ui.item.value);
           return false;
        }
      });

    });
    </script>
</body>
</html>