<?php 
    require("config.php"); 

    $sql="SELECT * FROM doctor_profile";
    // $sql="SELECT zilla.zilla_id, upzilla.upzilla_id, village.village_id FROM upzilla
    // zilla on zilla.zilla_id=up";
    $result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('app.php'); ?>
    <!-- https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/addons/p5.dom.js -->
  <!--   <script src="libraries/p5.js" type="text/javascript"></script>

    <script src="libraries/p5.dom.js" type="text/javascript"></script> -->
    <script src="https://www.gstatic.com/firebasejs/3.5.2/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAFnq-YrY7MYOHrIKm5LR3IHl-8lFPSWpI",
        authDomain: "cse499healthmanagement.firebaseapp.com",
        databaseURL: "https://cse499healthmanagement.firebaseio.com",
        projectId: "cse499healthmanagement",
        storageBucket: "cse499healthmanagement.appspot.com",
        messagingSenderId: "638987735704"
      };
      firebase.initializeApp(config);
      var database = firebase.database();



      var ref=database.ref('doctors');
      ref.on('value',getData, errData);

      function getData(data){
        //console.log(data.val());
        var doctors=data.val();
        var keys=Object.keys(doctors);
        console.log(keys);
        var output = document.getElementById("div_output");
        output.innerHTML = "<table>";    // clearing any previous html content
                                         // and setting up header row
        output.innerHTML += "<tr>"       
                                    + "<th> Designation </th>"
                                    + "<th> E-Mail </th>"
                                    + "<th> ID </th>"
                                    + "<th> Phone </th>"
                                    + "<th> Hospital ID </th>"
                                    + "<th> Approved? </th>"
                                    + "<th> Name </th>"
                                    + "<th> Specialization </th>"
                                    + "<th> Token </th>"
                                  + "</tr>";

        for (var i = 0; i < keys.length; i++) {
            var k=keys[i];
            var designation=doctors[k].designation;
            var doctor_email=doctors[k].doctor_email;
            var doctor_id=doctors[k].doctor_id;
            var doctor_phone=doctors[k].doctor_phone;
            var hospital_id=doctors[k].hospital_id;
            var isApproved=doctors[k].isApproved;
            var name=doctors[k].name;
            var specialization=doctors[k].specialization;
            var token=doctors[k].token;
                                             // appending doctor's row of data
            output.innerHTML += "<tr>"
                                + "<td>" + designation + "</td>"
                                + "<td>" + doctor_email+ "</td>"
                                + "<td>" + doctor_id+ "</td>"
                                + "<td>" + doctor_phone+ "</td>"
                                + "<td>" + hospital_id+ "</td>"
                                + "<td>" + isApproved + "</td>"
                                + "<td>" + name + "</td>"
                                + "<td>" + specialization + "</td>"
                                + "<td>" + token + "</td>"
                              + "</tr>";

        }

        output.innerHTML += "</table>";  //closing the table

        // for (var i = 0; i < keys.length; i++) {
        //     var k=keys[i];
        //     var designation=doctors[k].designation;
        //     var doctor_email=doctors[k].doctor_email;
        //     var doctor_id=doctors[k].doctor_id;
        //     var doctor_phone=doctors[k].doctor_phone;
        //     var hospital_id=doctors[k].hospital_id;
        //     var isApproved=doctors[k].isApproved;
        //     var name=doctors[k].name;
        //     var specialization=doctors[k].specialization;
        //     var token=doctors[k].token;

        //     var li=createElement('li',designation+doctor_email);
        //     li.parent('doctorlist');

           //console.log(designation,doctor_email,doctor_id,doctor_phone,hospital_id,isApproved,name,specialization,token);
        
      }

      function errData(err){
        console.log('error');
        console.log('err');

      }
      
    </script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php include ('header.php'); ?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Doctor List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <table width="100%" class="table table-striped table-bordered table-hover" id="div_output">
                    
                </table>
                <!--  -->
                <!-- <div id="div_output">
                    
                </div> -->
            </div>
                
            <!-- /.row -->
            
                            <!-- /.table-responsive -->
                       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script> -->
    
</body>

</html>
