<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <title>Hilton Hotel || Dublin</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
        <!--link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link href="ninja-slider.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../scss/normalize.css">
        <link rel="stylesheet" href="../scss/foundation.css">
        <link rel="stylesheet" href="../scss/style.css">
        <link rel="stylesheet" href="../scss/datepicker.css">
        <link href="../scss/datepicker.css" rel="stylesheet" type="text/css"/>
        <script src="ninjaVideoPlugin.js" type="text/javascript"></script>
        <script src="ninja-slider.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
          $(document).ready(function() {
         		$("#checkout").datepicker();
         		$("#checkin").datepicker({
         		minDate : new Date(),
         		onSelect: function (dateText, inst) {
                 var date = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);
                 $("#checkout").datepicker("option", "minDate", date);
         		}
         		});
           });
         </script>




    </head>


</html>
