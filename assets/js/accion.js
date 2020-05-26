$(document).ready(function () {
    $('#fechaEntrada').datetimepicker({
        timepicker: false,
        format: 'd/m/Y',
        minDate: 0
    });
    $('#fechaSalida').datetimepicker({
        timepicker: false,
        format: 'd/m/Y',
        onShow: function () {
            this.setOptions({
                minDate: $('#fechaEntrada').val()
            })
        }
    });
});