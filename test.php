<?php

include('includes/db.php');
$query = mysqli_query($con, "SELECT * FROM donations ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data in PhP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 align="center">Technotaught - <a href="http://technotaught.com/">Insert Data Through Bootstrap Modal by using Ajax PHP</a></h3>
        <br />
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="table-responsive">
                <div align="right">
                    <button type="button" class="btn btn-primary text-right m-5" data-toggle="modal" data-target="#staticBackdrop">Add</button>
                </div>
                <br />
                <div id="employee_table">
                    <table class="table table-bordered">
                        <tr>
                            <th width="70%">Employee Name</th>
                            <th width="30%">View</th>
                        </tr>
                        <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $row['amount'] ?></td>
                                <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ############################################################################################### -->

    <!-- Add Data Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Notes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pwd">Select Payment Method</label>
                        <select rows="3" class="form-control" id="payment_method" name="payment_method">
                            <option value="Bkash">Bkash</option>
                            <option value="Nagad">Nagad</option>
                            <option value="Rocket">Rocket</option>
                            <option value="Ucash">Ucash</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Enter transaction mobile number</label>
                        <input type="text" rows="3" class="form-control" id="mobile_number" name="mobile_number">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Enter TRXID</label>
                        <input type="text" rows="3" class="form-control" id="trxid" name="trxid">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Enter Amount</label>
                        <input type="text" rows="3" class="form-control" id="amount" name="amount">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="add_data" class="btn btn-primary" value="Add">Add</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- ############################################################################################### -->

    <!-- View Data Modal-->
    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Employee Details</h4>
                </div>
                <div class="modal-body" id="employee_detail">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ############################################################################################### -->

</body>

</html>
<script>
    $(document).ready(function() {
        // add
        $(document).on("click", "#add_data", function() {
            var payment_method = $('#payment_method').val();
            var mobile_number = $('#mobile_number').val();
            var trxid = $('#trxid').val();
            var amount = $('#amount').val();
            $.ajax({
                url: "donate.php",
                type: "POST",
                catch: false,
                data: {
                    added: 1,
                    payment_method: payment_method,
                    mobile_number: mobile_number,
                    trxid: trxid,
                    amount: amount
                },
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.status == 1) {
                        $('#staticBackdrop').modal().hide();
                        swal("Setting Updated!", {
                            icon: "success",
                        }).then((result) => {
                            location.reload();
                        });
                    }
                }
            });
        });
        $(document).on('click', '.view_data', function() {
            //$('#dataModal').modal();
            var employee_id = $(this).attr("id");
            $.ajax({
                url: "donate.php",
                method: "POST",
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });

    });
</script>