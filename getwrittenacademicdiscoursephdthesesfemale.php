		
		<?php
			require "../component/navbar(1).php";
			require "../component/chatbox(2).php";
			require  "../component/header(3).php";
			require  "../component/sidebar(4).php";
		?>
		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
            <div class="container-fluid">
                
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Academic Discourse(Spoken)</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table1" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
												<th>ID</th>
                                                <th>File Name</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                        <tbody> 
								
                                    </tbody>
                                    </table>
                                    <button class="btn btn-success">Add Files</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
			
     <?php 
     	include __DIR__ . "../component/footer.php";
	 ?>


<script type="text/javascript">
                
                $(document).ready(function(){
                    
                var finalpath = sessionStorage.getItem("path");
                console.log("https://e728-185-202-239-227.ngrok.io/pakgentext/getFilesByPath/?path="+finalpath);
                    
                var table = $('#table1').DataTable( {
                   
                    dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        order: false,
                  ajax: {
                    url : "https://e728-185-202-239-227.ngrok.io/pakgentext/getFilesByPath/?path="+finalpath,
                    dataSrc: "doc",
                    order: [[0]], 
                  },
                  columns: [
                    { data: 'txtFiles' },         
                  ],
                });


                // $("body").on("click", ".deletebtn", function(){
                //      var val = $(this).val();
                    
                // });
                // $("body").on("click", ".viewbtn2", function(){
                //      var val = $(this).val();
                //     //  console.log(sessionStorage.getItem("userid"));
                //     window.location.href =  './Invoice.php?id='+val;   
                // });
              });
            
                </script>