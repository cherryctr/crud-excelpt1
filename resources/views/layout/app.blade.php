<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'DAFTAR DATA RUMAH IBADAH - Wilayah Kabupaten Tangerang
') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.1/sweetalert2.min.css" integrity="sha512-OkYLbkJ4DB7ewvcpNLF9DSFmhdmxFXQ1Cs+XyjMsMMC94LynFJaA9cPXOokugkmZo6O6lwZg+V5dwQMH4S5/3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->

 
    <script src="https://nightly.datatables.net/buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://nightly.datatables.net/buttons/js/buttons.html5.min.js"></script>
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">



  <!-- CSS SELECT2 -->

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  



 

  

  
</head>
<!-- INI BAWAAN TEMPLATE -->
<!-- <body class="hold-transition sidebar-mini"> -->

<body class="hold-transition sidebar-collapse layout-top-nav">

<div class="wrapper">

    <!-- NAVBAR ATAS  -->
    @include('layout.navbar.main-nav')

    
    
    <!-- LOAD CONTENT -->
    @yield('content')

    
    
    <!-- FOOTER  -->
    @include('layout.footer.footer')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>


<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.1/sweetalert2.all.min.js



"></script>

<!-- Page specific script -->
<script>




  $(function () {
    $("#example1").DataTable({
    "buttons": ["excel", "pdf"],
    "dom": '<"top"i>rt<"bottom"flp>',
    "responsive": true, "lengthChange": true, "autoWidth": false,
     
      
    "lengthMenu": [[5, 10, 25, 50, -1], [5,10, 25, 50, "All"]],
     
      

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



<script type="text/javascript">
         $(document).ready(function() {
              // Province change

            


            
              $('#citys').change(function(){
                  var id =  $(this).val();
                  console.log(id)
                  $('#district').find('option').not(':first').remove();
                  var base_url = '{{ url("/getDistrict") }}';
                  if (id.value !== '') {
                    ajaxUrl = base_url.replace('-1',id.value);
                  }
                  // AJAX Request
                  $.ajax({
                      url: ajaxUrl + '/' + id,
                      type: 'GET',
                      dataType: 'json',
                      success : function(res){
                        console.log(id);

                          var len = 0;
                          if(res != null){
                              len = res.data.length;
                          }

                          if(len > 0) {
                              // Read Data Create Option
                              for(var i=0; i<len; i++) {
                                  var city_id = res.data[i].city_id;
                                  var name = res.data[i].name;
                                  var district_id = res.data[i].id;
                                  var option = "<option value='"+district_id+"'>"+name+"</option>";

                              $("#district").append(option);
                              }
                          }
                      }
                  })

              })

              $('#district').change(function(){
                  var district_id =  $(this).val();
                  var base_url = '{{ url("/getVillages/") }}';
                  if (district_id.value !== '') {
                    ajaxUrl = base_url.replace('-1',district_id.value);
                  }
                  
                  $('#villages').find('option').not(':first').remove();
                 
                  console.log(district_id);
                  // AJAX Request
                  $.ajax({
                      url: ajaxUrl + '/' + district_id,
                      type: 'GET',
                      dataType: 'json',
                      success : function(res){
                        

                          var len = 0;
                          if(res != null){
                              len = res.data.length;
                          }

                          if(len > 0) {
                              // Read Data Create Option
                              for(var i=0; i<len; i++) {
                                  var district_id = res.data[i].city_id;
                                  var name = res.data[i].name;
                                  var villages_id = res.data[i].id;
                                  var option = "<option value='"+villages_id+"'>"+name+"</option>";

                              $("#villages").append(option);
                              }
                          }
                      }
                  })

              })
         })
     </script>

     <script type="text/javascript">
         $(document).ready(function() {
              // Province change

            


            
              $('#kota').change(function(){
                  var id =  $(this).val();
                  console.log(id)
                  $('#districts').find('option').not(':first').remove();
                  var base_url = '{{ url("/getDistricts") }}';
                  if (id.value !== '') {
                    ajaxUrl = base_url.replace('-1',id.value);
                  }
                  // AJAX Request
                  $.ajax({
                      url: ajaxUrl + '/' + id,
                      type: 'GET',
                      dataType: 'json',
                      success : function(res){
                        console.log(id);

                          var len = 0;
                          if(res != null){
                              len = res.data.length;
                          }

                          if(len > 0) {
                              // Read Data Create Option
                              for(var i=0; i<len; i++) {
                                  var city_id = res.data[i].city_id;
                                  var name = res.data[i].name;
                                  var district_id = res.data[i].id;
                                  var option = "<option value='"+district_id+"'>"+name+"</option>";

                              $("#districts").append(option);
                              }
                          }
                      }
                  })

              })

              $('#districts').change(function(){
                  var district_id =  $(this).val();
                  var base_url = '{{ url("/getVillage/") }}';
                  if (district_id.value !== '') {
                    ajaxUrl = base_url.replace('-1',district_id.value);
                  }
                  
                  $('#village').find('option').not(':first').remove();
                 
                  console.log(district_id);
                  // AJAX Request
                  $.ajax({
                      url: ajaxUrl + '/' + district_id,
                      type: 'GET',
                      dataType: 'json',
                      success : function(res){
                        

                          var len = 0;
                          if(res != null){
                              len = res.data.length;
                          }

                          if(len > 0) {
                              // Read Data Create Option
                              for(var i=0; i<len; i++) {
                                  var district_id = res.data[i].city_id;
                                  var name = res.data[i].name;
                                  var villages_id = res.data[i].id;
                                  var option = "<option value='"+villages_id+"'>"+name+"</option>";

                              $("#village").append(option);
                              }
                          }
                      }
                  })

              })
         })
     </script>
    <script>
        $(document).ready( function () {
    var table = $('#example1').dataTable();
    var tableTools = new $.fn.dataTable.TableTools( table, {
        "buttons": [
            "copy",
            "csv",
            "xls",
            "pdf",
            { "type": "print", "buttonText": "Print me!" }
        ]
    } );
      
    $( tableTools.fnContainer() ).insertAfter('div.card-title');
} );
    </script>
    <script>
        $(document).ready( function () {
    var table = $('#example1').dataTable();
    var tableTools = new $.fn.dataTable.TableTools( table, {
        "buttons": [
            "copy",
            "csv",
            "xls",
            "pdf",
            { "type": "print", "buttonText": "Print me!" }
        ]
    } );
      
    $( tableTools.fnContainer() ).insertAfter('div.card-title');
} );
    </script>

<script>
    $(function(e){
        $("#checkAll").click(function(){
            $(".checkBoxClass").prop('checked',$(this).prop('checked'));
        })

        $('#deleteAllSeletedRecord').click(function(e){
            e.preventDefault();
        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function () {


        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });


        $('.delete_all').on('click', function(e) {


            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  


            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  
                if(check == true){  


                    var join_selected_values = allVals.join(","); 
                    console.log(join_selected_values);
                    
                    var _token = $("input[name='_token']").val();


                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            // alert(data.responseText);
                            console.log(data.resposeText);
                        }
                    });


                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });


        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });


        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();


            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });


            return false;
        });
    });
</script>

</body>
</html>
