<!DOCTYPE html>
<html>
<head>
    <title>jQuery dataTable Example</title>

</head>
<body>
    <!-- CSS for twitter bootstrap & datatable -->
    <link rel="stylesheet" href="datatables/Datatables/css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/Datatables/css/dataTables.bootstrap.min.css" >
    <!-- JS for twitter bootstrap & datatable -->
    <script type="text/javascript" src="datatables/Datatables/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="datatables/Datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="datatables/Datatables/js/dataTables.bootstrap.min.js"></script>
<table id="example" class="table table-striped table-bordered dt-responsive " cellspacing="0" >
<thead>
<tr>
<th>Product</th>
<th>Material</th>
<th>Construction</th>
<th>Standard</th>
<th>Brand</th>
</tr>
</thead>
<tbody>
<tr>
<td>Product 2</td>
<td>10261</td>
<td>36</td>
<td>110.80</td>
<td>165</td>
<td>Edit</td>
</tr>
<tr>
<td>Product 1</td>
<td>10167</td>
<td>33</td>
<td>110.60</td>
<td>16</td>
<td>Edit</td>
</tr>
</tbody>
</table>
</body>
<script>
$(document).ready(function(){
$("#example").DataTable();
});
</script>
</html>