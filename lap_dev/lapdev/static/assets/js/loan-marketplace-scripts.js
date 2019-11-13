$(document).ready(function () {

    $('#loan_table').DataTable({
        "aoColumns": [
        /* lender */ null,
        /* loan_id */ null,
        /* loan_amount */ null,
        /* currency */ null,
        /* contract_date */ null,
        /* loan_type */ null,
        /* interest_rate */ null,
        /* status */ null,
        /* amount_available */ null,
        /* invest */ { "bSearchable": false, "bSortable": false }
        ],
    });

    $("#impact_score-range-slider").ionRangeSlider({
        type: "double",
        skin: "flat",
        grid: true,
        min: 50,
        max: 100,
        from: 70,
        to: 90,
        step: 5,
        hide_min_max: true
    });

    $("#interest_rate_pm-range-slider").ionRangeSlider({
        type: "double",
        skin: "sharp",
        background: "purple",
        grid: true,
        min: 0,
        max: 4,
        from: 1,
        to: 2,
        step: 0.5,
        postfix: "%",
        hide_min_max: true
    });

    $("#term-range-slider").ionRangeSlider({
        type: "double",
        skin: "sharp",
        grid: true,
        min: 0,
        max: 36,
        from: 3,
        to: 24,
        step: 3,
        postfix: " months",
        hide_min_max: true
    });

    $(".invest-button").click(function () {
        $(this).removeClass('btn-outline-success');
        $(this).addClass('btn-success');
    });

    $("#invest-all-switch").change(function () {
        if (this.checked) {
            $(".invest-button").each(function () {
                $(this).removeClass('btn-outline-success');
                $(this).addClass('btn-success');
            })
        } else {
            $(".invest-button").each(function () {
                $(this).removeClass('btn-success');
                $(this).addClass('btn-outline-success');
            })
        }
    });
});

