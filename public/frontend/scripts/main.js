(function($) {
  'use strict';
  $(function() {
    $('#order-listing').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 0,
      "lengthChange": false,
      "language": {
        search: "",
        emptyTable: "Data tidak ditemukan",
        info: "",
        // info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        zeroRecords: "Data tidak ditemukan",
        lengthMenu: "Tampilkan _MENU_ data",
        infoEmpty: "",
        infoFiltered: "",
        paginate: {
          first: "Pertama",
          last: "Terakhir",
          next: ">",
          previous: "<"
        }
      }
    });
    $('#order-listing').each(function() {
      var datatable = $(this);
      
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Cari...');
      search_input.removeClass('form-control-sm');
      
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });
  });
})(jQuery);