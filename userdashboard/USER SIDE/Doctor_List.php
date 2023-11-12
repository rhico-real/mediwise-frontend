<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Doctors List</title>
  

</head>
<body>
<!-- partial:index.partial.php -->
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
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Doctor's Registration Number</th>
          </tr>
      </thead>
      <tbody></tbody>
    </table>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data from the API
            fetch('https://phplaravel-1160073-4043249.cloudwaysapps.com/api/getAllDoctors')
                .then(response => response.json())
                .then(data => {
                    // Process the data and populate the table
                    const tableBody = document.querySelector('tbody');
    
                    data.forEach(doctor => {
                      const row = document.createElement('tr');

                      // Extract the properties to display in the table
                      const propertiesToDisplay = ['name', 'email', 'doctors_registration_number'];

                      propertiesToDisplay.forEach(property => {
                          const cell = document.createElement('td');
                          if(property == "name"){
                            cell.textContent = doctor['first_name'] + " " + doctor["last_name"];
                          } else{
                            cell.textContent = doctor[property];
                          }
                          row.appendChild(cell);
                      });

                      tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>
</body>
</html>
<!-- partial -->
  
</body>
</html>
