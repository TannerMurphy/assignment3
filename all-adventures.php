<?php include "header.php"; ?>
    <main>
		<article>
            <!-- Banner for the page, text overlayed on top of picture -->
            <div class="container">
                <img src="images/canoe.jpg" class= "banner" alt="Canone and Kayak banner" />
                <div class="centered-title">Come Experience Canada</div>
            </div>
            <!-- Main text content of the page -->
            <div> 
                <h2>Upcoming Adventures</h2>
                <br>
                    <!-- pulling data from database -->
                    <?php 
                        $sql = "SELECT * FROM id20801825_adventure;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        // Check for data and generate through while loop
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // generate data into proper formatting for page
                                echo "
                                    <h3>".$row['adventure_heading']."</h3>
                                    <p> <b>Date:</b> ".$row['adventure_trip_date']."</p>
                                    <p> <b>Duration:</b> ".$row['adventure_duration']."</p>
                                    <h4> Summary: </h4><br> <p>".$row['adventure_summary']."</p>
                                    <br>
                                "; 
                            }
                        }
                        
                    ?>
                <!-- Trip for Halifax -->
                <!-- <h3>Halifax</h3> 
                <p><b>Date:</b> June 24th, 2025</p>
                <p><b>Duration:</b> 5 days</p>
                <h4>Summary</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet aliquam id diam maecenas ultricies mi eget. Et tortor at risus viverra adipiscing. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Lacus viverra vitae congue eu consequat ac felis donec. Cras pulvinar mattis nunc sed blandit libero volutpat. Sed risus ultricies tristique nulla aliquet enim. Augue neque gravida in fermentum et sollicitudin ac orci phasellus. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Ut faucibus pulvinar elementum integer enim neque volutpat ac.</p> -->
                <!-- Trip for Sydney -->
                <!-- <h3>Sydney</h3> 
                <p><b>Date:</b> July 15th, 2025</p>
                <p><b>Duration:</b> 12 days</p>
                <h4>Summary</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed augue lacus viverra vitae congue eu consequat. Vel eros donec ac odio tempor orci dapibus. Semper quis lectus nulla at. Pellentesque elit eget gravida cum sociis natoque. Varius vel pharetra vel turpis nunc. Enim nec dui nunc mattis enim ut. Vel fringilla est ullamcorper eget nulla facilisi etiam. Dignissim enim sit amet venenatis urna cursus eget. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Consectetur adipiscing elit ut aliquam purus sit amet. Magna ac placerat vestibulum lectus mauris.</p> -->
            </div>
        </article>
	</main>
	
<?php include "footer.php" ?>