<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[удалённый пользователь]',

    'beatmapset_activities' => [
        'title' => "История редактирования карт пользователя :user",
        'title_compact' => 'Моддинг',

        'discussions' => [
            'title_recent' => 'Недавно начатые дискуссии',
        ],

        'events' => [
            'title_recent' => 'Недавние события',
        ],

        'posts' => [
            'title_recent' => 'Недавние публикации',
        ],

        'votes_received' => [
            'title_most' => 'Самые популярные от (за 3 месяца)',
        ],

        'votes_made' => [
            'title_most' => 'Самые популярные (за 3 месяца)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'пользователь добавлен в ваш чёрный список',
        'blocked_count' => 'чёрный список (:count)',
        'hide_profile' => 'скрыть профиль',
        'not_blocked' => 'Этот пользователь не заблокирован.',
        'show_profile' => 'показать профиль',
        'too_many' => 'Достигнут лимит кол-ва заблокированных.',
        'button' => [
            'block' => 'заблокировать',
            'unblock' => 'разблокировать',
        ],
    ],

    'card' => [
        'loading' => 'Загрузка...',
        'send_message' => 'отправить сообщение',
    ],

    'disabled' => [
        'title' => 'О нет! Похоже, ваш аккаунт был отключен.',
        'warning' => "Учтите, что если вы нарушили правила, то как минимум месяц ваши попытки обжаловать блокировку рассматриваться не будут. По истечении одного месяца можете связываться с нами, если посчитаете это необходимым. Также знайте, что создание новых аккаунтов во избежание блокировки <strong>лишь продлит этот месячный период</strong>, в который вы не сможете восстановить свой главный аккаунт. Вдобавок, <strong>создание вторичных аккаунтов запрещено правилами</strong>, поэтому советуем вам не делать этого!",

        'if_mistake' => [
            '_' => 'Если вы считаете, что это ошибка, то можете связаться с нами (по :email, или нажав на «?» в нижнем правом углу страницы). Пожалуйста, учтите, что мы всегда уверены в своих действиях, так как они основаны на надёжных данных. Мы оставляем за собой право игнорировать ваши жалобы, если посчитаем, что вы ведёте себя недобросовестно.',
            'email' => 'электронной почте',
        ],

        'reasons' => [
            'compromised' => 'Возможно, ваш аккаунт был скомпрометирован. Он может быть временно отключен, пока личность владельца подтверждается.',
            'opening' => 'Есть ряд причин, которые могут привести к отключению вашего аккаунта:',

            'tos' => [
                '_' => 'Вы нарушили одно или больше из :community_rules или :tos.',
                'community_rules' => 'правил сообщества',
                'tos' => 'условий использования',
            ],
        ],
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive_different_country' => "Ваш аккаунт не использовался в течение долгого времени.",
        ],
    ],

    'login' => [
        '_' => 'Вход',
        'button' => 'Войти',
        'button_posting' => 'Входим...',
        'email_login_disabled' => 'Вход в аккаунт с помощью электронной почты в настоящее время отключён. Вместо этого, пожалуйста, используйте имя пользователя.',
        'failed' => 'Неверный вход',
        'forgot' => 'Забыли пароль?',
        'info' => 'Пожалуйста, войдите в аккаунт, чтобы продолжить',
        'locked_ip' => 'Ваш IP адрес заблокирован. Попробуйте через несколько минут.',
        'password' => 'Пароль',
        'register' => "У вас всё ещё нет аккаунта в osu!? Создайте новый",
        'remember' => 'Запомнить этот браузер',
        'title' => 'Войдите для продолжения',
        'username' => 'Никнейм',

        'beta' => [
            'main' => 'Доступ к бета-версии ограничен.',
            'small' => '(владельцы osu!supporter получат доступ позже)',
        ],
    ],

    'posts' => [
        'title' => 'публикации :username',
    ],

    'anonymous' => [
        'login_link' => 'нажмите для входа',
        'login_text' => 'войти',
        'username' => 'Гость',
        'error' => 'Вы должны войти чтобы сделать это.',
    ],
    'logout_confirm' => 'Вы точно хотите выйти? :(',
    'report' => [
        'button_text' => 'пожаловаться',
        'comments' => 'Дополнительные комментарии',
        'placeholder' => 'Пожалуйста, представьте всю информацию, которую вы считаете нужной.',
        'reason' => 'Причина',
        'thanks' => 'Спасибо за ваше сообщение!',
        'title' => 'Пожаловаться на :username?',

        'actions' => [
            'send' => 'Отправить жалобу',
            'cancel' => 'Отмена',
        ],

        'options' => [
            'cheating' => 'Нечестная игра / читы',
            'insults' => 'Оскорбление меня / других',
            'spam' => 'Спам',
            'unwanted_content' => 'Неприемлемый контент',
            'nonsense' => 'Чушь',
            'other' => 'Другая (введите ниже)',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Права вашего аккаунта ограничены!',
        'message' => 'Пока права вашего аккаунта ограничены, вы не сможете взаимодействовать с другими игроками и ваши результаты будут видны только вам. Обычно это результат автоматизированного процесса и, как правило, ограничение снимается в течении суток. Если вы хотите обжаловать ваше ограничение, пожалуйста <a href="mailto:accounts@ppy.sh">свяжитесь с поддержкой</a>.',
    ],
    'show' => [
        'age' => ':age лет',
        'change_avatar' => 'сменить аватар!',
        'first_members' => 'Здесь с самого начала',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Дата регистрации: :date',
        'lastvisit' => 'Был в сети :date',
        'lastvisit_online' => 'Сейчас в сети',
        'missingtext' => 'Возможно, вы сделали опечатку! (или игрок заблокирован)',
        'origin_country' => 'Проживает в :country',
        'page_description' => 'osu! - Всё, что вы хотели знать о :username!',
        'previous_usernames' => 'ранее известный как',
        'plays_with' => 'Играет с :devices',
        'title' => "Профиль :username",

        'edit' => [
            'cover' => [
                'button' => 'Сменить обложку профиля',
                'defaults_info' => 'Больше вариантов в недалёком будущем',
                'upload' => [
                    'broken_file' => 'Не удалось обработать изображение. Проверьте загруженное изображение и попробуйте снова.',
                    'button' => 'Загрузить изображение',
                    'dropzone' => 'Перетащите для загрузки',
                    'dropzone_info' => 'Вы также можете перетащить изображение сюда для загрузки',
                    'size_info' => 'Размер обложки должен быть равен 2400x620',
                    'too_large' => 'Загруженное изображение слишком большое.',
                    'unsupported_format' => 'Неподдерживаемый формат.',

                    'restriction_info' => [
                        '_' => 'Загрузка доступна только :link',
                        'link' => 'приобретшим тег osu!supporter',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'режим игры по умолчанию',
                'set' => 'установить :mode как режим игры по умолчанию',
            ],
        ],

        'extra' => [
            'none' => 'нет',
            'unranked' => 'Нет недавних игр',

            'achievements' => [
                'achieved-on' => 'Получено :date',
                'locked' => 'Не получено',
                'title' => 'Достижения',
            ],
            'beatmaps' => [
                'by_artist' => 'от :artist',
                'none' => 'Ничего… пока что.',
                'title' => 'Карты',

                'favourite' => [
                    'title' => 'Избранные карты',
                ],
                'graveyard' => [
                    'title' => 'Заброшенные карты',
                ],
                'loved' => [
                    'title' => 'Любимые карты',
                ],
                'ranked_and_approved' => [
                    'title' => 'Рейтинговые и одобренные карты',
                ],
                'unranked' => [
                    'title' => 'Ожидающие',
                ],
            ],
            'discussions' => [
                'title' => 'Обсуждения',
                'title_longer' => 'Недавние обсуждения',
                'show_more' => 'посмотреть больше обсуждений',
            ],
            'events' => [
                'title' => 'События',
                'title_longer' => 'Недавние события',
                'show_more' => 'посмотреть больше событий',
            ],
            'historical' => [
                'empty' => 'Пока записей нет :(',
                'title' => 'Хронология',

                'monthly_playcounts' => [
                    'title' => 'График по месяцам',
                    'count_label' => 'Игр',
                ],
                'most_played' => [
                    'count' => 'количество игр',
                    'title' => 'Наибольше сыгранные карты',
                ],
                'recent_plays' => [
                    'accuracy' => 'точность: :percentage',
                    'title' => 'Последние игры (за сутки)',
                ],
                'replays_watched_counts' => [
                    'title' => 'История просмотров реплеев',
                    'count_label' => 'Просмотрено реплеев',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'История кудосу',
                'title' => 'Кудосу!',
                'total' => 'Кудосу накоплено',

                'entry' => [
                    'amount' => ':amount кудосу',
                    'empty' => "Этот пользователь ещё не получал Кудосу!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Получено :amount за ответ в :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Отнято :amount за ответ в :post',
                        ],

                        'delete' => [
                            'reset' => 'Потеряно :amount за удаление ответа в посте :post',
                        ],

                        'restore' => [
                            'give' => 'Получено :amount за восстановление ответа в посте :post',
                        ],

                        'vote' => [
                            'give' => 'Получено :amount за получение голосов в посте :post',
                            'reset' => 'Потеряно :amount за потерю голосов в посте :post',
                        ],

                        'recalculate' => [
                            'give' => 'Получено :amount за перерасчёт голосов в посте :post',
                            'reset' => 'Потеряно :amount за перерасчёт голосов в посте :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Получено :amount от :giver за сообщение в посте :post',
                        'reset' => ':giver сбросил кудосу за ответ в посте :post',
                        'revoke' => ':giver отнял кудосу за ответ в посте :post',
                    ],
                ],

                'total_info' => [
                    '_' => 'Зависит от того, сколько вклада пользователь внёс в модерацию карт. Посетите :link для дополнительной информации.',
                    'link' => 'эту страницу',
                ],
            ],
            'me' => [
                'title' => 'обо мне!',
            ],
            'medals' => [
                'empty' => "Этот пользователь ещё ничего не получил. ;_;",
                'recent' => 'Последние полученные медали',
                'title' => 'Медали',
            ],
            'posts' => [
                'title' => 'Посты',
                'title_longer' => 'Недавние посты',
                'show_more' => 'загрузить больше постов',
            ],
            'recent_activity' => [
                'title' => 'Последняя активность',
            ],
            'top_ranks' => [
                'download_replay' => 'Скачать повтор',
                'empty' => 'Пока рекордов нет :(',
                'not_ranked' => 'Очки производительности выдаются только за прохождение рейтинговых карт.',
                'pp_weight' => 'взвешено: :percentage',
                'view_details' => 'Подробнее',
                'title' => 'Рейтинги',

                'best' => [
                    'title' => 'Лучшие результаты',
                ],
                'first' => [
                    'title' => 'Рекорды',
                ],
            ],
            'votes' => [
                'given' => 'Отданные голоса (за 3 месяца)',
                'received' => 'Полученные голоса (за 3 месяца)',
                'title' => 'Голоса',
                'title_longer' => 'Недавние голоса',
                'vote_count' => ':count_delimited голос|:count_delimited голоса|:count_delimited голосов',
            ],
            'account_standing' => [
                'title' => 'Состояние аккаунта',
                'bad_standing' => "с аккаунтом <strong>:username</strong> не всё хорошо :(",
                'remaining_silence' => 'пользователю <strong>:username</strong> можно будет говорить через :duration.',

                'recent_infringements' => [
                    'title' => 'Недавние нарушения',
                    'date' => 'Дата',
                    'action' => 'действие',
                    'length' => 'продолжительность',
                    'length_permanent' => 'Навсегда',
                    'description' => 'описание',
                    'actor' => ':username',

                    'actions' => [
                        'restriction' => 'Рестриктед',
                        'silence' => 'Сайленс',
                        'note' => 'Заметка',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => 'Discord',
            'interests' => 'Интересы',
            'lastfm' => 'Last.fm',
            'location' => 'Текущее местоположение',
            'occupation' => 'Род деятельности',
            'skype' => 'Skype',
            'twitter' => 'Twitter',
            'website' => 'Веб-сайт',
        ],
        'not_found' => [
            'reason_1' => 'Они могли изменить свои псевдонимы.',
            'reason_2' => 'Учетная запись может быть временно недоступна в связи с жалобами или проблемами безопасности.',
            'reason_3' => 'Возможно, вы сделали опечатку!',
            'reason_header' => 'Есть несколько возможных причин:',
            'title' => 'Игрок не найден! ;_;',
        ],
        'page' => [
            'button' => 'Отредактировать профиль',
            'description' => '<strong>обо мне!</strong> - это ваше личное редактируемое пространство в профиле.',
            'edit_big' => 'редактировать',
            'placeholder' => 'Введите контент страницы сюда',

            'restriction_info' => [
                '_' => 'Для использования этой функции нужен :link.',
                'link' => 'тег osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => 'Написал :link',
            'count' => ':count пост|:count поста|:count постов',
        ],
        'rank' => [
            'country' => 'Рейтинг стран для :mode',
            'country_simple' => 'Рейтинг в стране',
            'global' => 'Глобальный рейтинг для :mode',
            'global_simple' => 'Рейтинг в мире',
        ],
        'stats' => [
            'hit_accuracy' => 'Точность попаданий',
            'level' => 'Уровень :level',
            'level_progress' => 'Прогресс до следующего уровня',
            'maximum_combo' => 'Максимальное комбо',
            'medals' => 'Медалей',
            'play_count' => 'Количество игр',
            'play_time' => 'Времени в игре',
            'ranked_score' => 'Рейтинговые очки',
            'replays_watched_by_others' => 'Реплеев просмотрено другими',
            'score_ranks' => 'Рейтинг по очкам',
            'total_hits' => 'Всего попаданий',
            'total_score' => 'Всего очков',
            // modding stats
            'ranked_and_approved_beatmapset_count' => 'Рейтинговые и утвержденные карты',
            'loved_beatmapset_count' => 'Любимые сообществом карты',
            'unranked_beatmapset_count' => 'Карты на рассмотрении',
            'graveyard_beatmapset_count' => 'Заброшенные карты',
        ],
    ],

    'status' => [
        'all' => 'Все',
        'online' => 'В сети',
        'offline' => 'Не в сети',
    ],
    'store' => [
        'saved' => 'Пользователь создан',
    ],
    'verify' => [
        'title' => 'Подтверждения аккаунта',
    ],

    'view_mode' => [
        'brick' => 'Показывать кирпичиками',
        'card' => 'Показывать карточками',
        'list' => 'Показывать списком',
    ],
];
