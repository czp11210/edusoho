import { EventReport } from  './event-report';
EventReport();
$('#modal').on('hidden.bs.modal', function () {
    $("#viewerIframe").attr('src', '');
});
$("#js-buy-btn").on('click', function () {
    $('#modal').modal('hide');
});