<?php
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', TRUE);
   
      // Initialize the session
      session_start();
    
      // If session variable is not set it will redirect to login page
      if(!isset($_SESSION['id_member']) || empty($_SESSION['id_member'])){
        header("location:login.php");
        exit;
      }
      
    include_once('../include/header-admin.php');
?>

<div class="row">
    <div class="column side">

    </div>

    <div class="column middle">
        <h2>Pay Form</h2>
        <p>Please fill in your Pays in the following form</p>

        <div class="container">
            <form action="#">

            <div class="row">
                <div class="col-25">
                    <label for="amount">Amount</label>
                </div>
                <div class="col-75">
                    <input type="text" id="amount" name="amount" placeholder="Amount">
                </div>
            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="info">Information</label>    
                </div>
                <div class="col-75">
                    <textarea name="info" id="info" placeholder="Write Something.." style="height:200px"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="date">Date</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date" name="date" placeholder="Your Title">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="status">status</label>
                </div>
                <div class="col-75">
                    <select name="status" id="status">
                        <option value="paid">Paid</option>
                        <option value="paid">UnPaid</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <input type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>
    <div class="column side">

    </div>
</div>

<?php
    include_once('../include/footer.php');
?>