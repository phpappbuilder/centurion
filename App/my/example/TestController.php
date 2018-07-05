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
            $collection = new \App\phpappbuilder\helpers\Helpers\Collection(['name'=>'Test collection', 'description'=>'Я хз как это заработало!']);
            $collection->setHelper('item_1', new \App\phpappbuilder\helpers\Helpers\Text(['name'=>'first_fu**ing_input', 'placeholder'=>'Please write text now!']));
            $collection->setHelper('item_2', new \App\phpappbuilder\helpers\Helpers\Text(['name'=>'Prosto tak', 'placeholder'=>'Please write text now!']));
            $form = new Form(['title'=>'My test form', 'submit'=>true, 'description'=>'this is test description' ,
                'form'=>[
                        'method'=>'get',
                        'action'=>'admin',
                        'class'=>'new-centurion'
                ]
            ]);
            $form->setHelper('item_1', new \App\phpappbuilder\helpers\Helpers\Text(['name'=>'first_fu**ing_input', 'placeholder'=>'Please write text now!']))
            ->setHelper('item_collection', $collection)
            ->setData(['item_1'=>123456, 'item_collection'=>[['item_1'=>'Привет', 'item_2'=>'Привет'],['item_1'=>'sdfsdf']]])
            ->setPrefix('forma');











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
                    'content'=>'<div class="callout callout-info"><h4>Tip!</h4><p>Add the sidebar-collapse class to the body tag to get this layout. You should combine this option with afixed layout if you have a long sidebar. Doing that will prevent your page content from getting stretchedvertically.</p>
            </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Start creating your amazing application!
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>'.$form->render()

                    ,
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