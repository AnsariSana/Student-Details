$(document).ready(function () {

    window.onload = function () {
        $('.sa-container').addClass('sa-animation-forwards');
        actionTimer();
    }
    $(document).on('click', 'button', function () {
        $('.sa-container').toggleClass('sa-animation-forwards');
        actionTimer();
    });

    // how it works animation
    function actionTimer() {
        (function ($) {
            $.fn.countTo = function (optionss) {
                optionss = optionss || {};

                return $(this).each(function () {
                    // set optionss for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, optionss);

                    // how many times to update the value, and how much to increment the value on each update
                    var loopsNo = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loopsNo;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof (settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loopsNo) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof (settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 10000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('#count-number-1, #count-number-2').data('countTooptionss', {
                formatter: function (value, optionss) {
                    return value.toFixed(optionss.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(optionss) {
                var $this = $(this);
                optionss = $.extend({}, optionss || {}, $this.data('countTooptionss') || {});
                $this.countTo(optionss);
            }
        });
    }

});