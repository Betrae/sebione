<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini-CRM</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>

    /*Function for update company and employees*/
    
    function modify_emp(id, company_id, first_name, last_name, email, phone) {
    document.getElementById('edit_company_name').value = company_id;
    document.getElementById('edit_first_name').value = first_name;
    document.getElementById('edit_last_name').value = last_name;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_phone').value = phone;
    document.getElementById('btn_edit_submit').formAction = "/employees/update/" + id;
    }

    /*Function for delete a company and employees*/
    function deleteData(id) {
    document.getElementById('btn_delete_submit').formAction = "/dashboard/delete/"+id;
    }
    function deleteEmp(id) {
    document.getElementById('btn_delete_submit_emp').formAction = "/employees/delete/"+id;
    }
</script>

<body>
    @auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href="#">Mini-CRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Companies </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('employees')}}">Employees </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <button type="submit" class="dropdown-item">Logout</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    @endauth
    @yield('content')
</body>
<script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#dataTable').DataTable();
        } );
    </script>

</html>