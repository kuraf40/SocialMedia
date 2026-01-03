import './bootstrap';
import 'datatables.net-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.css';
import $ from 'jquery';

$(document).ready(function() {
    $('#usersTable').DataTable({
        pageLength: 10,
        lengthMenu: [5, 10, 20, 50, 100],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
        }
    });
});