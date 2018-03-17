<?php use dmstr\widgets\Menu; ?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Основное меню', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Новости', 'icon' => 'newspaper-o', 'url' => ['/admin/news']],
                    [
                        'label' => 'Магазин',
                        'icon' => 'shopping-cart',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Товары', 'icon' => 'chevron-right', 'url' => ['/admin/product'] ],
                            ['label' => 'Категории', 'icon' => 'chevron-right', 'url' => ['/admin/category']]
                        ]
                    ],
                    ['label' => 'Города', 'icon' => 'th-list', 'url' => ['/admin/cities']],
                    ['label' => 'Опции', 'icon' => 'filter', 'url' => ['/admin/options']],
                    [
                        'label' => 'Пользователи',
                        'icon' => 'user',
                        'url' => ['/rbac/default/index'],
                        'items' => [
                            ['label' => 'Добавить нового', 'icon' => 'user-plus', 'url' => ['/rbac/user/signup'] ],
                            ['label' => 'Все пользователи', 'icon' => 'users', 'url' => ['/rbac/user'] ],
                            ['label' => 'Назначения', 'icon' => 'chevron-right', 'url' => ['/rbac/assignment'] ],
                            ['label' => 'Роли', 'icon' => 'chevron-right', 'url' => ['/rbac/role'] ],
                            ['label' => 'Разрешения', 'icon' => 'chevron-right', 'url' => ['/rbac/permission'] ],
                            ['label' => 'Маршруты', 'icon' => 'chevron-right', 'url' => ['/rbac/route'] ],
                            ['label' => 'Правила', 'icon' => 'chevron-right', 'url' => ['/rbac/rule'] ],
                            ['label' => 'Меню', 'icon' => 'chevron-right', 'url' => ['/rbac/menu'] ],
                        ]
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
