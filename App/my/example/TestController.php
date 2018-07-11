<?php
namespace App\my\example;

use App\phpappbuilder\helpers\Form;
use App\phpappbuilder\router\Router;
use App\phpappbuilder\controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use App\phpappbuilder\template\Template;
use App\phpappbuilder\admin\Template as AdminTemplate;

class TestController extends Controller
{
    public function pt()
        {
            bdump($this->request->request->get('forma'), 'содержимое формы');
            $t_con = new \App\phpappbuilder\helpers\Helpers\Collection(['name'=>'Пездюки']);
            $t_con->setHelper('item_1', new \App\phpappbuilder\helpers\Helpers\Text(['label'=>'Имя пездюка', 'placeholder'=>'Как зовут твоего пездюка?', 'required'=>'']));
            $t_con->setHelper('time', new \App\phpappbuilder\helpers\Helpers\Time(['label'=>'Время пездюка', 'required'=>'']));
            $t_con->setHelper('color', new \App\phpappbuilder\helpers\Helpers\Color(['label'=>'Цвет пездюка', 'required'=>'']));
            $t_con->setHelper('sex', new \App\phpappbuilder\helpers\Helpers\Radio(['label'=>'Пол пездюка', 'required'=>'', 'data'=>['men'=>'Мужской', 'women'=>"Женский"]]));
            $t_con->setHelper('pidor', new \App\phpappbuilder\helpers\Helpers\Checkbox(['label'=>'Дать леща пездюку',]));
            $t_con->setHelper('ttr', new \App\phpappbuilder\helpers\Helpers\CheckboxGroup(['label'=>'Признаки пездюка', 'data'=>['pidor'=>'Гавно', 'ne'=>"Няша", 'nez'=>"Гавняша"]]));
            $t_con->setHelper('text', new \App\phpappbuilder\helpers\Helpers\Wysiwyg(['label'=>'Рассказ о пездюке', 'required'=>'']));


            $test_collection=new \App\phpappbuilder\helpers\Helpers\Collection(['name'=>'Test collection']);
            $test_collection->setHelper('item_1', new \App\phpappbuilder\helpers\Helpers\Text(['label'=>'first_fu**ing_input', 'placeholder'=>'Please write text now!']));
            $test_collection->setHelper('pezdyuki', $t_con);

            $collection = new \App\phpappbuilder\helpers\Helpers\Collection(['name'=>'Test collection']);
            $collection->setHelper('item_1', new \App\phpappbuilder\helpers\Helpers\Text(['label'=>'first_fu**ing_input', 'placeholder'=>'Please write text now!']));
            $collection->setHelper('item_2', new \App\phpappbuilder\helpers\Helpers\Text(['label'=>'Prosto tak', 'placeholder'=>'Please write text now!']));
            $collection->setHelper('item_3', $test_collection);
            $form = new Form(['title'=>'My test form', 'submit'=>true, 'description'=>'this is test description' ,
                'form'=>[
                        'method'=>'post',
                        'action'=>Router::url('MyExampleFirstRoute',['trans'=>'config'])
                ]
            ]);
            $form->setHelper('item_1', new \App\phpappbuilder\helpers\Helpers\Textarea(['label'=>'first_fu**ing_input', 'placeholder'=>'Please write text now!', 'required'=>'']))
                ->setHelper('pass', new \App\phpappbuilder\helpers\Helpers\Password(['label'=>'Password', 'placeholder'=>'Please write password']))
            ->setHelper('item_collection', $collection)
            ->setHelper('text', new \App\phpappbuilder\helpers\Helpers\Wysiwyg(['label'=>'Рассказ о пездюке', 'required'=>'']))
            ->setPrefix('forma');

            if($this->request->request->has('forma')){$form->setData($this->request->request->get('forma'));}

            $template = new Template( AdminTemplate::class );
            $this->response->setContent($template
                ->render('index', [
                    'title' => 'Centurion app',
                    'sidebar'=>$template->render('component/sidebar' , [
                        'section' => $template->render('component/sidebar/section', [
                            'section' => [[
                                'name' => 'Раздел разработки',
                                'collection' => [
                                    $template->render('component/sidebar/item', [
                                        'fa_icon'=>'fa fa-laptop',
                                        'name'=>'TEst item!',
                                        'href'=>'/admin',
                                        'badges'=>[
                                            ['color'=>'green' , 'value'=>'yes!']
                                        ]
                                    ])
                                ]
                            ],
                                [
                                    'name' => 'Раздел разработки',
                                    'collection' => [
                                        $template->render('component/sidebar/item', [
                                            'fa_icon'=>'fa fa-laptop',
                                            'name'=>'TEst item!',
                                            'href'=>'/admin',
                                            'badges'=>[
                                                ['color'=>'green' , 'value'=>'yes!']
                                            ],
                                            'child'=>[
                                                $template->render('component/sidebar/item', [
                                                    'fa_icon'=>'fa fa-laptop',
                                                    'name'=>'TEst item!',
                                                    'href'=>'/admin',
                                                    'badges'=>[
                                                        ['color'=>'green' , 'value'=>'yes!']
                                                    ],
                                                    'child'=>[
                                                        $template->render('component/sidebar/item', [
                                                            'fa_icon'=>'fa fa-laptop',
                                                            'name'=>'TEst item!',
                                                            'href'=>'/admin',
                                                            'badges'=>[
                                                                ['color'=>'green' , 'value'=>'yes!']
                                                            ]
                                                            ])
                                                    ]
                                                ])
                                            ]
                                        ])
                                    ]
                                ]
                            ]
                        ])
                    ]),
                    'header' => $template->render('component/header', [
                        'auth'=>$template->render('component/header/auth',['user'=>'sergey_golev', 'actions'=>[
                            ['href'=>'/profile' , 'name'=>'Profile'],
                            ['href'=>'/setting' , 'name'=>'Setting'],
                            ['href'=>'/logout' , 'name'=>'logout']
                        ]]),
                        'LogoSmall'=>'<b>app</b>',
                        'LogoBig'=>'<b>Centurion</b>App',
                        'dropdown'=>[['fa_icon'=>'fa fa-cloud-download', 'label'=>'new!' , 'label_type'=>'warning' , 'header'=>'hello world', 'content'=>'<a href="/admin">Click this</a>' , 'footer'=> '<a href="#">See All Messages</a>']]
                    ]),
                    'content_header'=>$template->render('component/content/header', [
                        'title'=>'Hello world app',
                        'description'=>'This is first application build of this framework',
                        'breadcrumbs'=>[
                            ['value'=>'<a href="#"><i class="fa fa-dashboard"></i> Home</a>'],
                            ['value'=>'<a href="#">Layout</a>'],
                            ['value'=>'Collapsed Sidebar', 'active'=>true]
                        ]
                    ]),
                    'content'=>$form->render(),
                    'footer'=>$template->render('component/footer', [
                        'text'=>'    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.'
                    ])
            ]));

            //$this->response->setContent('<html><body><h1>Hello world.'.$this->arg['trans'].'</h1><a href="'.Router::url($this->route , ['trans'=>'sergey']).'">this route - '.$this->route.'</a></body></html>'.);
            $this->response->setStatusCode(Response::HTTP_OK);
            $this->response->headers->set('Content-Type', 'text/html');
            $this->response->send();

        }
}