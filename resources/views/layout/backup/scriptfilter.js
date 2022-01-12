<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(city='',district = '', villages= '')
    {
        var dataTable = $('.table').DataTable({
            "destroy": true,
            
            
            "processing": true,
            "serverSide": true,
            "ajax":{
                "url": "{{ url('home/json') }}",
                
               
                data:{
                    
                    city:city,
                    district:district,
                    
                }

                
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            "lengthMenu": [[5, 10, 25, 50, -1], [5,10, 25, 50, "All"]],
            columns: [
                { data: 'kategoris.nama_kategori', name: 'kategoris.nama_kategori' },
                { data: 'nama', name: 'nama' },
                { data: 'kota.name', name: 'kota.name' },
                { data: 'kecamatan.name', name: 'kecamatan.name' },
                { data: 'kelurahan.name', name: 'kelurahan.name' },
                
                { data: 'alamat', name: 'alamat' },
               
                {
                    data: 'id',
                    name: 'id',
                    render: function(value, param, data) {
                        return '<div class="btn-group">' +
                            '<a class="btn btn-sm btn-primary" href="/admin/news/' + value +
                            '/edit"><i class="fas fa-edit"></i></a> ' +
    
                            '<button class="btn btn-sm btn-danger" type="button" onClick="deleteConfirm(' +
                            value + ')"><i class="fas fa-trash"></i></button>' +
                            '</div> ';
                    }
                }
    
               
            ]
        });
    }

    $('#filter').click(function(){
        var id = $('#id').val();
        var district = $('#district_id').val();
        var villages = $('#villages').val();
        

        if(id != '' && district != "")
        {
            $('#data-table').DataTable().destroy();
            fill_datatable(city, district ,villages);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#city').val('');
        $('#district').val('');
        $('#villages').val('');
        $('#data-tables').DataTable().destroy();
        fill_datatable();
    });

});
</script>