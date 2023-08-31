<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/disbursement_page.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">

    <title> Request for Disbursement | Acad Arena Budget Proposal System</title>
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
                    <span class="text" id="page_title">Request for Disbursement</span>
                </div>


                <form>
                    <div id="form_title">
                        <span class="text" id="form_title_text">Disbursement Form</span></br>
                        <span class="text" id="required">*Required</span>
                    </div>

                    <div id="form_body">

                        <div class="mb-2">
                            <label for="purpose_disbursement" class="form-label">*Purpose of Disbursement</label>
                            <select class="form-control form-select" id="purpose_select" aria-label="Default select example">
                                <option selected>Select Purpose of Disbursement</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="vendor" class="form-label">*Vendor</label>
                            <input type="text" class="form-control" id="vendor_input" placeholder="Enter Vendor">
                        </div>

                        <div class="mb-2">
                            <label for="amount" class="form-label">*Amount</label>
                            <input type="text" class="form-control" id="amount_input" placeholder="Enter Amount">
                        </div>

                        <div class="mb-2">
                            <label for="tax" class="form-label">*VAT / Non-VAT / Mixed</label>
                            <select class="form-control form-select" id="tax_select" placeholder="Enter Proposed Budget">
                                <option selected>Select Tax</option>
                                <option value="1">VAT</option>
                                <option value="2">Non-VAT</option>
                                <option value="3">Mixed</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="invoice" class="form-label">*Invoice Number</label>
                            <input type="text" class="form-control" id="invoice_input" placeholder="Enter Invoice Number">
                        </div>

                        <div class="mb-3">
                            <label for="invoice_file" class="form-label">Upload Invoice / Receipts (if any)</label>
                            <input type="file" class="form-control" id="invoice_upload">
                        </div>

                        <div class="mb-3">
                            <label for="bank_details" class="form-label">*Upload Bank Details</label>
                            <input type="file" class="form-control" id="bank_details_upload">
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-primary" id="submit_button" type="submit" value="Submit Disbursement Form">
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>








</body>

</html>