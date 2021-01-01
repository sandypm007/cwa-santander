(function ($) {
    let timeout = null;
    const $chatScreen = $('#chat-screen');
    const $usersScreen = $('#chat-users');
    const $form = $('form[name="messaging"]');

    $chatScreen.data('bottom', true);
    $chatScreen.on('scroll', function (e) {
        const elem = $(e.currentTarget);
        $chatScreen.data('bottom', elem[0].scrollHeight - elem.scrollTop() === elem.outerHeight());
    });

    $chatScreen.parent().on('scroll', function () {
        $chatScreen.stop().animate({
            scrollTop: $chatScreen.get(0).scrollHeight
        }, 800);
    });

    const chat_user = '<div class="chat_list" data-id="/id/" data-region="/region/" data-position="/position/" data-department="/department/" data-username="/username/" data-from="0"><div class="chat_people"><div class="chat_ib"><h5>/username/ <span class="chat_date">/date/</span></h5></div></div></div>';
    $usersScreen.on('sync', function () {
        $.ajax({
            "async": true,
            "url": $usersScreen.data('sync'),
            "method": "GET",
            "data": {
                "from": $usersScreen.data('from'),
            }
        }).done(function (data) {
            for (const i in data.entries) {
                if ($usersScreen.find('[data-id="' + data.entries[i].id + '"]').length === 0) {
                    let html = chat_user.replace(/\/id\//, data.entries[i].id)
                        .replace(/\/username\//g, data.entries[i].fullname)
                        .replace(/\/region\//g, data.entries[i].region ?? '')
                        .replace(/\/position\//g, data.entries[i].position ?? '')
                        .replace(/\/department\//g, data.entries[i].department ?? '');
                    let date = '-';
                    if (data.entries[i].last_message) {
                        date = data.entries[i].last_message.formatted_date;
                    }
                    html = html.replace(/\/date\//, date);
                    $usersScreen.append(html);
                }
            }

            const $users = $usersScreen.find('.chat_list.active_chat');
            if ($users.length === 0 && data.entries.length > 0) {
                $usersScreen.find('.chat_list').get(0).click();
            } else {
                $users.get(0).click();
            }

            if (data.entries.length === 0) {
                timeout = setTimeout(function () {
                    $usersScreen.trigger('sync');
                }, 10000);
            }
        });
    });

    const chat_message = '<div class="message"><p>/text/</p><span class="time_date">/date/</span></div>';
    $chatScreen.on('sync', function () {
        $.ajax({
            "async": true,
            "url": $chatScreen.data('sync'),
            "method": "GET",
            "data": {
                "from": $chatScreen.data('from'),
                "target": $chatScreen.data('target'),
            }
        }).done(function (data) {
            for (const i in data.entries) {
                const $message = $(chat_message.replace(/\/text\//, data.entries[i].message).replace(/\/date\//, data.entries[i].formatted_date));
                $message.addClass(parseInt($chatScreen.data('target')) === parseInt(data.entries[i].from_user_id) ? 'incoming_msg' : 'outgoing_msg');
                $chatScreen.append($message);
            }

            if ($chatScreen.data('bottom') && data.entries.length > 0) {
                $chatScreen.parent().trigger('scroll');
            }

            $chatScreen.data('from', data.to);

            clearTimeout(timeout);
            timeout = setTimeout(function () {
                $usersScreen.trigger('sync');
            }, 10000);
        });
    });

    $form.submit(function (evt) {
        evt.preventDefault();
        $form.find('button').prop('disabled', true).find('i').addClass('fa-spin');
        $.ajax({
            "async": true,
            "url": $(this).prop('action'),
            "method": "POST",
            "data": $(this).serialize(),
        }).done(function (data) {
            clearTimeout(timeout);
            $chatScreen.trigger('sync');
        }).always(function () {
            $form.find('input').val('').focus();
            $form.find('button').prop('disabled', false).find('i').removeClass('fa-spin');
        });
    });

    $(document.body).on('click', '.chat_list', function (evt) {
        evt.stopPropagation();
        $(this).siblings().removeClass('active_chat');
        $(this).addClass('active_chat');
        if ($(this).data('id') !== $chatScreen.data('target')) {
            $chatScreen.data('from', 0);
            $chatScreen.html('');
        }
        $chatScreen.data('target', $(this).data('id'));
        $form.find('input[name="target"]').val($(this).data('id'));
        $('#chat-username').html($(this).data('username'));
        $('#chat-position').html($(this).data('region') + " - " + $(this).data('department') + " - " + $(this).data('position'));
        $chatScreen.trigger('sync');
    });

    timeout = setTimeout(function () {
        $usersScreen.trigger('sync');
    }, 1000);
})(jQuery);
