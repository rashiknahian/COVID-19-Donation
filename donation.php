<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("head.php");?>

</head>

<body>

    <!-- Page Content -->
    <div class="container">
        <section class="donation">
           <div class="col-md-12 title">
               <h1>I am a Donar</h1>
           </div>
            <form action="">
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" id="mobile">
                </div>
                <div class="form-group">

                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                </div>
                <label for="">Type of Donation : </label>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Cash
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Medical Equipment
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Food
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Monthly Donation
                    </label>
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Quantity of Donation" name="quantity" id="quantity">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Target of Donation" name="target" id="target">
                </div>
                <div class="form-group">

                    <textarea class="form-control" rows="5" placeholder="Description of Donation" name="description" id="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>





        </section>
    </div>

    <?php include("footer.php");?>

</body>

</html>
