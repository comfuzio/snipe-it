<?php

return array(

    'does_not_exist' => 'License does not exist or you do not have permission to view it.',
    'user_does_not_exist' => 'User does not exist or you do not have permission to view them.',
    'asset_does_not_exist' 	=> 'Средството што се обидувате да го поврзете со оваа лиценца не постои.',
    'owner_doesnt_match_asset' => 'Средството што се обидувате да го поврзете со оваа лиценца е задолжено на различно лице од она кое е избрано на паѓачкото мени.',
    'assoc_users'	 => 'Оваа лиценца е задолжено на корисник и не може да се избрише. Проверете го, а потоа пробајте повторно да ја избришете. ',
    'select_asset_or_person' => 'Мора да изберете основно средство или корисник, но не и двете.',
    'not_found' => 'License not found',
    'seats_available' => ':seat_count seats available',


    'create' => array(
        'error'   => 'Лиценцата не е креирана, обидете се повторно.',
        'success' => 'Лиценцата е успешно креирана.'
    ),

    'deletefile' => array(
        'error'   => 'Датотеката не се избриша. Обидете се повторно.',
        'success' => 'Датотеката е успешно избришана.',
    ),

    'upload' => array(
        'error'   => 'Датотеките не се прикачени. Обидете се повторно.',
        'success' => 'Успешно се прикачени датотеките.',
        'nofiles' => 'Не одбравте датотеки за прикачување, или датотеката што сакате да ја поставите е премногу голема',
        'invalidfiles' => 'Една или повеќе од вашите датотеки е преголема или е тип на датотека што не е дозволен. Дозволени типови на датотеки се png, gif, jpg, doc, docx, pdf и txt.',
    ),

    'update' => array(
        'error'   => 'Лиценцата не е ажурирана, обидете се повторно',
        'success' => 'Лиценцата е успешно ажурирана.'
    ),

    'delete' => array(
        'confirm'   => 'Дали сте сигурни дека сакате да ја избришете оваа лиценца?',
        'error'   => 'Имаше проблем со бришење на лиценцата. Обидете се повторно.',
        'success' => 'Лиценцата беше успешно избришана.'
    ),

    'checkout' => array(
        'error'   => 'Имаше проблем со задолжување на лиценцата. Обидете се повторно.',
        'success' => 'Лиценцата беше успешно задолжена',
        'not_enough_seats' => 'Not enough license seats available for checkout',
        'mismatch' => 'The license seat provided does not match the license',
        'unavailable' => 'This seat is not available for checkout.',
    ),

    'checkin' => array(
        'error'   => 'Имаше проблем со раздолжување на лиценцата. Обидете се повторно.',
        'success' => 'Лиценцата беше успешно раздолжена'
    ),

);
