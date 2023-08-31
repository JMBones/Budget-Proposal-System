<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/budget_proposals.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

    <title>Budget Proposal</title>
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
                    <span class="text" id="page_title">Budget Proposals</span>
                </div>

                <div class="container" id="page_content">
                    <div class="row row-cols-3">
                        <div class="col-7">
                            <span class="text" id="table_title">Budget Proposals List</span>
                        </div>
                        <div class="col-md-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none" id="">
                                <path d="M26.75 0L22.375 4.375L31.125 13.125L35.5 8.75L26.75 0ZM18 8.75L0.5 26.25V35H9.25L26.75 17.5L18 8.75Z" fill="#77A6F6" />
                            </svg>
                        </div>
                        <div class="col">
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
                                    <th scope="col">Created by</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Proposed Budget</th>
                                    <th scope="col">Budget File</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sample Name</td>
                                    <td>Sample Project</td>
                                    <td>DD/MM/YYYY</td>
                                    <td>Sample Location</td>
                                    <td>P0.00</td>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                            <path d="M11.5 23.5H20.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16 7V17.5M16 17.5L21.25 12.25M16 17.5L10.75 12.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16 31C24.2842 31 31 24.2842 31 16C31 7.71572 24.2842 1 16 1C7.71572 1 1 7.71572 1 16C1 24.2842 7.71572 31 16 31Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></td>
                                    <td>Pending</td>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" width="95" height="23" viewBox="0 0 95 23" fill="none">
                                            <path d="M55.2993 11.5004V5.30454C55.2993 5.14682 55.2347 4.99557 55.1196 4.88404L51.8983 1.76353C51.7832 1.652 51.627 1.58936 51.4643 1.58936H39.5437C39.2046 1.58936 38.9298 1.8556 38.9298 2.18402V20.8168C38.9298 21.1452 39.2046 21.4114 39.5437 21.4114H46.0915" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M43.0222 9.51813H51.207M43.0222 5.55371H47.1146M43.0222 13.4825H46.0915" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M53.2062 16.3957L54.2293 15.4046C54.6773 14.9706 55.4037 14.9706 55.8517 15.4046C56.2998 15.8386 56.2998 16.5423 55.8517 16.9763L54.8287 17.9674M53.2062 16.3957L50.146 19.3602C49.9927 19.5088 49.892 19.7007 49.8587 19.9083L49.6104 21.4508L51.2026 21.2104C51.4169 21.178 51.615 21.0805 51.7684 20.9319L54.8287 17.9674M53.2062 16.3957L54.8287 17.9674" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M51.2069 1.58936V4.95911C51.2069 5.28753 51.4817 5.55377 51.8208 5.55377H55.2993" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.5027 1.58936H14.6684M21.5027 1.58936L11.2513 11.5201M21.5027 1.58936V8.20986" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.5026 12.6235V19.244C21.5026 20.4629 20.4827 21.4509 19.2245 21.4509H3.27807C2.01993 21.4509 1 20.4629 1 19.244V3.79619C1 2.57739 2.01993 1.58936 3.27807 1.58936H10.1123" stroke="black" stroke-width="2" stroke-linecap="round" />
                                            <path d="M90.9838 10.417V20.7891C90.9838 21.1548 90.6779 21.4512 90.3004 21.4512H75.7208C75.3433 21.4512 75.0374 21.1548 75.0374 20.7891V10.417" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M80.7324 17.0375V10.417" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M85.2885 17.0375V10.417" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M93.2618 6.00303H87.5666M87.5666 6.00303V2.25141C87.5666 1.88577 87.2607 1.58936 86.8832 1.58936H79.1377C78.7603 1.58936 78.4543 1.88577 78.4543 2.25141V6.00303M87.5666 6.00303H78.4543M72.7592 6.00303H78.4543" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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