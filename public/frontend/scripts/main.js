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

  
  $('.dropify').dropify({
    messages: {
      'default': 'Seret dan lepas file di sini atau klik',
      'replace': 'Seret dan lepas atau klik untuk mengganti',
      'remove':  'Hapus',
      'error':   'Ups, terjadi sesuatu yang salah.'
    },
    error: {
      'fileSize': 'Ukuran file terlalu besar (maksimal {{ value }}).',
      'minWidth': 'Lebar gambar terlalu kecil (minimal {{ value }}}px).',
      'maxWidth': 'Lebar gambar terlalu besar (maksimal {{ value }}}px).',
      'minHeight': 'The image height is too small (minimal {{ value }}}px).',
      'maxHeight': 'The image height is too big (maksimal {{ value }}}px).',
      'imageFormat': 'Format gambar tidak diperbolehkan (hanya {{ value }}).',
      'fileExtension': 'Format file tidak diperbolehkan (hanya {{ value }}).'
    }
});

})(jQuery);