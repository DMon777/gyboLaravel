<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([

            [
                'name' => 'Тяга Ривза',
                'intro' => 'Если хотите повысить результаты в становой тяге , и расширить свою спину , тогда вам может понравиться упражнение старой школы - тяга Ривза.Напомню что Стив Ривз самый молодой победитьель турнира Мистер Америка,обладателем титула Мистер Мира , а так же Ривз был награжден призом за самую лучшую спину на турнире "Мистер Америка".',
                'text' => '<p>Если хотите повысить результаты в становой тяге , и расширить свою спину , тогда вам может понравиться упражнение старой школы - тяга Ривза.Напомню что Стив Ривз самый молодой победитьель турнира Мистер Америка,обладателем титула Мистер Мира , а так же Ривз был награжден призом за самую лучшую спину на турнире &quot;Мистер Америка&quot;.<br />
Стив Ривз утверждал что это упражнение помогло сделать шире его и без того широкую спину.<br />
Так что, я думаю,вам стоит попробовать его собственное упражнение для построения мощной спины.</p>

<p>Техника выполнения упражнения.<br />
Примите положение как для стандартной становой тяги,только беритесь руками не за гриф,а за края блинов - как показано на картинке.</p>


<p>Далее,сохраняя положение спины ровной,поднимите вес , используя силу мышц бедра.<br />
Это хорошо нагрузит ваши предплечья , а так же обеспечит болший диапазон движения для бедер в сравнении со стандартной становой тягой.<br />
Так как вес на штанге будет немного меньше чем при выполнении обычной становой тяги,вы дадите своим суставам небольшой отдых.<br />
Удачи вам в построении широкой и мощной спины!</p>
',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => '106042reeves-deadlift.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Периодические голодания для снижения веса',
                'intro' => 'для достижения успеха в большинстве видах спорта требует как можно меньшего количества жира в организме,',
                'text' => '<p>Для достижения успеха в большинстве видах спорта требует как можно меньшего количества жира в организме, и максимального количества мышечной массы. Согласно исследованиям ученых - Гранта Тинсли и Джошуа Ганна, периодическое голодание может быть полезным для многих спортсменов для достижения этой цели. Чтобы не превысить лимиты желаемой весовой категории многие спортсмены гоняют вес. Это нужно в таких видах спорта как - пауэрлифтинг, тяжелая атлетика, борьба, боевые искусства и т.д.</p>

<p>Тестовая строка , переодические голодания.</p>

<p>Постоянная диета уменьшает запасы энергии и запасы гликогена в печени и мышцах, что может негативно сказаться на эффективности тренировок. Периодические голодания могут помочь атлету сжечь жир и сохранить энергию для интенсивных тренировок.</p>

<p>Голодания каждый день , или даже раз в неделю приводят к дефициту калорий, благодаря чему сжигается жир.<br />
Короткие голодания являются более приемлемым вариантом для спортсменов, так-как не вызывают значительного убытка мышечной массы.<br />
Идея заключается в том что спортсмену нужно разделить сутки на два периода - в один есть можно , а в другой нет.Делить можно в следующих соотношениях - 16/8 или 14/10.Это значит что 16 часов нужно голодать , а 8 можно есть , ну а 14/10 более облегченный вариант.</p>
',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => '721029sbrosit-ves-muzhchine-i-zhenshhine-s-brasletom-power-balance.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Отдых-пауза для преодоления застоя.',
                'intro' => 'У каждого человека занимающегося бодибилдингом довольно долгий период времени',
                'text' => '<p>У каждого человека занимающегося бодибилдингом довольно долгий период времени наступает период именуемый - застоем. Это когда привычные тренировочные схемы перестают давать результаты.<br />
Из-за этого сразу полностью пропадает желание тренироваться. Дабы избежать этого можно прибегнуть к популярному у опытных спортсменов приему - отдых-пауза.&nbsp;</p>

<p>&nbsp;Смысл этого приема заключается в том что вам нужно взять вес с которым вы способны выполнить максимально 3-4 повторения, и сделать 7-9 повторений, только между каждым повтором нужно делать короткие паузы, примерно 20-45 секунд.</p>

<p>Благодаря этой технике вы шокируете ваши мышцы тем самым дав им новый стимул для роста.Ведь раньше вы делали то же количество повторений, но с гораздо меньшим весом.Но всегда нужно помнить что перед тренировкой по такой схеме нужно хорошенько размяться, ведь вы будете работать с предельными весами, и ваши мышцы и связки получат ударную нагрузку!</p>

<p>Так же не нужно очень долго тренироваться по такой схеме, максимум 2-3 недели.Или же просто включайте одну такую тренировку в ваш недельный распорядок для разнообразия.<br />
Вернувшись к привычной 8-10 повторной схеме вы ощутите прогресс в силе, и сможете накинуть пару блинчиков к своим привычным весам.</p>

',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => 'hqdefault.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Можно ли качать пресс в начале тренировки?',
                'intro' => 'В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки',
                'text' => '<p>В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки</p>

<p>&nbsp;</p>

<p>В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки</p>

<p>&nbsp;</p>

<p>В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки</p>
',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => '190225girl-doing-pressups.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Малоизвестные, но эффективные упражнения с гирями.',
                'intro' => 'В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки',
                'text' => '<p>В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки</p>
',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => '532751uprajnenija_s_girjami.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Неполная амплитуда',
                'intro' => 'В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки',
                'text' => '<p>В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки</p>
',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => '970858vosstanovlenie-posle-trenirovky.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Тренировки в домашних условиях без инвентаря.',
                'intro' => 'Тренировки в домашних условиях без инвентаря.Как накачать мышца дома, не тратя время на поход в тренажерный зал',
                'text' => '<p>В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировкиВ данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки<br />
В данной статье рассмотрен вопрос, о том когда лучше качать пресс, в начале или в конце тренировки</p>
',
                'date' => 1484576693,
                'author_id' => 1,
                'image' => 'article_image.jpg',
                'category_id' => 1
            ],

        ]);
    }
}
