<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Doctors List</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body>
<div class="container">
    <h2>Doctors List</h2>
    <table class="table table-fluid" id="myTable">
    <thead>
    <tr><th>Name</th><th>Specialization</th><th>Barangay</th></tr>
    </thead>
    <tbody>
    <tr><td>Dr. Javier Rodriquez</td><td>General Practitioner</td><td>178</td></tr>
    <tr><td>Dr. Earl Lasse</td><td>General Medicine</td><td>175</td></tr>
    <tr><td>Dr. Eira Gavin</td><td>Prenatal Care Practitioner</td><td>174</td></tr>
    <tr><td>Dr. Minerva Amit</td><td>General Practitioner</td><td>175</td></tr>
    <tr><td>Dr. Fatima Villaluna</td><td>General Medicine</td><td>177</td></tr>
    <tr><td>Dr. Theresa Avila</td><td>Prenatal Care Practitioner</td><td>174</td></tr>
    <tr><td>Dr. Navin Abia</td><td>General Medicine</td><td>178</td></tr>
    <tr><td>Dr. Allan Anja</td><td>Prenatal Care Practitioner</td><td>174</td></tr>
    <tr><td>Dr. Cristi Audo</td><td>General Practitioner</td><td>178</td></tr>
    <tr><td>Dr. Lloyd Adalbert</td><td>General Medicine</td><td>176</td></tr>
    <tr><td>Dr. Shawnee Hirune</td><td>Prenatal Care Practitioner</td><td>174</td></tr>
    <tr><td>Dr. Jody Nicki</td><td>General Practitioner</td><td>178</td></tr>

    </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>
<!-- partial -->
  
</body>
</html>