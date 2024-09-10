// Initiate datatables in roles, tables, users page
(function() {
    'use strict';
    
    $('#dataTables-example').DataTable({
        responsive: true,
        pageLength: 10,
        lengthChange: false,
        searching: true,
        ordering: true,
        "info": true,
        "lengthChange": true,
        "language": {
			"aLengthMenu": [ 10, 25, 50, 100 ],
            "sLoadingRecords": "Loading...",
		}
    });
})();
 

	
