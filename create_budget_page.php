<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/create_budget_page.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

    <title>Create Budget Proposal | Acad Arena Budget Proposal System</title>
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
                    <span class="text" id="page_title">Create Budget Proposal</span>
                </div>


                <form>
                    <div id="form_title">
                        <span class="text" id="form_title_text">Budget Creation Form</span></br>
                        <span class="text" id="required">*Required</span>
                    </div>

                    <div id="form_body">

                        <div class="mb-2">
                            <label for="project_name" class="form-label">*Project Name</label>
                            <input type="text" class="form-control" id="project_name_input" placeholder="Enter Project Name">
                        </div>

                        <div class="mb-2">
                            <label for="start_date" class="form-label">*Start Date</label>
                            <input type="date" class="form-control" id="date_input" placeholder="Select Date">
                        </div>

                        <div class="mb-2">
                            <label for="project_location" class="form-label">*Project Location</label>
                            <input type="text" class="form-control" id="project_location_input" placeholder="Enter Project Location of Implementation">
                        </div>

                        <div class="mb-2">
                            <label for="proposed_budget" class="form-label">*Proposed Budget</label>
                            <input type="text" class="form-control" id="project_location_input" placeholder="Enter Proposed Budget">
                        </div>

                        <div class="mb-2">
                            <label for="project_information" class="form-label">*Project Information</label>
                            <textarea class="form-control" id="project_information" placeholder="Enter Project Information"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="budget_sheet" class="form-label">*Upload Budget Sheet</label>
                            <input type="file" class="form-control" id="budget_sheet">
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input class="btn btn-primary" id="submit_button" type="submit" value="Submit Budget Proposal">
                        </div>
                        
                    </div>
                </form>
            </div>

        </div>
    </div>








</body>

</html>