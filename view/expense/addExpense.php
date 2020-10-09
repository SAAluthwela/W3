<?php require_once('./expenseHeader.php');?>
<!-- Content Starts -->
<div class="container">
    <div class="row">
        <div class="col-6">
        
            <h4>Add Daily Expense</h4>
            <!-- Form Starts -->
            <form method="post" action="./../../controller/expense/expensetController.php">
                <div class="form-group">
                    <label for="Contract's Name">Contract's Name : </label>
                    <select id="" name="Select contract name :">
                        <option value="default">...Select contract name....</option>
                        <option value="cid1">Sanken Lanka pvt Ltd</option>
                        <option value="cid2">Hotel Shrangrilla</option>
                        <option value="cid3">Hotel Romi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Select expense category">Select expense category : </label>
                    <select id="" name="Select expense category :">
                        <option value="default">...Select expense category....</option>
                        <option value="catid1">Food</option>
                        <option value="catid2">Transport</option>
                        <option value="catid3">Wood stock</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="amount">Amount(LKR) : </label>
                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="amount">
                </div>
                <div class="form-group">
                <label for="date">Date : </label>
                <input type="Date" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                <label for="amount">Payment type : </label>
                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="cash">
                </div>
                <label for="status">Status : </label>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                <label class="custom-control-label" for="customRadio1">Paid</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"  onclick="getConfirmation() ">
                <label class="custom-control-label" for="customRadio2">Pending</label>
                </div>
                <div class="form-group">
                <label for="expense description">Expense description : </label>
                <input type="text" class="form-control" id="" placeholder="description" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- Form Ends -->
        </div>
    
        <div class="col-6">
            <h4>Exployee Payment</h4>
            <!-- Form Starts -->
            <form method="post" action="./../../controller/expense/expensetController.php">
                <div class="form-group">
                    <label for="Contract's Name">Contract's Name : </label>
                    <select id="" name="Select contract name :">
                        <option value="default">...Select contract name....</option>
                        <option value="cid1">Sanken Lanka pvt Ltd</option>
                        <option value="cid2">Hotel Shrangrilla</option>
                        <option value="cid3">Hotel Romi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Employee Name">Exployee Name : </label>
                    <select id="" name="Select Employee name :">
                        <option value="default">...Select employee name....</option>
                        <option value="eid1">Sunil Perera</option>
                        <option value="eid1">Kamal Goonarathna</option>
                        <option value="eid1">Shammi Fernando</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="amount">Amount(LKR) : </label>
                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="amount">
                </div>
                <div class="form-group">
                <label for="date">Date : </label>
                <input type="Date" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                <label for="amount">Payment type : </label>
                <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="cash">
                </div>
                <div class="form-group">
                <label for="payment description">Expense description : </label>
                <input type="text" class="form-control" id="" placeholder="description" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
             <!-- Form Ends -->
            <a class="btn-success">View expenses</a>
            <a class="btn-success">View employee payments</a>
            <a class="btn-success">View scheduled expenses</a>

        </div>
    </div>

</div>
<!-- Content Ends -->

<!-- Schedule alert script, on click radio button -->
<script type = "text/javascript">
         
            function getConfirmation() {
               var retVal = confirm("Do you want to schedule an expense ?");
               if( retVal == true ) {
                window.location.href = "#"
                  return true;
               }
            }
      </script>
</body>
</html>