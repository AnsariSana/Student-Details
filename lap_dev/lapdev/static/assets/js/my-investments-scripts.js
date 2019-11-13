$(document).ready(function () {
    $('#current-investments').DataTable({
        "aoColumns": [
    /* id/loan_type */ null,
    /* date_of_purchase */ null,
    /* my_investments */ null,
    /* next_payment_date */ null,
    /* extimated_next_payment */ null,
    /* interest_rate */ null,
    /* term */ null,
    /* received_payment */ null,
    /* ourtstanding_principle */ null,
    /* sell */ { "bSearchable": false, "bSortable": false }
        ],
        'initComplete': function (settings, json) {
            this.api().columns('.sum').every(function () {
                var column = this;

                var sum = column
                    .data()
                    .reduce(function (a, b) {
                        a = parseFloat(a, 10);
                        if (isNaN(a)) { a = 0; }

                        b = parseFloat(b, 10);
                        if (isNaN(b)) { b = 0; }

                        return a + b;
                    });

                $(column.footer()).html('&euro; ' + sum.toFixed(2));
            });
        }
    });

    $('#finished-investments').DataTable({
        "aoColumns": [
    /* id/loan_type */ null,
    /* date_of_purchase */ null,
    /* my_investments */ null,
    /* next_payment_date */ null,
    /* extimated_next_payment */ null,
    /* interest_rate */ null,
    /* term */ null,
    /* received_payment */ null,
    /* ourtstanding_principle */ null,
    /* sell */ { "bSearchable": false, "bSortable": false }
        ],
        'initComplete': function (settings, json) {
            this.api().columns('.sum').every(function () {
                var column = this;

                var sum = column
                    .data()
                    .reduce(function (a, b) {
                        a = parseFloat(a, 10);
                        if (isNaN(a)) { a = 0; }

                        b = parseFloat(b, 10);
                        if (isNaN(b)) { b = 0; }

                        return a + b;
                    });

                $(column.footer()).html('&euro; ' + sum.toFixed(2));
            });
        }
    });

    $(".sell-all-button").click(function () {
        $(this).removeClass('btn-outline-success');
        $(this).addClass('btn-success');
    });

    $("#sell-all-switch").change(function () {
        if (this.checked) {
            $(".sell-all-button").each(function () {
                $(this).removeClass('btn-outline-success');
                $(this).addClass('btn-success');
            })
        } else {
            $(".sell-all-button").each(function () {
                $(this).removeClass('btn-success');
                $(this).addClass('btn-outline-success');
            })
        }
    });

});