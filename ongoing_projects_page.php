<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/ongoing_projects.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

    <title>On-going Projects</title>
</head>

<body>
    <div class="page-container">
        <div class="row">
            <!----navbar---->
            <?php
            $IPATH = $_SERVER["DOCUMENT_ROOT"] . '/budget_acad_arena/';
            include($IPATH . 'side_nav.php');
            ?>
            <!----navbar---->

            <div class="col" id="content">
                <div id="header">
                    <span class="text" id="page_title">On-going Projects</span>
                </div>

                <div class="container" id="page_content">
                    <div class="row row-cols-2">
                        <div class="col-7">
                            <span class="text" id="table_title">Projects List</span>
                        </div>
                        <div class="col-3" id="search_bar_position">
                            <div class="input-group mb-3" id="search_bar">
                                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <table class="table table-hover table-bordered border-light" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Payment Requests</th>
                                    <th scope="col">Budget Sheet</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sample Name</td>
                                    <td>DD/MM/YYYY</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a type="button" class="btn btn-primary" href="disbursement_page.php">Disbursement</a>
                                            <a type="button" class="btn btn-success" href="cash_advance_page.php">Cash Advance</a>
                                            <a type="button" class="btn btn-secondary" href="reimbursement_page.php">Reimbursement</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-warning">Open</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>