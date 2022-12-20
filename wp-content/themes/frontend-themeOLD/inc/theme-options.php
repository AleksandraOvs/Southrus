<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Мои настройки')
        ->set_icon ('dashicons-editor-quote')
        // ->add_tab(__('Способы связи в шапке'), array(
        //             Field::make('text', 'contact_link', 'Ссылка на способ связи')
        //                 ->set_width(50),
        //             Field::make('image', 'contact_image', 'Изображение способа связи')
        //                 ->set_width(50),
        // ));
        // ->add_tab(__('Способы связи в шапке (complex)'), array(
        //     //->add_fields( array(
        //         // Field::make('complex', 'contacts_complex', 'Способы связи (complex)')
        //         //     ->add_fields(array (
        //     Field::make('text', 'contact_link', 'Ссылка на способ связи')
        //         ->set_width(50),
        //     Field::make('image', 'contact_image', 'Изображение способа связи')
        //         ->set_width(50),
        // //));
        //         //));
        //));

        ->add_tab(__('Способы связи'), array(
            Field::make('complex', 'contacts', 'Ссылки')
                ->add_fields( array(
                    Field::make('text', 'contact_link', 'Ссылка на способ связи')
                        ->set_width(50),
                    Field::make('image', 'contact_image', 'Изображение способа связи')
                        ->set_width(50),
                )),
        ))

        ->add_tab(__('Главный слайдер'), array(
            Field::make('text', 'my_text2', 'Мой текст2')
                ->set_width(50),
            Field::make('textarea', 'my_textarea2', 'Текстовое поле2')
                ->set_width(50),
        ))

        ->add_tab(__('Вкладка3'), array(
            Field::make('text', 'my_text3', 'Мой текст3'),
            Field::make('textarea', 'my_textarea3', 'Текстовое поле3'),
        ));
