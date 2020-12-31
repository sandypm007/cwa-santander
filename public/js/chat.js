(function ($) {
    let timeout = null;
    const $chatScreen = $('#chat-screen');

    $chatScreen.data('bottom', true);
    $chatScreen.find('.chat-container').on('scroll', function (e) {
        var elem = $(e.currentTarget);
        $chatScreen.data('bottom', elem[0].scrollHeight - elem.scrollTop() === elem.outerHeight());
    });

    $chatScreen.on('sync', function () {
        $.ajax({
            "async": true,
            "url": $chatScreen.data('sync'),
            "method": "GET",
            "data": {
                "from": $chatScreen.data('from'),
            }
        }).done(function (data) {
            for (const i in data.entries) {
                console.log(data.entries[i]);
            }

            if ($chatScreen.data('bottom') && data.entries.length > 0) {
                $chatScreen.trigger('scroll');
            }

            $chatScreen.data('from', data.to);
            // timeout = setTimeout(function () {
            //     $chatScreen.trigger('sync');
            // }, 10000);
        });
    });

    timeout = setTimeout(function () {
        $chatScreen.trigger('sync');
    }, 1000);
})(jQuery);
