<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Карточка собаки')
    ->show_on_post_type('dogs')
    ->add_fields( array(
        Field::make('text', 'photo_autor', 'Автор фото')
        ->set_width(50),
        Field::make('color', 'card_color', 'Выбрать цвет карточки')
        ->set_width(50),
        //Выбор цвета для карточки собаки
        Field::make('text', 'dog_id', 'ID')
        ->set_width(50),
        Field::make('text', 'dog_name', 'Кличка')
        ->set_width(50),
        Field::make('radio', 'dog_sex', "Пол")
            ->set_width(50)
            ->add_options( array(
                 'Сука' => 'Сука',
                 'Кобель' => 'Кобель',
            )),
        Field::make('text', 'dog_genealogy', 'Родословная №')
        ->set_width(50),
        Field::make('text', 'dog_mark', 'Клеймо/чип')
        ->set_width(50),
        Field::make('text', 'dog_birthday', 'Дата рождения')
        ->set_width(50),
        Field::make('text', 'dog_death', 'Дата смерти')
        ->set_width(50),
        // Field::make('text', 'dog_color', 'Окрас')
        // ->set_width(50),
        Field::make("select", "dog_color", "Выбор окраса")
				  ->add_options(array(
					  'Белый' => 'Белый',
					  'Бело-серый' => 'Бело-серый',
					  'Бело-палевый' => 'Бело-палевый',
					  'Бело-голубой' => 'Бело-голубой',
					  'Белый с серым' => 'Белый с серым',
					  'Белый с палевым' => 'Белый с палевым',
					  'Белый с серыми ушами' => 'Белый с серыми ушами',
					  'Белый с палевыми ушами' => 'Белый с палевыми ушами',
					  'Белый с серыми пятнами' => 'Белый с серыми пятнами',
					  'Белый с палевыми пятнами' => 'Белый с палевыми пятнами',
					  'Белый с рыжими пятнами' => 'Белый с рыжими пятнами',
					  'Белый с черными пятнами' => 'Белый с черными пятнами',
					  'Белый с дымкой' => 'Белый с дымкой',
					  'Белый с серым налетом' => 'Белый с серым налетом',
					  'Белый с палевым налетом' => 'Белый с палевым налетом',
					  'Серый' => 'Серый',
					  'Светло-серый' => 'Светло-серый',
					  'Темно-серый' => 'Темно-серый',
					  'Серо-пегий' => 'Серо-пегий',
					  'Серо-белый' => 'Серо-белый',
					  'Серо-пепельный' => 'Серо-пепельный',
					  'Серо-голубой' => 'Серо-голубой',
					  'Дымчатый' => 'Дымчатый',
					  'Жемчужно-серый' => 'Жемчужно-серый',
					  'Пепельный' => 'Пепельный',
                      'Палевый' => 'Палевый',
                      'Светло-палевый' => 'Светло-палевый',
                      'Палево-пегий' => 'Палево-пегий',
                      'Жемчужно-палевый' => 'Жемчужно-палевый',
                      'Голубой' => 'Голубой',
                      'Черный' => 'Черный',
                      'Бурый' => 'Бурый',
                      'Рыжий' => 'Рыжий',
                      'Коричневый' => 'Коричневый',
                      'Пестрый' => 'Пестрый',
				  ))
                  ->set_width(50),
        Field::make('text', 'dog_health', 'Проверка здоровья')
        ->set_width(50),
        Field::make('text', 'dog_breeder', 'Заводчик')
        ->set_width(50),
        Field::make('text', 'dog_breeders_kennel', 'Питомник заводчика')
        ->set_width(50),
        Field::make('text', 'dog_owner', 'Владелец')
        ->set_width(50),
        Field::make('text', 'dog_owners_kennel', 'Питомник владельца')
        ->set_width(50),
        Field::make('text', 'dog_location', 'Локация')
        ->set_width(50),

        Field::make('text', 'dog_survey', 'Промеры')
        ->set_width(50),
        Field::make('text', 'dog_training', 'Дрессировка/тесты')
        ->set_width(50),
        Field::make('text', 'dog_score_titles', 'Оценка и титулы')
        ->set_width(50),
        Field::make('text', 'dog_sert', 'Сертификаты')
        ->set_width(50),
        Field::make('text', 'dog_app', 'Бонитировка')
        ->set_width(50),
            ));

Container::make('post_meta', 'Контент для страницы История породы')
    ->show_on_page('about-breed')
    ->add_fields( array(
        Field::make('complex', 'crb_about_breed_links', 'Ссылки в разделе О породе')
            ->add_fields('about_breed_links', 'Ссылки', array (
                Field::make('text', 'about_breed_link_description', 'Описание к ссылке'),
                Field::make('text', 'about_breed_link', 'Ссылка'),
                Field::make('text', 'about_breed_link_text', 'Заголовок ссылки'),
            ))
));

Container::make('post_meta', 'Выставка')
    ->show_on_category('expo')
    ->add_tab(__('Сведения о выставке'), array(
                Field::make('date','crb_expo_date', 'Дата выставки')
                    ->set_width(25),
                // Field::make('text', 'crb_expo_name', 'Название выставки')
                //      ->set_width(25),
                Field::make('text','crb_expo_city', 'Город выставки')
                    ->set_width(25),
                Field::make('text','crb_expo_country', 'Страна проведения')
                    ->set_width(25),
                Field::make('select', 'crb_expo_status', 'Статус выставки')
                    ->add_options( array (
                        'международная' => 'международная',
                        'национальная' => 'национальная',
                        'всероссийская' => 'всероссийская',
                        'региональная' => 'региональная'
                    ))
                    ->set_width(25),
                Field::make('text','crb_expo_expert', 'Судья выставки')
                    ->set_width(25),      
            ));


Container::make('post_meta', 'Родословная')
            ->show_on_post_type('dogs')
            ->add_fields( array(
                Field::make('association', 'crb_association_mommy', 'Карточки матери')
                    ->help_text('Здесь выбираем карточку матери')
                    ->set_width(50)
                    ->set_max(1)
                    ->set_types( array(
                    array(
                        'type' => 'post',
                        'post_type' => 'dogs'
                       ),
                    )),
                Field::make('association', 'crb_association_mommy_parents', 'Карточки родителей матери')
                    ->help_text('Здесь выбираем карточки родителей матери')
                    ->set_width(50)
                    ->set_max(2)
                    ->set_types( array(
                    array(
                        'type' => 'post',
                        'post_type' => 'dogs'
                       ),
                    )),
                    
                Field::make('association', 'crb_association_daddy', 'Карточка отца')
                    ->help_text('Здесь выбираем карточку отца')
                    ->set_width(50)
                    ->set_max(1)
                    ->set_types( array(
                    array(
                        'type' => 'post',
                        'post_type' => 'dogs'
                       ),
                    )),
                Field::make('association', 'crb_association_daddy_parents', 'Карточки родителей отца')
                    ->help_text('Здесь выбираем карточки родителей отца')
                    ->set_width(50)
                    ->set_max(2)
                    ->set_types( array(
                    array(
                        'type' => 'post',
                        'post_type' => 'dogs'
                       ),
                    )),
        ));
