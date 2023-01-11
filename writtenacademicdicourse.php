		
		<?php
			require "./component/navbar(1).php";
			require "./component/chatbox(2).php";
			require  "./component/header(3).php";
			require  "./component/sidebar(4).php";
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
                                <h4 class="card-title">Academic Discourse(Written)</h4>
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
										<tr> 
											<td>1</td>
											<td>PhD Theses</td>
											<td><button class="btn btn-success" id="phdtheses">Download</button></td>											   
										</tr>
										<tr> 
											<td>2</td>
											<td>Mphil Synopsis</td>
											<td><button class="btn btn-success">Download</button></td>											   
										</tr>
                                        <tr> 
											<td>3</td>
											<td>Resarch Articles</td>
											<td><button class="btn btn-success">Download</button></td>											   
										</tr>
                                        <tr> 
											<td>4</td>
											<td>Text books</td>
											<td><button class="btn btn-success">Download</button></td>											   
										</tr>
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
     	include __DIR__ . "./component/footer.php";
	 ?>


<script type="text/javascript">
                
                $(document).ready(function(){
            
                    var path1 = sessionStorage.getItem("path");
                var table = $('#table1').DataTable( {
                   
                    dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        order: false,
                //   ajax: {
                //     url : "https://testdma.tech-east.com.pk/dma/invoices/getAllInvoices",
                //     dataSrc: "doc",
                //     order: [[0]], 
                //   },
                //   columns: [
                //     { data: 'recipientName' },
                //     { data: 'recipientAddress' },
                //     { data: 'recipientPhoneNumber' },
                //     { data: 'recipientEmail' },
                //     { data: 'services[/ ].serviceName' },
                //     { data: 'services[/ ].servicePrice' },
                //     {
                //     data: null,
                //     className: "dt-center editor-delete",
                //     orderable: true,
                //     "mRender" : function ( data, type, row ) {
                //         return '<button class="btn viewbtn" value=' +data._id +'>Edit</button>';
                //     }
                // },   
                // {
                //     data: null,
                //     className: "dt-center editor-delete",
                //     orderable: true,
                //     "mRender" : function ( data, type, row ) {
                //         return '<button class="btn viewbtn2" value=' +data._id +'>Print Invoice</button>';
                //     }
                // }          

                //   ],
                });


                // $("body").on("click", ".deletebtn", function(){
                //      var val = $(this).val();
                    
                // });

                $("body").on("click" , "#phdtheses" , function(){
                    sessionStorage.setItem("path" , path1+"/1 PHD Theses")
					window.location.href =  './writtenacademicdiscoursephptheses.php';
				})

                $("body").on("click", ".viewbtn2", function(){
                     var val = $(this).val();
                    //  console.log(sessionStorage.getItem("userid"));
                    window.location.href =  './Invoice.php?id='+val;   
                });
              });
            
                </script>