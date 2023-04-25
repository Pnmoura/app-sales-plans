$(document).ready(function () {
    $('#product').change(function () {
        var selected = $(this).val();
        switch (selected) {
            case '1':
                $('#price').val('Claro controle 12GB - R$20').prop('disabled', true);
                break;
            case '2':
                $('#price').val('Vivo controle 10GB - R$25').prop('disabled', false);
                break;
            case '3':
                $('#price').val('Tim controle 8GB - R$22').prop('disabled', false);
                break;
            default:
                $('#price').val('').prop('disabled', true);
                break;
        }
    });
});

